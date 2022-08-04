<?php
//Friends List


//Query
$condition = ' limit 0,'.$_QSC['friendNumber'].'';
if($_QSC['friendType'] == 1) {
	$friends = qf_getFriends(0);
	$friends .= (empty($friends) ? '' : ',') . $_QFG['uid'];
	$condition = " WHERE N.uid IN({$friends}) group by N.uid " . $condition;
} else {
	$condition = " group by N.uid ".$condition;
}

$mc_cache = 'data/friend/mc_list.php';
if($_QSC['friendType'] != 2 || @filemtime($mc_cache)+21600 < $_QFG['timestamp'] || $_POST['user'] == 'true') {
	$mc_list = $_QFG['db']->fetchAll("
		SELECT U.uid,U.username,U.regname,U.money,U.vip,U.pf,N.exp FROM app_qqfarm_user U
			 Left JOIN app_qqfarm_mc N ON N.uid=U.uid{$condition}
	");
	if($_QSC['friendType'] == 2) {
		qf_putCache('mc_list', $mc_list, '/friend/');
	}
} else {
	include($mc_cache);
}

foreach($mc_list as $key => $value) {
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
	$friend_str[] = '{"uId":' . $value['uid'] . ',"uin":'.$value['uid'].',"userName":"' . $username . '","headPic":"' . $friendheadPic . '","yellowlevel":' . qf_toVipLevel($vip['exp']) . ',"yellowstatus":' .(int)$vip['status']. ',"exp":' . $exp . ',"money":' . $value['money'] . ',"pf":' . $pf . '}';
}
$friend_str = '[' . implode(',', $friend_str) . ']';

echo $friend_str;

?>