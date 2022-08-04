<?php

# Sell ​​a single
qf_getCache('cropstype', '/nc/');
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);
$number = (int)$_REQUEST['number'];
$cid = (int)$_REQUEST['cId'];

if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1'=>1,'101'=>101,'34'=>34,'48'=>48);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('14'=>14,'109'=>109,'39'=>39,'76'=>76);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('118'=>118,'72'=>72,'79'=>79,'27'=>27);
}

if($fruit[$cid] < $number) {
	die('{"cId":0,"code":0,"direction":"Vui lòng kiểm tra lại!"}');
}
if(array_key_exists($cid, $twoid)){
	$price= 2*$cropstype[$cid]['sale'];
}else{
	$price= $cropstype[$cid]['sale'];
}

$fruit[$cid] -= $number;
foreach($fruit as $key => $value) {
	if($value == 0) {
		unset($fruit[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $price * $number . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);


//出售日志
$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $_QFG['uid'] . ", 6, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . $cid . ", 1);");

echo '{"cId":' . $cid . ',"code":1,"direction":"Đã bán <font color=\"#0099FF\"> <b>' . $number . '<\/b> <\/font> ' . $cropstype[$cid]['cName'] . ', nhận được <font color=\"#FF6600\"> <b>' . $price * $number . '<\/b> <\/font>","money":' . $price * $number . '}';

qf_addFeed('farmlandstatus_sale');

?>