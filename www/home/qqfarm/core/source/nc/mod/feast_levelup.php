<?php
//Upgrade Tips

$mylevel = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$mylevel = qf_toLevel($mylevel);

exit('{"code":1,"direction":"<font color=\"#0099FF\"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chúc mừng bạn đã đạt cấp '. $mylevel. '!</font>"}');

?>