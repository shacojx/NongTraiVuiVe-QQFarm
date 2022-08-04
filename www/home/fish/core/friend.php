<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);

# Danh sách bạn bè
if($_REQUEST['mod']=="friend" && $_REQUEST['act']=="get" || $_REQUEST['act']=="refresh"){
	//好友条件
	$condition = ' limit 0,1000';
	if($_HSC['friendType'] == 1) {
		$friends = qf_getFriends(0);
		$friends .= (empty($friends) ? '' : ',') . $_HFG['uid'];
		$condition = " WHERE uid IN({$friends}) group by uid " . $condition;
	}  else {
		$condition = " group by uid ".$condition;
	}

	$list = $_HFG['db']->fetchAll("SELECT uid,username,money,exp FROM app_fish_ui" . $condition);
	foreach($list as $key => $value) {
		$friendheadPic = qf_getheadPic($value['uid'], 'small');
		$exp = $value['exp'];
		if($exp < 1){
		$exp = 0;
		}
		$username=$value['username'];
		if(!$username){
		  $username='gohooh180';
		}
		$friend_str[] = '{"u":' . $value['uid'] . ',"un":"' . $username . '","e":' . $exp . ',"m":' . $value['money'] . ',"headpic":"' . $friendheadPic . '"}';
	}
	$friend_str = '[' . implode(',', $friend_str) . ']';

	echo $friend_str;
}
?>