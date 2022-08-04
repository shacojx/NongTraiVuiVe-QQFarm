<?php 
//WWW.GoHooH.CoM

include_once('./common.php');
require_once './source/function_common.php';
include_once(S_ROOT.'./source/function_cp.php');
if(function_exists('xcache_set')){
	include_once(S_ROOT . '/source/class.cache_xcache.php');
}else{
	include_once(S_ROOT . '/source/class_cache.php');
}

//获取当前用户的空间信息
$space = getspace($_SGLOBAL['supe_uid']);


//加载游戏
//include_once(S_ROOT . '/data/bangau_config.php');
//是否关闭站点
checkclose();
//允许的方法
$acs = array('index','discuss','share','help','order','save','friendorder');
$ac = (!empty($_GET['ac']) && in_array($_GET['ac'], $acs)) ? $_GET['ac'] : 'index';
foreach($acs as $v){
	$actives[$v] = '';
}

$actives[$ac] = ' class=active';
//添加窗口

$ac = (!empty($_GET['ac']) && in_array($_GET['ac'], $acs)) ? $_GET['ac'] : 'index';

//更新活动session
if($_SGLOBAL['supe_uid']) {
        getmember(); //获取当前用户信息
		realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
        updatetable('session', array('lastactivity' => $_SGLOBAL['timestamp']), array('uid'=>$_SGLOBAL['supe_uid']));
}

$uid = $_SGLOBAL['member']['uid'];
//获取排行和最高分

$query = $_SGLOBAL['db']->query("SELECT uid,score FROM ".tname('app_bangau')." ORDER BY score DESC,gtime ASC");//显示最新动态
$allrk = 0;$myrk = 0;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	$allrk++;
	realname_set($value['uid'], $value['username']);
	if($myrk == 0) $myrk = ($uid==$value['uid'])?$allrk:0;
	if($uid==$value['uid']) $score = $value['score'];
	
}



//---begin by baby5656.com 2008-12-4
//获取24小时排行TOP10
$dayrktopArr = array();
$tmptime = $_SGLOBAL['timestamp']-(86400*1);

$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_bangau')." as w,".tname('space')." as u WHERE u.uid=w.uid and gtime>".$tmptime." ORDER BY score DESC,gtime ASC LIMIT 0 , 10");
$i=1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$dayrktopArr[$i] = $value;
	$i++;
}

//获取本周排行TOP10
$weekrktopArr = array();
$tmptime = $_SGLOBAL['timestamp']-(86400*7);

$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_bangau')." as w,".tname('space')." as u WHERE u.uid=w.uid and gtime>".$tmptime." ORDER BY score DESC,gtime ASC LIMIT 0 , 10");
$i=1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$weekrktopArr[$i] = $value;
	$i++;
}
//---end  


//获取本月排行TOP10
$mrktopArr = array();
$tmptime = $_SGLOBAL['timestamp']-(86400*30);

$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_bangau')." as w,".tname('space')." as u WHERE u.uid=w.uid and gtime>".$tmptime." ORDER BY score DESC,gtime ASC LIMIT 0 , 10");
$i=1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$mrktopArr[$i] = $value;
	$i++;
}
//全部排行TOP10
$aarktopArr = array();
$query = $_SGLOBAL['db']->query("SELECT w.uid,w.score,u.username FROM ".tname('app_bangau')." as w,".tname('space')." as u WHERE u.uid=w.uid ORDER BY score DESC,gtime ASC LIMIT 0 , 3");
$i=1;
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'], $value['username']);
	$aarktopArr[$i] = $value;
	$i++;
}

//最近玩过的玩家
$reArr = array();
//echo "SELECT w.uid,u.username FROM ".tname('app_bangau')." as w,".tname('feed')." as u WHERE u.uid=w.uid ORDER BY gtime ASC LIMIT 0 , 21";
$query = $_SGLOBAL['db']->query("SELECT w.uid,u.username FROM ".tname('app_bangau')." as w,".tname('space')." as u WHERE u.uid=w.uid ORDER BY gtime DESC LIMIT 0 , 21");
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	realname_set($value['uid'],$value['nsername']);
	$value['avatar'] = avatar($value['uid'], $size='small');
	$reArr[] = $value;
}

realname_get();
checklogin();
include_once(S_ROOT."./bangau/{$ac}.php");


?>