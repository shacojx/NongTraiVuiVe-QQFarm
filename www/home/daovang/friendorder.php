<?php 

// Việt hóa bởi T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$page = (isset($_GET['page']) && intval($_GET['page']) > 0 ) ? intval($_GET['page']) : 1;
$perpage = 8;
$start = ($page - 1 ) * $perpage;
$theurl = "daovang.php?ac={$ac}";
getspace($uid);
$_SGLOBAL['member']['friend'] = empty($_SGLOBAL['member']['friend'])?$uid:$_SGLOBAL['member']['friend'].",$uid";
$arktopArr = array();
$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_daovang')." as w,".tname('space')." as u WHERE u.uid in(".$_SGLOBAL['member']['friend'].") AND u.uid=w.uid ORDER BY score DESC,gtime ASC LIMIT $start , $perpage");

$i=$start+1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$arktopArr[$i] = $value;
	$i++;
}
$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_daovang')." as w,".tname('space')." as u WHERE u.uid in(".$_SGLOBAL['member']['friend'].") AND u.uid=w.uid");
$query = $_SGLOBAL['db']->fetch_array($query);
$page = multi($query['num'], $perpage, $page, $theurl);

include_once( template( "daovang/view/order" ) );



?>