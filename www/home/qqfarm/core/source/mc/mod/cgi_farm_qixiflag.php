<?php

# Mid-Autumn Festival celebrations
$chris = $_QFG['db']->result("SELECT chris FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$can_exchange = 0;
if($chris==922) $can_exchange = 1;
if($chris==101) $can_exchange = 2;
echo '{"code":1,"exchange_flag":'.$can_exchange.'}';


?>