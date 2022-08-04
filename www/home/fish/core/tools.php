<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# 工具接口

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);


//定义允许访问的模块
$mod_list = array(
	'exchange', //积分兑换
	'setting'//游戏设置
);

//构造模块名称
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	include_once("source/tools/mod/{$mod_name}.php");
} else {
	die('Thông số lỗi, xem chi tiết tại http://www.gohooh.com/forum');
}

?>