<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$me = 0;
$now_uid = intval($_GET['uid']);
if($now_uid < 1 || $uid == $now_uid){
	$me = 1;
	$now_uid = $uid;
	if($status['live_id'] > 0){
		$my_house = get_house($status['live_id']);
		realname_set($my_house['uid'], $my_house['username']);
	}
}else{
	$user = get_user_status($now_uid, true);
	if($user === false) showmessage('Sai! Bạn đã gửi một tham số bất hợp pháp！', 'house.php?ac=index', 2);
	if($user['live_id'] > 0){
		$my_house = get_house($user['live_id']);
		realname_set($my_house['uid'], $my_house['username']);
	}
}

if(!empty($my_house)){
	$action = get_house_action($my_house['cid']);
	$select_action = '<select style="margin-right: 10px;" id="love_action" name="love_action"><option value=0>Gửi hành động chung sống</option>';
	foreach($action as $val){
		$select_action .= "<option value='{$val['id']}'>{$val['name']}</option>";
	}
	$select_action .= "</select>";
}

realname_get();
$me ? include_once( template( "house/view/index" ) ) : include_once( template( "house/view/index_ta" ) );
?>