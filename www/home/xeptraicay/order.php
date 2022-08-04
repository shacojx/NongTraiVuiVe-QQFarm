<?php 
//Develop by T48


if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$page = (isset($_GET['page']) && intval($_GET['page']) > 0 ) ? intval($_GET['page']) : 1;
$perpage = 8;
$start = ($page - 1 ) * $perpage;
$theurl = "xeptraicay.php?ac={$ac}";

$arktopArr = array();
$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_xeptraicay')." as w,".tname('space')." as u WHERE u.uid=w.uid ORDER BY score DESC,gtime ASC LIMIT $start , $perpage");

$i=$start+1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$arktopArr[$i] = $value;
	$i++;
}
$query = $_SGLOBAL['db']->query("SELECT count(*) as num FROM ".tname('app_xeptraicay')." as w,".tname('space')." as u WHERE u.uid=w.uid");
$query = $_SGLOBAL['db']->fetch_array($query);
$page = multi($query['num'], $perpage, $page, $theurl);

include_once( template( "xeptraicay/view/order" ) );


?>