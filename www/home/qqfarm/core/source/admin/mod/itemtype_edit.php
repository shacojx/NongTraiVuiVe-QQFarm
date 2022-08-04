<?php

# System Configuration
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|Lỗi tham số');
}

qf_getCache('itemtype', '/nc/');

if($_GET['submit'] == 1) {
	$itemtype[$id]['itemName'] = $_REQUEST['itemName'];
	$itemtype[$id]['itemDesc'] = $_REQUEST['itemDesc'];
	$itemtype[$id]['itemValidTime'] = intval($_REQUEST['itemValidTime']*24*3600);
	$itemtype[$id]['price'] = intval($_REQUEST['price']);
	$itemtype[$id]['FBPrice'] = intval($_REQUEST['FBPrice']);
	$itemtype[$id]['YFBPrice'] = intval($_REQUEST['YFBPrice']);
	$itemtype[$id]['exp'] = intval($_REQUEST['exp']);
	$itemtype[$id]['level'] = intval($_REQUEST['level']);

	qf_putCache('itemtype', $itemtype, '/nc/') ;
	die('1|&|Tham số CID(cId:' . $id . ') đã được thay đổi|&|refresh|&|1');
}
else {

	$itemtype_list = $itemtype[$id];
	qf_getView("admin/itemtype_edit");
}
?>