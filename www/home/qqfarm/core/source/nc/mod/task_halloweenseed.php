<?php

# Mid-Autumn Festival celebrations
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);
$package = qf_decode($package);
if($npc['nc']==1) die('{"code":-12,"errorContent":"Bạn đã nhận kẹo rồi!","type":1}');

$npc['nc'] = 1;
$package[167]  += 3;

$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"id":167,"num":3}';

?>