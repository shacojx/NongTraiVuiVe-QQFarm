<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

if($_GET['submit'] == 1) {
	//获取鱼塘牧场公告
	$_HSC['friendType'] = (int)$_POST['friendType'];
	$_HSC['closefish'] = (int)$_POST['closefish'];
	$_HSC['closeinfo'] = $_POST['closeinfo'];
	$_HSC['view']['player'] = (int)$_POST['view_player'];
	$_HSC['adminer'] = explode(',', $_POST['adminer']);;

	//保存系统配置
	if(qf_putCache('_HSC', $_HSC)) {
		die('1|&|修改成功|&|refresh');
	}
	die('0|&|修改失败');
}

qf_getView("admin/system");

?>