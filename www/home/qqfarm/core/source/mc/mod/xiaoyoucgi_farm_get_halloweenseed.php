<?php

# Mid-Autumn Festival celebrations
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);
$goods = qf_decode($goods);
if($npc['mc']==1) die('{"code":-12,"errorContent":"Bạn đã nhận rồi!","type":1}');

$npc['mc'] = 1;
$goods[1037]  += 3;

$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"id":1037,"num":3}';

?>