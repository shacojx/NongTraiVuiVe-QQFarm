<?php

$id = intval($_GET['id']);
if($id < 1) {
	die('1|&|Lỗi tham số');
}

$_QFG['db']->query("DELETE FROM app_qqfarm_user WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_nc WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_mc WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_mclogs WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_nclogs WHERE uid=" . $id);

die('1|&|Tài khoản UID' . $id . ' đã được xóa|&|refresh|&|1');

?>