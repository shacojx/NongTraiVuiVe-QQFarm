<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# 事件推送


//添加数据
function inserttable($tablename, $insertsqlarr, $returnid = 0, $replace = false, $silent = 0) {
	global $_HSC, $_HFG;
	$insertkeysql = $insertvaluesql = $comma = '';
	foreach((array)$insertsqlarr as $insert_key => $insert_value) {
		$insertkeysql .= $comma . '`' . $insert_key . '`';
		$insertvaluesql .= $comma . '\'' . $insert_value . '\'';
		$comma = ', ';
	}
	$method = $replace ? 'REPLACE' : 'INSERT';
	$_HFG['db']->query($method . ' INTO pap_tbpre_' . $tablename . ' (' . $insertkeysql . ') VALUES (' . $insertvaluesql . ')', $silent ? 'SILENT' : '');
	if($returnid && !$replace) {
		return $_HFG['db']->insert_id();
	}
}

//更新数据
function updatetable($tablename, $setsqlarr, $wheresqlarr, $silent = 0) {
	global $_HFG;
	$setsql = $comma = '';
	foreach((array)$setsqlarr as $set_key => $set_value) {
		$setsql .= $comma . '`' . $set_key . '`' . '=\'' . $set_value . '\'';
		$comma = ', ';
	}
	$where = $comma = '';
	if(empty($wheresqlarr)) {
		$where = '1';
	} elseif(is_array($wheresqlarr)) {
		foreach($wheresqlarr as $key => $value) {
			$where .= $comma . '`' . $key . '`' . '=\'' . $value . '\'';
			$comma = ' AND ';
		}
	} else {
		$where = $wheresqlarr;
	}
	$_HFG['db']->query('UPDATE pap_tbpre_' . $tablename . ' SET ' . $setsql . ' WHERE ' . $where, $silent ? 'SILENT' : '');
}

//事件发布
function feed_add($icon, $title_template = '', $title_data = array(), $body_template = '', $body_data = array(), $body_general = '', $images = array(), $image_links = array(), $target_ids = '', $friend = '', $appid = '', $returnid = 0) {
	global $_HFG, $_HSC;
	if(empty($appid)) {
		$appid = is_numeric($icon) ? 0 : $_HSC['UC_APPID'];
	}
	$feedarr = array('appid' => $appid, 'icon' => $icon, 'uid' => $_HFG['uid'], 'username' => $_HFG['uname'], 'dateline' => $_HFG['timestamp'], 'title_template' => $title_template, 'body_template' => $body_template, 'body_general' => $body_general, 'image_1' => empty($images[0]) ? '' : $images[0], 'image_1_link' => empty($image_links[0]) ? '' : $image_links[0], 'image_2' => empty($images[1]) ? '' : $images[1], 'image_2_link' => empty($image_links[1]) ? '' : $image_links[1], 'image_3' =>
		empty($images[2]) ? '' : $images[2], 'image_3_link' => empty($image_links[2]) ? '' : $image_links[2], 'image_4' => empty($images[3]) ? '' : $images[3], 'image_4_link' => empty($image_links[3]) ? '' : $image_links[3], 'target_ids' => $target_ids, 'friend' => $friend, 'id' => $id, 'idtype' => $idtype);
	$feedarr = qf_stripslashes($feedarr); //去掉转义
	$feedarr['title_data'] = serialize(qf_stripslashes($title_data)); //数组转化
	$feedarr['body_data'] = serialize(qf_stripslashes($body_data)); //数组转化
	$feedarr['hash_template'] = md5($feedarr['title_template'] . "\t" . $feedarr['body_template']); //喜好hash
	$feedarr['hash_data'] = md5($feedarr['title_template'] . "\t" . $feedarr['title_data'] . "\t" . $feedarr['body_template'] . "\t" . $feedarr['body_data']); //合并hash
	$feedarr = qf_addslashes($feedarr); //增加转义
	//去重
	$oldfeed = $_HFG['db']->fetchOne("SELECT feedid FROM pap_tbpre_feed WHERE uid='$feedarr[uid]' AND hash_data='$feedarr[hash_data]' LIMIT 0,1");
	if($oldfeed) {
		updatetable('feed', $feedarr, array('feedid' => $oldfeed['feedid']));
		return 0;
	}
	//插入
	if($returnid) {
		return inserttable('feed', $feedarr, $returnid);
	} else {
		inserttable('feed', $feedarr);
		return 1;
	}
}

//推送接口
function qf_addFeed2($type) {
	global $_HFG;
	$icon = "fish";
	$title_template = $body_general = '';
	$actor = "<a href='space.php?uid={$_HFG['uid']}'>" . $_HFG['uname'] . "</a>";
	if(($toUid = intval($_REQUEST['ownerId'])) > 0) {
		$touser = "<a href='space.php?uid={$toUid}'>" . qf_getUserName($toUid) . "</a>";
	}
	switch($type) {
		case 'user_init':
			$title_template = "{$actor} tham gia <a href='fish.php'>ao cá vui vẻ</a>.";
			$body_general = "Ao cá vui vẻ cực kỳ thú vị!";
			break;
		case 'landstaus_clearweed1':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstaus_clearweed2':
			$title_template = "{$actor} ghé thăm <a href='fish.php'>ao cá</a> của {$touser}";
			$body_general = "Thêm bạn thêm vui!";
			break;
		case 'fishlandstatus_fertilize':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_harvest':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_planting':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_scarify':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_spraying1':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a>";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_spraying2':
			$title_template = "{$actor} ghé thăm {$touser} 的 <a href='fish.php'>ao cá vui vẻ</a> 帮忙。";
			$body_general = "Thêm bạn thêm vui!";
			break;
		case 'fishlandstatus_water1':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a> ";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_water2':
			$title_template = "{$actor} ghé thăm <a href='fish.php'>ao cá</a> của {$touser}";
			$body_general = "Thêm bạn thêm vui!";
			break;
		case 'fishlandstatus_sale':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a> ";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
		case 'fishlandstatus_saleall':
			$title_template = "{$actor} chăm sóc <a href='fish.php'>ao cá vui vẻ</a> ";
			$body_general = "Hãy trở thành 1 ngư dân thực thụ!";
			break;
	}
	feed_add($icon, $title_template, null, null, null, $body_general);
}

?>