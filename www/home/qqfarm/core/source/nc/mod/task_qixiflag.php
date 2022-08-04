<?php

# 活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

echo '{"biscuit":'.(int)$npc[1037].',"candy":'.(int)$npc[167].',"code":1,"exchange_flag":'.(int)$npc['exchange_flag'].'}';


?>