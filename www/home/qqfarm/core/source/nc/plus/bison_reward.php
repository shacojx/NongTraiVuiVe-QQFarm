<?php

# Tour a red envelope
$fbison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$money = $_QFG['db']->result("select money from app_qqfarm_user where uid=".$_QFG['uid']);
if($money<400) { //Enough money to reward cattle
	die('{"code":-2124}');
}

$fbison = qf_decode($fbison);
if($fbison['ownerid']>0) {
	$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$fbison['ownerid']);
	$bison = qf_decode($bison);
	$money = $bison['powerLevel'] * 50;
	$bison['jumpKey'] = 0;
	$bison['money'] += 400;
	$bison['income'] = 400;
	$bison['powerLevel'] = 0;
	$bison['sendTime'] = 0;
	$bison['state'] = 1;
	$bison['backTime'] = $_QFG['timestamp'];
	$bison['lastEatTime'] = 0;
	$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$fbison['ownerid']);
	
	$fbison['ownerid'] = 0;
}
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($fbison)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_user set money=money-".$money." where uid=".$_QFG['uid']);

echo '{"code":1,"exp":0,"money":'.$money.'}';

?>