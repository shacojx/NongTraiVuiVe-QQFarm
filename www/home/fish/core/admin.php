<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# Giao diện nền


include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//检查权限
$auth && die('0|&|' . $auth);
if(!in_array($_HFG['uid'], $_HSC['adminer'])) {
	die('0|&|这里不是你该来的地方.');
}


//定义允许访问的模块
$mod_list = array(
	'home', //管理首页
	'quick', //快捷操作
	'system', //系统配置
	'notice', //公告管理
	'user_list', //用户列表
	'user_edit', //用户编辑
	'user_delete' //用户删除
);

//构造模块名称
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : 'home';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	include_once("source/admin/mod/{$mod_name}.php");
} else
	die("0|&|Thông số lỗi xem chi tiết tại http://www.gohooh.com/forum");

?>