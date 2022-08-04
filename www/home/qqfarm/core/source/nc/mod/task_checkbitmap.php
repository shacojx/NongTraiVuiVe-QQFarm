<?php

# 活动
$chris = $_QFG['db']->result("SELECT chris FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$flag = 0;
if($chris ==20110101) $flag = 1;

echo '{"code":1,"flag":'.$flag.'}';


?>