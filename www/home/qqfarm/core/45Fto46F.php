<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 4.6 Beta1///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `goods` text NOT NULL after `taskid`", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `tools` text NOT NULL after `package`", "quiet");


die('OK. Thành công! QFarm 4.6 Beta1');

?>