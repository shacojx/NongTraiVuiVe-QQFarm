<?php

# Open slot
$slotid = (int)$_REQUEST['slotid'];
$moneyall = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = qf_decode($beasts);

$money = $slotid*300000;//Slot to the coin
if($moneyall<$money) die('{"ecode":1,"direction":"Không đủ tiền!"}');
$beasts['maxslotid'] = $slotid;


$_QFG['db']->query("update app_qqfarm_user set money=money - ".$money.",beasts='".qf_encode($beasts)."' where uid=" . $_QFG['uid']);

echo '{"ecode":0,"money":-'.$money.'}';

?>