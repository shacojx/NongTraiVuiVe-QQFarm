<?php

# Harvest cattle
$slotid = (int)$_REQUEST['slotid'];
$list = $_QFG['db']->fetchOne("select beasts from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list['beasts']);

if($beasts['beasts'][$slotid]['leftraise']!=0 && $beasts['beasts'][$slotid]['fid']) die('{"direction":"Chưa chưa đến mùa thu hoạch!","ecode":-30306}');

$money = $beasts['beasts'][$slotid]['income'];
//unset($beasts['beasts'][$slotid]);

$beasts['beasts'][$slotid] = array("adopttime"=>0,"curblood"=>0,"income"=>0,"leftraise"=>0,"price"=>0,"status"=>0,"totalblood"=>0,"type"=>0);
$beasts['beasts'] = array_values($beasts['beasts']);
$_QFG['db']->query("update app_qqfarm_user set money=money + ".$money." ,beasts='".qf_encode($beasts)."'where uid=" . $_QFG['uid']);

echo '{"ecode":0,"money":'.$money.'}';

?>