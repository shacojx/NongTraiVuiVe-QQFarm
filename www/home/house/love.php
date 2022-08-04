<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$op = ($_GET['op'] && in_array($_GET['op'], array('index','send','my'))) ? $_GET['op'] : 'index';
$limit = 100;
$page = intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
$theurl = 'house.php?ac=love';

if($op == 'send' && $_POST['myFormAc'] == 'update'){
	$param['title'] = htmlspecialchars(trim($_POST['title']));
	$param['message'] = htmlspecialchars(trim($_POST['message']));
	$param['color'] = intval($_POST['color']);
	$param['icon'] = intval($_POST['icon']);
	$param['uid'] = $uid;
	$param['dateline'] = time();
	$param['name'] = $_SGLOBAL['member']['name'] ? $_SGLOBAL['member']['name'] : $_SGLOBAL['member']['username'];
	if($status['money'] < 100) showmessage('Sai! Bạn có đủ tiền mặt để trả 100 đồng tiền vàng！', 'house.php?ac=love&op=index', 2);
	if(!$param['title'] || !$param['message']) showmessage('Sai! Xin vui lòng điền vào bản Tuyên ngôn của tiêu đề và thông tin khai hoàn chỉnh！', 'house.php?ac=love&op=send', 2);
	$id= inserttable('app_love_wall', $param, true);
	query_exec("update ".tname("app_love_user")." set money = money - 100 where uid = '{$status['uid']}'");
	/*add news*/
	$data = array($_SGLOBAL['supe_uid'], get_real_name($_SGLOBAL['supe_uid']), $id, $param['title']);
	news::add($data , 4, 6);

	/*add feeds*/
	$data = array(
		'id'=>$id,
		'title'=>$param['title']
	);
	feeds::add($data, 6);

	showmessage('Xin chúc mừng! Kê khai nộp cho sự thành công của tình yêu của bạn！', 'house.php?ac=love', 2);
}

if($op == 'my'){
	$suid = intval($_GET['uid']) > 0 ? intval($_GET['uid']) : $uid;
	$data = _get_love($suid, 0, $page);
	$theurl = 'house.php?ac=love&op=my&uid=' . $suid;
}elseif($op == 'index'){
	$id = intval($_GET['id']);
	$data = _get_love(0, $id, $page);
}

$htmlpage = multi($data['total'], $limit, $page, $theurl);

realname_get();
include_once( template( "house/view/love" ) );

function _get_love($uid = 0, $id =0, $page)
{
	global $limit;
	$offset = ($page - 1) * $limit;
	$extend = $uid ? " where uid = '{$uid}' " : '';
	if($id > 0) $extend = " where id = '{$id}' ";

	$total = query_one("select count(*) as num from ".tname("app_love_wall")." {$extend} ");
	if($total['num'] > 0){
		$sql = "select * from ".tname("app_love_wall")." {$extend} order by id desc limit {$offset}, {$limit}";
		$data = query_all($sql);
	}else{
		$data = array();
	}
	$num = count($data) - 1;
	foreach($data as $key=>$val){
		$data[$key]['index'] = $num - $key ;
	}
	return array('total'=>$total['num'], 'data'=>$data, 'index'=>$num);
}
?>