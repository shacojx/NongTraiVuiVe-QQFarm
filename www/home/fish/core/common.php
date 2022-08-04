<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# Tham số tập tin


@error_reporting(0);
define('FISH_SET', 1); //内部标示符,请勿修改
define('FISH_DEBUG', 1); //调试模式[=0:关闭|>0:记录MySQL错误|=2:记录PHP错误]
define('FISH_VERSION', 'Gold'); //系统版本,请勿修改
define('FISH_ROOT', str_replace('\\', '/', dirname(__file__))); //HFish路径
function_exists("date_default_timezone_set") && date_default_timezone_set('PRC');

//for PHP of Version < 5.2.0
if(@version_compare(PHP_VERSION, '5.2.0', '<')) {
	if(@version_compare(PHP_VERSION, '5.0.0', '<')) {
		die('phiên bản PHP của bạn không được hỗ trợ');
	}
	include_once('source/json.func.php');
}

//加载缓存
include_once('source/cache.func.php');
qf_getCache('_HSC');
qf_getCache('_NOTICE');

//全局变量
$_HFG = array();
$_HFG['uid'] = 0;
$_HFG['timestamp'] = time();

//加载公共函数
include_once('source/common.func.php');
error_reporting(FISH_DEBUG == 3 ? 2037 : 0);
FISH_DEBUG == 2 && set_error_handler('qf_error_handler');

//取消魔术引用
if(get_magic_quotes_gpc()) {
	$_GET = qf_stripslashes($_GET);
	$_POST = qf_stripslashes($_POST);
	$_COOKIE = qf_stripslashes($_COOKIE);
}
if(get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}

///////////////////////////////////////////////////////////////////////

//接口定义
define('API_ROOT', FISH_ROOT . '/api/' . $_HSC['apiType']);
include_once('config/api/'.$_HSC['apiType'].'.php');

//连接数据库
include_once('source/mysql.class.php');
$_HFG['db'] = new dbstuff($_HSC['db']);
$_HFG['db']->debug = FISH_DEBUG;
if(isset($_HSC['db']['tbprefix'])) {
	$_HFG['db']->tbPrefix = array(
		array('app_fish_', 'pap_tbpre_'),
		array($_HSC['db']['tbprefix'].'fish_', $_HSC['db']['tbprefix'])
	); 
}

//加载接口
include_once(API_ROOT . '/main.php');
//检查登录状态
$auth = qf_checkauth(); 
//生成校验码
$uikey = md5($_HFG['uid'].$_HFG['timestamp']);

//关闭鱼塘和提示
if($_HSC['closefish'] == 0 && !in_array($_HFG['uid'],$_HSC['adminer'])) {
	header('Content-Type:text/html; charset=utf-8');
	echo "<div style='height:200px;line-height:25px;'>".$_HSC['closeinfo']."</div>";
	exit();
}

?>