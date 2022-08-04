<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 4.F Final///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `goods` text NOT NULL after `taskid`", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `tools` text NOT NULL after `package`", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_market drop cname", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_user MODIFY `visittime` int(10) DEFAULT '0'", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `bison` text NOT NULL", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `guard` text NOT NULL", "quiet");


die('OK. Thành công QFarm 4.8 Final');

?>