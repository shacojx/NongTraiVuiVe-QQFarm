<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$touid = intval($_GET['touid']);
if($touid < 1) showmessage('Sai! Gửi một tham số bất hợp pháp！', 'house.php?ac=index', 2);
$user = query_one("select * from ".tname("app_love_user")." where uid = '{$touid}' ");
if(empty($user)) showmessage('Sai! Gửi một tham số bất hợp pháp, người bạn muốn gửi một món quà không tồn tại！', 'house.php?ac=index', 2);

realname_set($user['uid'], $user['username']);

if(isset($_POST['myFormAc']) && $_POST['myFormAc'] == 'update'){
	$param['gid'] = intval($_POST['gid']);
	$param['uid_2'] = intval($touid);
	$param['username_2'] = $user['username'];
	$param['uid'] = intval($uid);
	$param['username'] = $_SGLOBAL['supe_username'];
	$param['dateline'] = time();
	$check = query_one("select  * from ".tname("app_love_gift_kind")." where gid = '{$param['gid']}'");
	if(empty($check)) showmessage('Sai! Gửi một tham số bất hợp pháp！', 'house.php?ac=gift&touid='. $touid, 2);
	if($check['price'] > $status['money']) showmessage('Sai! Bạn có đủ vàng để trả những món quà！', 'house.php?ac=gift&touid='. $touid, 2);
	inserttable('app_love_gift', $param, false);
	query_exec("update ".tname("app_love_user")." set money = money - {$check['price']},  thick = thick + '{$check['thick']}' where uid = '{$uid}' ");
	query_exec("update ".tname("app_love_user")." set thick = thick + '{$check['thick']}' where uid = '{$param['uid_2']}' ");
	if($status['hid'] > 0) query_exec("update ".tname("app_love_history")." set thick = thick + '{$check['thick']}' where hid = '{$status['hid']}' ");

	realname_get();

	/*add news*/
	$data = array($uid, $_SN[$uid], $user['uid'], $_SN[$user['uid']], $check['msg'], $check['name'], $check['price'], $check['thick']);
	news::add($data , 3, 5);

	/*add feeds*/
	$data = array(
		'user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$_SN[$user['uid']]}</a>",
		'liangci'=>$check['msg'],
		'things'=>$check['name'],
		'money'=>$check['price'],
		'thick'=>$check['thick']
	);
	feeds::add($data, 5);

	showmessage('Xin chúc mừng! Bạn có nó được gửi ra một món quà！', 'house.php?ac=index&uid=' . $touid . '#gift_my', 2);
}


$data = get_gift();
realname_get();
include_once( template( "house/view/gift" ) );

function get_gift($order = 'gid', $type = 'asc')
{
	$gid = $price = $thick = array();
	$data = query_all("select * from ".tname("app_love_gift_kind") );
	foreach ($data as $key=>$val) {
		$gid[$key]  = $val['gid'];
		$price[$key]  = $val['price'];
		$thick[$key]  = $val['thick'];
	}
	$order_type = $type == 'desc' ? SORT_DESC : SORT_ASC;
	array_multisort($$order, $order_type, $data);
	return $data;
}
?>