<?php
//Information received flowers

$uid = (int)$_REQUEST['uid'];
$time = (int)$_REQUEST['time'];
$flower = $_QFG['db']->result("SELECT flower FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$flower = qf_decode($flower);

foreach($flower as $key => $value) {
	if($value['fromId'] == $uid && $value['time'] == $time) {
		unset($flower[$key]);
	}
}		
$_QFG['db']->query("UPDATE app_qqfarm_nc set flower='" . qf_encode(array_values($flower)) . "' where uid=" . $_QFG['uid']);

echo '{"cardId":'.$time.',"code":1,"direction":"ok","ecode":1,"friendUin":'.$uid.'}';


?>