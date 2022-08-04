<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$u = intval($_GET['uid']) > 0 ? $_GET['uid'] : $uid;
if(($user = get_user_status($u, true)) === false) showmessage('Sai! Bạn đã gửi một tham số bất hợp pháp！', 'house.php?ac=index', 2);
realname_set($user['uid'], $user['username']);
$data = get_my_house($u);
realname_get();
include_once( template( "house/view/house" ) );

function get_my_house($uid)
{
	global $house_kind, $user;
	$data = query_all("select * from ".tname("app_love_house")."  where uid = '{$uid}'");
	foreach($data as $val){
		if(!$val['name']) $val['name'] = $house_kind[$val['cid']];
		realname_set($val['uid'], $val['username']);
		if($val['sent_uid'] > 0) realname_set($val['sent_uid'], $val['sent_username']);
		if($val['status']  == 2 && ($user['live_id'] < 0 || $user['live_id'] != $val['id'])){
			query_exec("update ".tname("app_love_house")."  set status = 1 where id = '{$val['id']}' ");
			$val['status'] = 1;
		}
	}
	return empty($data) ? false : $data;
}
?>