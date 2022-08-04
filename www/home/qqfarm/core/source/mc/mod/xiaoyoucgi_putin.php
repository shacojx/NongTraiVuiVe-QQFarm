<?php

# Mid-Autumn Festival celebrations
$uId = (int)$_REQUEST['uId'];
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$ownernpc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $uId);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$ownernpc = qf_decode($ownernpc);
$npc = qf_decode($npc);
$package = qf_decode($package);
$goods = qf_decode($goods);
if($package['1037'] <= 0) die('{"code":-12,"errorContent":"Bạn chưa có bánh quy!","type":1}');
if($npc['mc_day'] <= 0) die('{"code":-12,"errorContent":"Hôm nay bạn đã lấy đủ 10 bánh quy. Ngày mai hãy quay lại nhé!","type":1}');

if(array_key_exists($_QFG['uid'], $ownernpc['mcput'])>0) die('{"code":-13,"errorContent":"Hãy đến nông trại bạn bè xem sao!","type":1}');

$npc['mc_day'] -= 1;
$num = mt_rand(1, 2);
$goods['1037']  += $num;
$package['1037']  -= 1;

$ownernpc['1037'] += 1;
$ownernpc['mcput'][$_QFG['uid']] +=1;

$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($ownernpc) . "' where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set package='" . qf_encode($package) . "',goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"num":'.$num.'}';

?>