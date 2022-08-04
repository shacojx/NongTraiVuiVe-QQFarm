<?php

# Sell ​​a single crystal
qf_getCache('crystalinf', '/mc/');
$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($crystal);
$num = (int)$_REQUEST['num'];
$id = (int)$_REQUEST['id'];


if($crystal[$id] < $num) {
	die('{"id":0,"code":0,"direction":"Vui lòng kiểm tra lại!"}');
}
$price= $crystalinf[$id]['sale'];
$crystal[$id] -= $num;
foreach($crystal as $key => $value) {
	if($value == 0) {
		unset($crystal[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $price * $num . " ,crystal='" . qf_encode($crystal) . "'where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"Đã bán <font color=\"#0099FF\"> <b>' . $num . '</b> </font> ' . $crystalinf[$id]['name'] . ' nhận được <font color=\"#FF6600\"> <b>' . $price * $num . '</b> </font>Xu","ecode":0,"money":' . $price * $num . '}';

?>