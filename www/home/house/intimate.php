<?php
//Game ngôi nhà h?nh phúc ðý?c phát tri?n b?i K?t N?i tr? group
//Vui l?ng gi? b?n quy?n Vi?t hóa c?a K?t N?i tr? group
//Cám õn b?n ð? s? d?ng s?n ph?m c?a K?t N?i tr? group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$field = $status['sex'] == 1 ? 'uid_1' : 'uid_2';
$group = $status['sex'] == 1 ? 'uid_2' : 'uid_1';
$uid_field = $status['sex'] == 1 ? 'uid_2' : 'uid_1';
$username_field = $status['sex'] == 1 ? 'username_2' : 'username_1';
$data = query_all("select {$uid_field} as uid, {$username_field} as username, sum(thick) as thick, count({$uid_field}) as num  from ".tname("app_love_history")." where $field = '{$status['uid']}' group by {$group}");
foreach($data as $key=>$val){
	realname_set($val['uid'], $val['username']);
}

realname_get();
include_once( template( "house/view/intimate" ) );
?>