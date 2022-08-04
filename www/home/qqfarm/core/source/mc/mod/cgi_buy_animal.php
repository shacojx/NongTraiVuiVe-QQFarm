<?php

# Buy animals

$cid = (int)$_REQUEST['cId'];
$number = (int)$_REQUEST['number'];

$list = $_QFG['db']->fetchOne("SELECT status,exp,decorative FROM app_qqfarm_mc where uid=" . $_QFG['uid']);

$animal = qf_decode($list['status']);
$decorative = qf_decode($list['decorative']);

$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);

$money_1 = $animaltype[$cid]['price'] * $number;
if($money < $money_1) {
	die('{"errorContent":"Không đủ tiền!","errorType":"1011"}');
}


$item2 = $decorative['item2'] + (3 > $decorative['item2'] ? 1 : 2);
$item3 = (0 == $decorative['item3']) ? 0 : ($decorative['item3'] + 2);
$animalnum = $item2 + $item3;

$item2count = 0;
$item3count = 0;
foreach($animal as $key => $value) {
	if(!$value['cId']|| $key >= $animalnum) {
		unset($animal[$key]);//Log consumption
	}
	else {
		$value['cId'] > 1500 ? $item3count++ : $item2count++;
	}
}
$anicount = $item2count + $item3count;

if($number > $animalnum) {
	echo '{"errorContent":"Bạn chỉ có thể cho ' . ($animalnum - $anicount) . ' ăn thức ăn mà thôi!","errorType":"1011"}';
	exit();
}
if($cid > 1500 && $number > ($item3 - $item3count)) {
	echo '{"errorContent":"Chuồng của bạn chỉ chứa được ' . ($item3 - $item3count) . ' con vật mà thôi!","errorType":"1011"}';
	exit();
}
if($cid > 1000 && $cid < 1500 && $number > ($item2 - $item2count)) {
	echo '{"errorContent":"Ổ của bạn chỉ chứa được ' . ($item2 - $item2count) . ' con vật mà thôi!","errorType":"1011"}';
	exit();
}

for($n = 0; $n < $number; $n++) {
	$animal[] = array("buyTime"=>$_QFG['timestamp'],"cId"=>$cid,"postTime"=>0,"totalCome"=>0,"tou"=>"", "growtime"=>0,"p"=>0);
	if(!$key){
	$buyanimal[] = array("buyTime"=>$_QFG['timestamp'], "cId"=>$cid, "createTime"=>0,"growTime"=>0,"growTimeNext"=>($animaltime[$cid][0] - 1),"postTime"=>$_QFG['timestamp'],"productNum"=>0,"serial"=>($key+$n+1) ,"status"=>1,"statusNext"=>2,"totalCome"=>0);
	} else {
	$buyanimal[] = array("buyTime"=>$_QFG['timestamp'], "cId"=>$cid, "createTime"=>0,"growTime"=>0,"growTimeNext"=>($animaltime[$cid][0] - 1),"postTime"=>$_QFG['timestamp'],"productNum"=>0,"serial"=>($key+$n+2) ,"status"=>1,"statusNext"=>2,"totalCome"=>0);}
}

//Save user data
$_QFG['db']->query(("UPDATE app_qqfarm_user set money = money - " . $money_1) . " where uid=" . $_QFG['uid']);
$_QFG['db']->query(("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',exp=exp+" . $number * 5) . " where uid=" . $_QFG['uid']);

//Log consumption
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 10 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
foreach($values as $value) {
	if (($value['type'] == 10) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
		$list = $value['iid'];
		$money = $value['money'];
		$scount = $value['count'];
		$stime = $value['time'];
		$list = $list . "," . ($cid+10000);
		$scount = $scount . "," . $number;
		$money = $money + ($animaltype[$cid]['price'] * $number);
		$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
		"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
		", isread = 1 where uid = " . $_QFG['uid'] .
		" AND type = 10 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
		$_QFG['uid'];
	}
}
if(!$sql1 && $number > 0) {
	$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
	$_QFG['uid'] . ", 10," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
	($cid+10000) . ", 1, " . $animaltype[$cid]['price'] * $number . ");";
}
$query = $_QFG['db']->query($sql1);

echo '{"addExp":' . ($number * 5) . ',"animal":' . qf_jsonCode($buyanimal) . ',"code":0,"money":' . ($animaltype[$cid]['price'] * $number) . ',"msg":"success","num":' . $number . ',"uin":""}';

?>