<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

$op = $_GET['op'];
$ops = array('sure', 'love', 'save', 'invite');
if(empty($op) || !in_array($op, $ops)) showmessage('Sai! Yêu cầu này đã hết hạn！', 'house.php?ac=index', 2);

$js = "<script type='text/javascript'>setTimeout(function(){window.location.href='house.php?ac=index';}, 1000);</script>";

$oer = intval($_GET['uid']);
$id = intval($_GET['id']);
$hash = intval($_GET['hash']);
$fuid = $uid;

if($op == 'sure'){//请求对方租房
	if(false === ($check = check_exists($oer, $fuid, $id, $hash, $op))) showmessage('Sai! Bạn gửi một yêu cầu bất hợp pháp！', 'house.php?ac=index', 2);
	$user = get_user_status($oer);
	realname_set($user['uid'], $user['username']);
	$house = get_house($id);
	if(empty($house)) showmessage('Sai! bạn đã được bán nhà, bạn có thể đi thuê nhà khác bạn！', 'house.php?ac=house&uid=' . $oer, 5);
	if($house['status'] != 1 || $house['sent_uid'] > 0) showmessage('Xin lỗi! bạn đã thuê ra khỏi nhà, bạn có thể đi thuê nhà khác bạn！', 'house.php?ac=house&uid=' . $oer, 5);
	if(isset($_POST['myFormAc'])){
		if($status['live_id'] > 0 || $status['hid'] > 0) $data = array('status'=>404, 'message'=>'Sai! Bạn hiện đã sống ở nhà, và lần đầu tiên đến nhà để ráo nước đi ngay bây giờ！<a href="house.php?ac=index" target="_blank">Tôi đã đi kiểm tra</a>');
		else{
			if($_POST['myForm'] == 'ok'){//同意租房
				query_exec("update ".tname("app_love_user")." set live_id = '{$id}' where uid = '{$status['uid']}' ");
				$MyTime = time();
				query_exec("update ".tname("app_love_house")." set status = 4, sent_uid = '{$status['uid']}', sent_username = '{$status['username']}', sent_dateline = '{$MyTime}' where id = '{$id}' ");
				$data = array('status'=>200, 'message'=>'thành công! Bạn đã chuyển đến ngôi nhà này！' . $js);
			}else{
				$data = array('status'=>200, 'message'=>'Bạn đã bỏ qua tiền thuê bạn yêu cầu bạn' . $js);
			}
			delete_exists($oer, $fuid, $id, $hash, $op);
		}
		ajax_out(jsonencode($data));
	}
}elseif($op == 'love'){//请求对方合租
	if(false === ($check = check_exists($oer, $fuid, $id, $hash, $op))) showmessage('Sai! Bạn gửi một yêu cầu bất hợp pháp！', 'house.php?ac=index', 2);
	$user = get_user_status($oer);
	realname_set($user['uid'], $user['username']);
	if($user['live_id'] < 1) showmessage('Sai! bạn vẫn còn lang thang ra ngoài quá! Ah bạn cách chung sống？', 'house.php?ac=index&uid=' . $oer, 2);
	if($user['hid'] > 0 || $user['live_with_uid'] > 0 || $user['user_status'] > 0) showmessage('Sai! bạn đã trú với những người khác！', 'house.php?ac=index&uid=' . $oer, 2);
	$house = get_house($user['live_id']);
	if(empty($house)) showmessage('Sai! bạn của ngôi nhà không còn tồn tại, không thể chia sẻ với bạn！', 'house.php?ac=house&uid=' . $oer, 2);
	if(isset($_POST['myFormAc'])){
		if($_POST['myForm'] == 'ok'){
			if($status['live_id'] > 0 || $status['hid'] > 0) $data = array('status'=>404, 'message'=>'Sai! Bạn hiện đã sống ở nhà, và lần đầu tiên đến nhà để ráo nước đi ngay bây giờ！<a href="house.php?ac=index" target="_blank">Tôi đã đi kiểm tra</a>');
			
			/*
			if(check_user_sex($user['uid'], $_SGLOBAL['supe_uid']) === false) {
				$data = array('status'=>404, 'message'=>'<p><b>Oh xin lỗi, bạn phải cập nhật giới tình trước khi vào game！<b></p>');
				ajax_out(jsonencode($data));
			}
			*/
				
			$hid = new_love($user['uid'], $user['username']);
			query_exec("update ".tname("app_love_user")." set hid= '{$hid}', love_num = love_num + 1, user_status = 1, live_id = '{$user['live_id']}'   where uid = '{$_SGLOBAL['supe_uid']}' ");
			query_exec("update ".tname("app_love_user")." set hid= '{$hid}', love_num = love_num + 1, user_status = 1 where uid = '{$user['uid']}' ");
			
			realname_set($user['uid'], $user['username']);
			realname_get();

			/*add news*/
			$data = array($_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']], $user['uid'], $_SN[$user['uid']]);
			news::add($data , 0, 0);

			/*add feeds*/
			$data = array(
				'user_1'=>"<a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a>",
				'user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$_SN[$user['uid']]}</a>",
			);
			feeds::add($data, 0);

			$data = array(
				'user_1'=>"<a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a>",
				'user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$_SN[$user['uid']]}</a>",
			);
			feeds::add($data, 0, $user);


			$data = array('status'=>200, 'message'=>'Xin chúc mừng! Bạn và bạn đã bắt đầu cư trú' . $js);
		}else{
			$data = array('status'=>200, 'message'=>'Bạn đã bỏ qua theo yêu cầu cư trú bạn！' . $js);
		}
		delete_exists($oer, $fuid, $id, $hash, $op);
		ajax_out(jsonencode($data));
	}
}elseif($op == 'save'){
	$sid = intval($_GET['sid']);
	$hash = intval($_GET['hash']);
	$data = query_one("select  *  from ".tname("app_love_save")." where sid = '{$sid}' and hash = '{$hash}'");
	if(empty($data)) showmessage('Sai! Bạn gửi một yêu cầu bất hợp pháp！', 'house.php?ac=index', 2);
	if($data['uid'] == $status['uid']) showmessage('Sai! Ông có thể không phải ngày của riêng mình, nếu đủ phong phú, bạn có thể đá trong bạn！', 'house.php?ac=index', 2);
	if($data['status'] == 0) showmessage('Sai! bạn đã được lưu khác từ tay của quỷ dữ, và cảm ơn bạn đã quan tâm！', 'house.php?ac=index', 3);
	$m = intval($house_config['focus'] / 2);
	$user = get_user_status($data['uid']);
	if($_POST['myForm'] == 'ok'){
		if($status['money'] < $m) showmessage('Sai! Quý vị có vàng có thể không phải là "anh hùng cứu"！', 'house.php?ac=index', 3);
		query_exec("update  ".tname("app_love_user")." set money = money - {$m} where uid = '{$status['uid']}'");
		query_exec("update  ".tname("app_love_save")." set status = 0 where sid = '{$data['sid']}'");
		query_exec("update ".tname("app_love_history")." set status = 0 where hid = '{$data['hid']}' ");
		query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$user['uid']}' ");
		query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$user['live_with_uid']}' ");
		query_exec("update ".tname("app_love_house")."  set status = 1, sent_uid = 0, sent_username = 0, sent_dateline = 0 where id = '{$user['live_id']}' ");
		realname_get();
		/*add news*/
		$data = array($user['uid'], $_SN[$user['uid']], $_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']]);
		news::add($data , 1, 3);

		include_once(S_ROOT.'./source/function_cp.php');
		$note = "<font color=green>Lưu thông tin</font>：Trong trò chơi[<a href='house.php'>kỷ nguyên sống chung</a>]中 <a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a> Để tiết kiệm bàn tay của bạn từ trong ra devil";
		notification_add($user['uid'], 'love', $note);

		/*add feeds*/
		$data = array('user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$_SN[$user['uid']]}</a>",);
		feeds::add($data, 3);

		showmessage('Xin chúc mừng! "Anh hùng để cứu" thành công, hệ thống sẽ lần lượt trang web bạn！', 'house.php?ac=index&uid=' . $data['uid'], 3);
	}
}elseif($op == 'invite'){
	$s_uid = intval($_GET['uid']);
	$check = query_one("select * from ".tname("app_love_invite")." where uid = '{$s_uid}' and fuid = '{$status['uid']}' ");
	if(empty($check)) showmessage('Sai! Bạn gửi một yêu cầu bất hợp pháp！', 'house.php?ac=index', 2);
	if($check['status'] == 0) showmessage('Sai! Yêu cầu này đã hết hạn！', 'house.php?ac=index', 2);
	query_exec("update  ".tname("app_love_invite")." set status = 0 where uid = '{$s_uid}' and fuid = '{$status['uid']}'");
	query_exec("update  ".tname("app_love_user")." set money = money + 2000  where uid = '{$s_uid}' ");

	/*add news*/
	$data = array($s_uid, get_real_name($s_uid), 2000);
	news::add($data , 6, 8);

	showmessage('Chúc mừng kỷ nguyên mới của bạn chung sống！', 'house.php?ac=index', 2);
}

realname_get();
include_once( template( "house/view/receive" ) );

function check_exists($uid, $fuid, $id, $hash, $op)
{
	$temp = query_one("select * from ".tname("app_love_renting")." where uid = '{$uid}' and fuid = '{$fuid}' and id = '{$id}' and hash = '{$hash}' and op = '{$op}'");
	if(empty($temp)) return false;
	else return $temp;
}

function delete_exists($uid, $fuid, $id, $hash, $op)
{
	query_exec("delete from ".tname("app_love_renting")." where  uid = '{$uid}' and fuid = '{$fuid}' and id = '{$id}' and hash = '{$hash}' and op = '{$op}' ");
}
?>