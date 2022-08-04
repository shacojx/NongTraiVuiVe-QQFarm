<?php
//Friends List

//Query
$condition = ' limit 0,'.$_QSC['friendNumber'].'';
if($_QSC['friendType'] == 1) {
	$friends = qf_getFriends(0);
	$friends .= (empty($friends) ? '' : ',') . $_QFG['uid'];
	$condition = " WHERE N.uid IN({$friends}) group by N.uid " . $condition;
} else {
	$condition = " group by N.uid " . $condition;
}

$nc_cache = 'data/friend/nc_list.php';
if($_QSC['friendType'] != 2 || @filemtime($nc_cache)+21600 < $_QFG['timestamp'] || !$_POST['refresh']=='false') {
	$nc_list = $_QFG['db']->fetchAll("
		SELECT U.uid,U.username,U.regname,U.money,U.vip,U.pf,N.exp FROM app_qqfarm_user U
			 Left JOIN app_qqfarm_nc N ON N.uid=U.uid{$condition}
	");
	if($_QSC['friendType'] == 2) {
		qf_putCache('nc_list', $nc_list, '/friend/');
	}
} else {
	include($nc_cache);
}

foreach($nc_list as $key => $value) {
	$friendheadPic = qf_getheadPic($value['uid'], 'small');
	$exp = $value['exp'];
	$pf = $value['pf'];
	if($value['exp'] < 1) {
		$exp = 0;
		$pf = 0;
	}
	$username=$value['username'];
	if(!$username){
		$username=$value['regname'];
		if(!$username){
			$username='Người chơi';
		}
	}
	$vip = qf_decode($value['vip']);
	if($value['uid']!=$_QFG['uid']){
		$friend_str1[] = '{"uin":'.$value['uid'].',"groupid":0,"name":"' . $username . '","img":"","yellow":' .qf_toVipLevel($vip['exp']) . ',"online":1}';
	}
	$friend_str[] = '{"uId":' . $value['uid'] . ',"uin":' . $value['uid'] . ',"userName":"' . $username . '","headPic":"' . $friendheadPic . '","yellowlevel":' .qf_toVipLevel($vip['exp']) . ',"yellowstatus":' .(int)$vip['status']. ',"exp":' . $exp . ',"pastrueExp":' . $exp . ',"money":' . $value['money'] . ',"pf":' . $pf . '}';
}

if($_REQUEST['refresh']== 'friend'){
	$friend_str1 = '[' . implode(',', $friend_str1) . ']';
	$friend_str = '_callback({"items":'.$friend_str1.',"gpnames":[{"gpid":0,"gpname":"Bạn bè"}]});';
} else $friend_str = '[' . implode(',', $friend_str) . ']';

echo $friend_str;

?>