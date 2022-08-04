<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
if(ADMIN_UID != $_SGLOBAL['supe_uid']) showmessage('nơi này không phải là bạn nên đến', 'house.php?ac=index', 2);
$acs = array('index','gift','house','action','love'); 
$op = $_GET['op'] ? $_GET['op'] : 'index';
if(!in_array($op, $acs))  showmessage('yêu cầu gửi dữ liệu bất hợp pháp', 'house.php?ac=admin', 2);
foreach($acs as $val) $ops[$val] = '';
$ops[$op] = ' class="active"';

switch($op)
{
	case 'index':
		if($_POST['myFormAc']){
			$house_config = array();
			$house_config = $_POST['house_config'];
			_update_config_cache($house_config);
			_location_to();
		}
	break;

	case 'gift':
		$data = query_all("select * from ".tname("app_love_gift_kind")." order by gid asc");
	break;

	case 'house':
		$data = _get_house();
	break;

	case 'action':
		$data = query_all("select * from ".tname("app_love_action")." order by leval asc, id asc");
	break;

	case 'love':
		if($_POST['myFormAc'] == 'update' && $_GET['id'] > 0){
			$id = intval($_GET['id']);
			query_exec("delete from ".tname("app_love_wall")." where id = '{$id}' ");
			exit();
		}else{
			$page = intval($_GET['page']);
			if($page < 1) $page = 1;
			$limit = 20;
			$offset = ($page - 1) * $limit;
			$total = query_one("select count(*) as num from ".tname("app_love_wall"));
			$data = query_all("select * from ".tname("app_love_wall")." order by id desc limit {$offset}, {$limit}");
			foreach($data as $key=>$val){
				$data[$key]['dateline'] = sgmdate('Y-n-d H:i', $val['dateline']);
			}
			$pagehtml = multi($total['num'], $limit, $page, "house.php?ac=admin&op=love");
		}
	break;
}


realname_get();
include_once( template("house/view/admin"));



function _location_to()
{
	global $op;
	showmessage('Xin chúc mừng, sự thành công yêu cầu' , 'house.php?ac=admin&op=' . $op, 2);
}
?>