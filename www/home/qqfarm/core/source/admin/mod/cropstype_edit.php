<?php

# System Configuration

$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|Lỗi tham số');
}

qf_getCache('cropstype', '/nc/');

if($_GET['submit'] == 1) {
	$cropstype[$id]['cLevel'] = intval($_REQUEST['cLevel']);
	$cropstype[$id]['cropExp'] = intval($_REQUEST['cropExp']);
	$cropstype[$id]['expect'] = intval($_REQUEST['expect']);
	$cropstype[$id]['output'] = intval($_REQUEST['output']);
	$cropstype[$id]['price'] = intval($_REQUEST['price']);
	$cropstype[$id]['sale'] = intval($_REQUEST['sale']);
	qf_putCache('cropstype', $cropstype, '/nc/') ;
	die('1|&|修改作物(cId:' . $id . ')的参数成功.|&|refresh|&|1');
}
else {
	$farm_list = $cropstype[$id];
	qf_getView("admin/cropstype_edit");
}
?>