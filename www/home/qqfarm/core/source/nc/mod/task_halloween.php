<?php

# 活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

echo '{"code":1,"exchange_flag":'.(int)$npc['nc'].'}';


?>