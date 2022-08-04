<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 6.0 Beta3///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_user add column `beasts` text NOT NULL", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_user add column `crystal` text NOT NULL", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_user add column `tools` text NOT NULL", "quiet");


$list = $_QFG['db']->fetchAll("SELECT uid, beasts, crystal, tools FROM app_qqfarm_mc");
foreach($list as $key => $value) {
	$beasts = qf_decode($value['beasts']);
	$crystal = qf_decode($value['crystal']);
	$tools = qf_decode($value['tools']);
	foreach($tools as $tk=>$tv) {
		if($tv < 0  || $tk < 100000) {
			unset($tools[$tk]);
		} 
	}
	$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "',crystal='" . qf_encode($crystal) . "',tools='" . qf_encode($tools) . "' where uid=" . $value['uid']);
}

//$_QFG['db']->query("alter table app_qqfarm_mc drop column `crystal`, drop column `beasts`", "quiet");
//$_QFG['db']->query("alter table app_qqfarm_nc drop column `bison`", "quiet");

die('OK. Thành công! QFarm 6.0 Final');

?>