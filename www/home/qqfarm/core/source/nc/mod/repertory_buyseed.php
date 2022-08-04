<?php

# Crop Shop

$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT exp,package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$number = (int)$_REQUEST['number'];
$cid = (int)$_REQUEST['cId'];
$money_1 = $cropstype[$cid]['price'] * $number;
if($money < $money_1) {
	die('{"cId":0,"code":0,"direction":"Không đủ tiền!"}');
}

$mylevel = qf_toLevel($list['exp']);
if($mylevel < $cropstype[$cid]['cLevel']) {
	die('{"cId":0,"code":0,"direction":"Bạn chưa đủ cấp độ!"}');
}

if(in_array($cid, $_HIDE['seed'])) {
	die('{"cId":0,"code":0,"direction":"Bạn chưa mua hạt giống này!"}');
}

$package = qf_decode($list['package']);
$package[$cid] += $number;

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-" . $money_1 . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);

//Log consumption
$_QFG['db']->query(
	"INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
	", 7, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
	", " . $cid . ", 1, '".$money_1."');"
);

echo '{"code":1,"cId":' . $cid . ',"cName":"' . $cropstype[$cid]['cName'] . '","num":' . $number . ',"money":-' . $money_1 . '}';

?>