<?php

# System Configuration
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|Lỗi tham số');
}

qf_getCache('toolstype', '/mc/');

if($_GET['submit'] == 1) {
	$toolstype[$id]['name'] = $_REQUEST['name'];
	$toolstype[$id]['price'] = intval($_REQUEST['price']);
	$toolstype[$id]['qdprice'] = intval($_REQUEST['qdprice']);
	$toolstype[$id]['yqdprice'] = intval($_REQUEST['yqdprice']);
	$toolstype[$id]['effect'] = intval($_REQUEST['effect']);
	$toolstype[$id]['description'] = $_REQUEST['description'];
	$toolstype[$id]['saleOut'] = $_REQUEST['saleOut'] == 'true' ? true : false;
	qf_putCache('toolstype', $toolstype, '/mc/') ;
	die('1|&|Tham số CID(cId:' . $id . ') đã được thay đổi|&|refresh|&|1');
}
else {
	$toolstype_list = $toolstype[$id];
	qf_getView("admin/mctoolstype_edit");
}
?>