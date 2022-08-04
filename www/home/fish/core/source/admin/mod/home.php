<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

$fishTest = array();

$fishTest['开心鱼塘版本'][0] = FISH_VERSION;
$fishTest['开心鱼塘版本'][1] = '<a href="javascript:check_version();">检查最新版</a> <a href="http://www.gohooh.com/" target="_blank">下载最新版</a>';

$fishTest['服务器平台'][0] = PHP_OS.' / PHP v' . PHP_VERSION;

$fishTest['数据库版本'][0] = mysql_get_server_info();

if(function_exists('json_encode') & function_exists('json_decode')) {
	$fishTest['PHP JSON扩展'][0] = true;
	if(@version_compare(PHP_VERSION, '5.2.1', '<')) {
		$fishTest['PHP JSON扩展'][1] = "由PEAR支持,可能存在缺陷";
	}
} else {
	$fishTest['PHP JSON扩展'][0] = false;
}

qf_getView("admin/home");

?>