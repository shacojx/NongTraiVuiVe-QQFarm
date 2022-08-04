<?php
//Tool Interface

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//Check the login status
if($auth = qf_checkauth()) die($auth);


//Allow access to the module defined
$mod_list = array(
	'top', //Top
	'exchange', //Redeem
	'help', //Game Help
	'setting', //Game Settings
	'vip', //VIP Upgrade
	'market_mc', //Farming Market
	'market_nc' //Farming Market
);

//Name of building blocks
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//Load Module
if(in_array($mod_name, $mod_list)) {
	$tab_name = $mod_name;
	include("source/tools/mod/{$mod_name}.php");
} else {
	die('Parameter error');
}

?>