<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 4.7 Beta1///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_market drop cname", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_user MODIFY `visittime` int(10) DEFAULT '0'", "quiet");


die('OK. Thành công! QFarm 4.7 Final');

?>