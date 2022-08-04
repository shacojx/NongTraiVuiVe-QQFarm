<?php

# Management Home

$farmTest = array();


//Environmental inspection
$farmTest['QQFarm Version'][0] = FARM_VERSION;
$farmTest['QQFarm Version'][1] = '(<a href="javascript:check_version();">Kiểm tra</a> <a href="http://www.phpye.com/forum-39-1.html" target="_blank">Tải bản mới nhất</a>)';
$farmTest['Database Version'][0] = mysql_get_server_info();
if(function_exists('json_encode') && function_exists('json_decode')) {
	$farmTest['Json library'][0] = true;
	if(@version_compare(PHP_VERSION, '5.2.0', '<')) {
		$farmTest['Json library'][1] = "(Có thể có lỗi nếu có hỗ trợ PEAR)";
	}
} else {
	$farmTest['Json library'][0] = false;
}

$nccount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_nc");
$mccount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_mc");
$tcount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_user where visittime>({$_QFG['timestamp']}-604800)");
$rcount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_user where visittime>({$_QFG['timestamp']}-2592000)");

qf_getCache('cropstype', '/nc/');
qf_getCache('animaltype', '/mc/');
$nc_toolstype=qf_getCache('toolstype', '/nc/');
$mc_toolstype=qf_getCache('toolstype', '/mc/');
$nc_itemtype=qf_getCache('itemtype', '/nc/');
$mc_itemtype=qf_getCache('itemtype', '/mc/');

qf_getView("admin/home");

?>