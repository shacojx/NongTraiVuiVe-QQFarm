<?php
//Game ngôi nhà h?nh phúc ðý?c phát tri?n b?i K?t N?i tr? group
//Vui l?ng gi? b?n quy?n Vi?t hóa c?a K?t N?i tr? group
//Cám õn b?n ð? s? d?ng s?n ph?m c?a K?t N?i tr? group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$theurl = 'house.php?ac=mylives';
$page = intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

if($status['sex'] == 1){
	$field = 'uid_1';
	$field_uid = 'uid_2';
	$field_username = 'username_2';
}else{
	$field = 'uid_2';
	$field_uid = 'uid_1';
	$field_username = 'username_1';
}

$data = array();
$total = query_one("select count(*) as num from ".tname("app_love_history")." where {$field} = '{$uid}' ");
if($total['num'] > 0){
	$data = query_all("select {$field_uid} as uid, {$field_username} as username, dateline, last_time, status, thick from ".tname("app_love_history")." where {$field} = '{$uid}' order by hid desc limit {$offset}, {$limit}");
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		$data[$key]['dateline'] = date('Y-n-d H:i', $val['dateline'] + 8*3600);
		$data[$key]['last_time'] = format_hour($val['last_time']);
	}
}

$htmlpage = multi($total['num'], $limit, $page, $theurl);

realname_get();
include_once( template( "house/view/mylives" ) );
?>