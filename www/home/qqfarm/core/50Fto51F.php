<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 5.0F Final///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `nclock` text NOT NULL", "quiet");



die('OK. Thành công! QFarm 5.1 Final');

?>