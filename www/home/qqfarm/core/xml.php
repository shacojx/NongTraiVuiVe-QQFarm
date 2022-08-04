<?php

//XML��� 

include('common.php');
header('Content-Type: application/xml');
header('Cache-Control: no-cache, must-revalidate');
//����¼״̬
if($auth = qf_checkauth()) die($auth);

//����������ʵ�ģ��
$mod_list = array(
	'nc_main', //load_main_v_9.xml
	'nc_data',//data_zh_CN_v_17.xml
	'nc_addon',//addon_v_6.xml
	'nc_farm',//farmRestaurantConfig_v_0.xml
	'mc_main',//mcini_main_v_8.xml
	'mc_data',//animalConfig_7.xml
	'mc_card' //card.xml
);

//����ģ������
$mod = $_REQUEST['mod'];
list($a,$b) = explode("_", $mod);
$mod = $a.'_'.$b ;
$mod_name = $_REQUEST['mod'] ? $mod : '';
$mod_name = strtolower($mod_name);//תСд


//����ģ��
if(in_array($mod_name, $mod_list)) {
	include("source/xml/mod/{$mod_name}.php");
	echo $$mod_name;
} elseif(FARM_DEBUG) {
	error_log($mod_name . "\r\n", 3, 'data/logs/#xmlmod_deny.log');
}

?>