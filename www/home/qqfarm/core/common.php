<?php
//Public Add
//Check the login status

@error_reporting(0);
define('FARM_SET', 1); //Internal identifiers, do not change
define('FARM_DEBUG', 3); //Debug mode [= 0: off |> 0: log MySQL errors | = 2: PHP error log]
define('FARM_VERSION', '6.0 Final SP3 Build 20110303.1100'); //System versions, do not change
define('FARM_DAY',  substr(FARM_VERSION,20,8)); //System version date, do not change
define('FARM_ROOT', str_replace('\\', '/', dirname(__file__))); //QF installation path
function_exists('date_default_timezone_set') && date_default_timezone_set('PRC');
chdir(FARM_ROOT);//Switch the working directory
$verson = FARM_DAY;
//Farm directory installation
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"];
$url = preg_replace('/core.*$/i', '' ,$url);
$url = $url.'core';

//for PHP of Version < 5.2.0
if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	if(version_compare(PHP_VERSION, '5.0.0', '<')) {
		die('您的PHP版本不被支持');
	}
	include('source/json.func.php');
}

//Load cache
include('source/cache.func.php');
qf_getCache('_QSC');
qf_getCache('_VIP');
qf_getCache('_NOTICE');

//Global variables
$_QFG = array();
$_QFG['uid'] = 0;
$_QFG['timestamp'] = time();

//Enable gzip
if ($_QSC['gzipcompress'] == 1 && function_exists('ob_gzhandler') && !strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0')) {
	ob_start('ob_gzhandler');
} else 	ob_start();

//Public function load
include('source/common.func.php');
error_reporting(FARM_DEBUG == 3 ? 2037 : 0);
FARM_DEBUG == 2 && set_error_handler('qf_error_handler');

//Cancel Magic quote
if(get_magic_quotes_gpc()) {
	$_GET = qf_stripslashes($_GET);
	$_POST = qf_stripslashes($_POST);
	$_COOKIE = qf_stripslashes($_COOKIE);
}
if(get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}

//Generate XML
if($_QSC['gzipcompress'] == 0){
	$xml ='data/xml/';
	$xml_list = array('nc_main', 'nc_data','nc_addon','nc_farm','mc_main','mc_data','mc_card');
	foreach($xml_list as $key => $value) {
		if(!file_exists('data/xml/'.$value.'_'.FARM_DAY.'.xml')){
			include('source/xml/mod/'.$value.'.php');
			qf_getXML($value.'_'.FARM_DAY,$$value,'/xml/');
		}
	}
} else $xml ='xml.php?mod=';

///////////////////////////////////////////////////////////////////////

//Load interface configuration
define('API_ROOT', 'api/' . $_QSC['apiType']);
include('config/api/'.$_QSC['apiType'].'.php');


//Connect to the database
include('source/mysql.class.php');
$_QFG['db'] = new dbstuff($_QSC['db']);
FARM_DEBUG ||$_QSC['db']->logFile = null;
if(isset($_QSC['db']['tbprefix'])) {
	$_QFG['db']->tbPrefix = array(
		array('app_qqfarm_', 'pap_tbpre_'),
		array($_QSC['db']['tbprefix'].'qqfarm_', $_QSC['db']['tbprefix'])
	); 
}

//Loading the interface function
include(API_ROOT . '/main.php');

?>