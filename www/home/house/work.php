<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$mapping = array(
	0 => 0,
	1 => 5,
	2 => 10,
	3 => 20
);
$money = array(
	0 => 2000,
	1 => 3000,
	2 => 5000,
	3 => 8000
);
if(isset($_POST['myFormAc']) && $_POST['myFormAc'] == 'update'){
	$type = intval($_POST['type']);
	if($type < 0 || $type > 3) showmessage('Sai! Các yêu cầu được gửi bởi một bất hợp pháp！', 'house.php?ac=work', 2);
	if($status['work_status'] > -1) showmessage('Sai! Bạn đang ở nơi làm việc, và không trùng lặp công việc của Oh！', 'house.php?ac=work', 2);
	if($type > 0){
		$num = _get_work_num($uid, $type - 1);
		if($num < $mapping[$type]) showmessage('Sai! kinh nghiệm làm việc của bạn là không đủ, làm việc khác chọn！', 'house.php?ac=work', 2);
	}
	$MyTime = time();
	query_exec("insert into ".tname("app_love_work")." (uid, type, dateline) values ('{$uid}', '{$type}', '{$MyTime}')");
	query_exec("update ".tname("app_love_user")." set work_status = '{$type}' where uid = '{$uid}' ");
	showmessage('Xin chúc mừng! Bạn đã làm việc', 'house.php?ac=work', 2);
}else{
	_update_charge($uid);
	foreach($mapping as $key=>$val){
		$work_num[$key] = 0;
	}
	$data = _get_work($uid);
	foreach($data as $key=>$val){
		if($val['status'] > 0) $work_num[$val['type']]++;
		$data[$key]['tip'] = get_tip($val['dateline']);
		if($val['status']){
			$data[$key]['status'] = $val['has_pay'] ? 'Định cư ' : "<a href='house.php?ac=work&id={$val['id']}'>Giải quyết tiền lương</a>";
		}else{
			if(time() - $val['dateline'] >= 3600*24){
				_update_swork_tatus($val['id'], $val['uid']);
				$data[$key]['status'] = $val['has_pay'] ? 'Định cư ' : "<a href='house.php?ac=work&id={$val['id']}'>Giải quyết tiền lương</a>";
			}else{
				$data[$key]['status'] = 'Công việc';
			}
		}
		$data[$key]['money'] = $money[$val['type']];
		$data[$key]['work_type'] = format_work_startus($val['type']);
	}
	realname_get();
	include_once( template( "house/view/work" ) );
}

function _get_work_num($uid, $type)
{
	$data = query_one("select count(*) as num from ".tname("app_love_work")." where uid = '{$uid}' and type = '{$type}' and status = 1");
	return $data['num'];
}

function _get_work($uid)
{
	return query_all("select * from ".tname("app_love_work")." where uid = '{$uid}' order by id desc");
}

function _update_swork_tatus($id, $uid)
{
	query_exec("update ".tname("app_love_work")." set status = 1 where id = '{$id}'");
	query_exec("update ".tname("app_love_user")." set work_status = -1 where uid = '{$uid}'");
}

function _update_charge($uid)
{
	global $money, $_SN;
	$id = intval($_GET['id']);
	if($id < 1) return false;
	$data = query_one("select * from ".tname("app_love_work")." where id = '{$id}' and uid = '{$uid}' ");
	if(empty($data)) return false;
	if($data['status'] != 1) showmessage('Sai! công việc của bạn không qua, bạn muốn trả ah！', 'house.php?ac=work', 2);
	if($data['has_pay'] != 0) showmessage('Sai! tiền lương đã được trả cho quý vị！', 'house.php?ac=work', 2);
	$m = intval($money[$data['type']]);
	query_exec("update ".tname("app_love_work")." set has_pay = 1 where id = '{$id}' ");
	query_exec("update ".tname("app_love_user")." set money = money + $m  where uid = '{$uid}' ");
	realname_get();
	
	/*add news*/
	$param = array($uid, $_SN[$uid], format_work_startus($data['type']),$m);
	news::add($param , 7, 9);

	/*add feeds*/
	$param = array(
		'user'=> "<a href='house.php?ac=index&uid={$uid}'>{$_SN[$uid]}</a>",
		'work' => format_work_startus($data['type']),
		'money' =>$m
	);
	feeds::add($param, 9);

	showmessage("Xin chúc mừng! Got {$m}Một giải thưởng vàng！", 'house.php?ac=work', 2);
}
?>