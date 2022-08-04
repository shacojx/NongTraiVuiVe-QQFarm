<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 4.8 Beta1///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `bison` text NOT NULL", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `guard` text NOT NULL", "quiet");



die('OK. Thành công! QFarm 4.8 Final');

?>