<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
include_once('./common.php');
include_once(S_ROOT . '/data/house_config.php');
include_once(S_ROOT . '/house/class.news.php');
include_once(S_ROOT . '/house/function.php');
$fe = array(11,12); //管理员要屏蔽的feeds种类，编号看class.news.php
define('UC_API', true);
define('ADMIN_UID', 1);  //管理员ID
define('LICENSE', 'data/' . $house_config['license'] . '.license');
define('TIMER', 3600);
checkclose();
checklogin();
include_once(S_ROOT . '/uc_client/client.php');
//添加窗口
$uid = (int)$_SGLOBAL['supe_uid'];
getspace($uid);

$acs = array('index','house','intimate','work','buyhouse','order','news','love', 'ajax', 'help','gift', 'mylives', 'receive','admin');
foreach($acs as $v) $actives[$v] = '';
$ac = (!empty($_GET['ac']) && in_array($_GET['ac'], $acs)) ? $_GET['ac'] : 'index';
$actives[$ac] = '_over';

realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
updatetable('session', array('lastactivity' => $_SGLOBAL['timestamp']), array('uid'=>$_SGLOBAL['supe_uid']));

$time_lock = "data/house_time.lock";
!is_file($time_lock) && swritefile($time_lock, $_SERVER['REQUEST_TIME']);
$time_lock_dateline = intval(filemtime($time_lock));
if(is_file($time_lock) && $_SERVER['REQUEST_TIME'] - $time_lock_dateline >= TIMER ){
	swritefile($time_lock, $_SERVER['REQUEST_TIME']);
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('app_love_history') . " where status > 0");
	while ($value = $_SGLOBAL['db']->fetch_array($query)) {
		_delete_join($value);
	}

	if($_SERVER['REQUEST_TIME'] - $time_lock_dateline >= TIMER*24) {
		$query = $_SGLOBAL['db']->query("SELECT id, cid, uid FROM ".tname('app_love_house'));
		while ($value = $_SGLOBAL['db']->fetch_array($query)) {
			_update_join($value);
		}
	}
}
$status = get_user_status($uid);
//处理
include_once(S_ROOT."./house/{$ac}.php");
?>