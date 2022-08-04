<?php

# Activities
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);

$npc = qf_decode($npc);
$vip = qf_decode($vip);
$package = qf_decode($package);
$goods = qf_decode($goods);

if(date('Ymd', $_QFG['timestamp']) == date('Ymd', $npc['daytimes'])) die('{"code":0,"direction":"Hôm nay đã nhận rồi!"}');

if($vip['status']){
	$num = 4;
	$vipstatus = 1;
} else {
	$num = 3;
	$vipstatus = 0;
}

$npc['daytimes'] = $_QFG['timestamp'];
$package['367'] +=$num;
$goods['1546'] +=$num;


$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"vip":'.$vipstatus.'}';

?>