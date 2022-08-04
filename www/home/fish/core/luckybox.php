<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);
include_once("source/ui/fish.php");

# Bọ rùa may mắn
if($_REQUEST['mod']=='luckybox' && $_REQUEST['act']=='getprice') {
	$lucktime = $_HFG['db']->result("SELECT lucktime FROM app_fish_ui where uid=" . $_HFG['uid']);
	if( ($_HFG['timestamp']-$lucktime) < 24*3600 ) {
		die( '{"m":0,"f":0,"code":0,"d":"Bạn đã rút bọ rùa hôm nay, hãy quay lại vào ngày mai"}');
	}

	echo '{"m":0,"f":0,"code":1,"d":"Rất vui được gặp bạn hôm nay, hãy bốc thăm bọ rùa để nhận quà bạn nhé"}';
}

# Giải ladybug Lịch
if($_REQUEST['mod']=='luckybox' && $_REQUEST['act']=='getlucky') {
	$list = $_HFG['db']->fetchOne('select package,lucktime from app_fish_ui where uid=' . $_HFG['uid']);
	$package_arr = qf_decode($list['package']);
	$lucktime = $list['lucktime'];
	if( ($_HFG['timestamp']-$lucktime) < 24*3600 ) {
		//24小时内不能再次参加
		exit();
	}
	$randfish = array_rand($fishtype);
	$package_arr[$randfish]  = $package_arr[$randfish] + 1;
	$_HFG['db']->query("UPDATE app_fish_ui set package = '".qf_encode($package_arr)."', lucktime=".$_HFG['timestamp'] ." where uid=" . $_HFG['uid']);
	echo '{"t":1,"i":'.$fishtype[$randfish]['b'].',"m":0,"f":0,"num":"0","count":1,"code":1,"d":"gohooh172'.$fishtype[$randfish]['bn'].'gohooh173"}';
}


?>