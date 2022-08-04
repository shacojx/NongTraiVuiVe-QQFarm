<?php
//Farm entrance

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//Check the login status
if($auth = qf_checkauth()) {
	die($auth);
}

//New User Check
if(!$_QFG['db']->result("SELECT uid FROM app_qqfarm_nc where uid=" . $_QFG['uid'])) {
	include("source/nc/user_init.php");
}


//Allow access to the module defined
$mod_list = array(
	'chat_clearchat', //Clear message
	'chat_clearlog', //Clear Log
	'chat_getallinfo', //User status
	'chat_sendchat', //Guest Book
	'dog_feedmoney', //Dog Food Tips
	'cgi_ws_com', 
	'farmlandstatus_clearweed', //Weeding crops
	'farmlandstatus_fertilize', //Crop plus fertilizer
	'farmlandstatus_getoutput', //Crop output
	'farmlandstatus_harvest', //Harvest crops
	'farmlandstatus_pest', //Malicious worms release
	'farmlandstatus_planting', //Planting crops
	'farmlandstatus_scarify', //Crops from the land
	'farmlandstatus_scatterseed', //Malicious grass
	'farmlandstatus_scrounge', //Theft of crops
	'farmlandstatus_spraying', //Crop insecticide
	'farmlandstatus_water', //Crop water
	'feast_getpackagelist', //Package Tips
	'feast_getpackage', //Daily Package
	'feast_levelup', //Upgrade Tips
	'friend', //Friends List
	'cgi_farm_getstatus_filter', //Friend Status
	'cgi_farm_shop_verify', //y money to buy
	'cgi_farm_buyweapon', //Buy gold
	'gb_buy', //y money to buy
	'item_activeitem', //Farm Decoration
	'cgi_farm_buyitem', //Buy gold decoration
	'cgi_farm_item_vip', //VIP decoration
	'item_deactiveitem', //Cancel decoration
	'item_getuseritems', //Initialization decoration
	'item_healthmode', //Health model
	'item_shop', //Accessories shop
	'cgi_register', //Open pasture
	'feeds_select', //Open pasture
	'feeds_delete', //Open pasture
	'repertory_buyseed', //Crop purchase
	'usertool_getseedinfo', //Crop Shop
	'usertool_getseedinfo', //Crop Shop
	'cgi_farm_getusercrop', //User storage
	'repertory_getuserseed', //If the user packet
	'repertory_sale', //Sell ​​a single
	'repertory_saleall', //All sold
	'repertory_getseedinfo', //Crop Shop
	'cgi_farm_seed_list', //Seed storage	
	'cgi_farm_seed_sell', //Seed sold separately
	'tool_list', //Seed storage
	'task_accept', //Novice Task Tips
	'task_npc', //NPC Tasks
	'task_qixiflag', //NPC Tasks
	'task_activity', //NPC Tasks
	'task_halloween', //NPC Tasks
	'task_halloweenseed', //NPC Tasks
	'task_checkbitmap',//Christmas NPC Tasks
	'task_putin', //NPC Tasks
	'task_update', //Novice tasks
	'cgi_farm_flower_get_card', //Gifts flowers Message
	'user_case', //Processing plants
	'cgi_farm_flower_del_msg', //Remove Friend flowers
	'user_checkstatus', //Standby
	'cgi_farm_exchange', //Seed consumption
	'user_getnotice', //Farm Bulletin
	'user_received', //The information received flowers
	'user_reclaimpay', //Land reclamation
	'user_reclaim', //Open to tips
	'user_run', //Visit the farm yourself and others
	'cgi_farm_flower_send', //Flowers Information
	'cgi_farm_flower_received', //The information received flowers
	'user_welcome', //Welcome to the farm
	'user_costfeeds', //Welcome to the farm
	'cgi_farm_upgrade', //Upgrade red
	'usertool_buytool', //Buy dog ​​food
	'usertool_gettools', //Dog food stores
	'cgi_farm_set_lock',//Bag lock
	'fcg_ws_get_costfeeds',//User results
	'sysmsg_select',
	'view_fcg',//Activities
	'user_qqshow',//Activities
	'cgi_pasture_chunjie',//Activities
	'cgi_pasture_checkbitmap',//Activities
	'qqshow_activeitem',//Activities
	'qqshow_deactiveitem',//Activities
	'cgi_farm_attack_beast',
	'cgi_farm_beast_getnick',//User cattle
	'cgi_farm_get_userbeast',//User cattle information
	'cgi_farm_get_moralexp',//Users character values
	'cgi_farm_adopt_beast',//Users to buy cattle
	'cgi_farm_raise_beast',//Crystal Warehouse
	'cgi_farm_get_usercrystal',//Crystal Warehouse
	'cgi_farm_sell_crystal',//Sale of crystal
	'cgi_farm_pickup_crystal',//Users to take crystal
	'cgi_farm_reward_beast',//Cattle Awards
	'cgi_farm_donate_beast',//Harvest cattle
	'cgi_farm_open_slot',//Open slot
	'cgi_farm_hpage_beast',//
	'cgi_farm_beast_getnick'
);


//Name of building blocks
if($_REQUEST['phpye'] == "phpye"){
	$mod_name = "cgi_farm_get_usercrystal"; 
} else {
	$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
	$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
}
$mod_name = strtolower($mod_name);

//Load Module
if(in_array($mod_name, $mod_list)) {
	qf_getCache('cropstype', '/nc/');
	qf_getCache('itemtype', '/nc/');
	qf_getCache('toolstype', '/nc/');
	qf_getCache('upgrade', '/nc/');
	qf_getCache('allflower', '/nc/');
	include("source/nc/mod/{$mod_name}.php");
} elseif(FARM_DEBUG) {
	error_log($mod_name . "\r\n", 3, 'data/logs/#ncmod_deny.log');
}

?>