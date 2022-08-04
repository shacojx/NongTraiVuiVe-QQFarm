<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$order = array(
'1','2','3','4','5','6','7','8','9','10'
);

$data = array();
$data[0] = order_thick();
$data[1] = order_house();
$data[2] = order_love();
$data[3] = order_money();

realname_get();
include_once( template( "house/view/order" ) );


//亲密达人，按照在一次同居过程中，发生的亲密关系排序
function order_thick()
{
	global $order;
	$data = query_all("select uid_1, username_1, uid_2, username_2, thick, last_time, status from ".tname("app_love_history")." order  by thick desc limit 10");
	foreach($data as $key=>$val){
		realname_set($val['uid_1'], $val['username_1']);
		realname_set($val['uid_2'], $val['username_2']);
		$data[$key]['order'] = $order[$key];
	}
	return $data;
}

//房产大亨
function order_house()
{
	global $order;
	$data = query_all("select uid, username, house_num from ".tname("app_love_user")." order by house_num desc limit 10");
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		$data[$key]['order'] = $order[$key];
	}
	return $data;
}

//魅力达人，按照同居次数
function order_love()
{
	global $order;
	$data = query_all("select uid, username, love_num from ".tname("app_love_user")." order by love_num desc limit 10");
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		$data[$key]['order'] = $order[$key];
	}
	return $data;
}

//白领先锋
function order_money()
{
	global $order;
	$data = query_all("select uid, username, money from ".tname("app_love_user")." order by money desc limit 10");
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		$data[$key]['order'] = $order[$key];
	}
	return $data;
}
?>