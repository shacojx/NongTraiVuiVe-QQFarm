<?php
//Back entrance

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//Check permissions
if($auth = qf_checkauth() || !in_array($_QFG['uid'], $_QSC['adminer'])) {
	die($auth ? $auth : 'Permissions check failed.');
}

//Allow access to the module defined
$mod_list = array(
	'home', //Management Home
	'quick', //Shortcuts
	'system', //System Configuration
	'notice', //Announcement Management
	'user_list', //User list
	'user_edit', //User Edit
	'user_delete', //User delete
	'cropstype_list', //Crop parameters
	'cropstype_edit', //Modified crop parameters
	'itemtype_list', //Decorative parameters
	'itemtype_edit', //Decorative parameters change
	'toolstype_list', //Props parameter
	'toolstype_edit', //Props to modify parameters
	'mctoolstype_list', //Props parameter
	'mctoolstype_edit', //Props to modify parameters
	'animaltype_list', //Animal parameters
	'animaltype_edit', //Modify the animal parameters
	'syncdata' //Synchronous data
);

//Name of building blocks
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : 'home';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//Load Module
if(in_array($mod_name, $mod_list)) {
	$tab_name = 'admin';
	include("source/admin/mod/{$mod_name}.php");
} else {
	die("0|&|Parameter error");
}

?>