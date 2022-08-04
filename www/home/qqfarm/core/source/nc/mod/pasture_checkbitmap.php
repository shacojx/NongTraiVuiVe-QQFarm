<?php

# 活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$farm_num = qf_decode($fruit);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$anim_num = qf_decode($package);

$flag = 1;
if(date('Ymd', $_QFG['timestamp']) != date('Ymd', $npc['daytimes'])) $flag = 0;

echo '{"flag":'.$flag.',"farm_num":'.(int)$farm_num['367'].',"anim_num":'.(int)$anim_num['1546'].',"code":1}';

?>