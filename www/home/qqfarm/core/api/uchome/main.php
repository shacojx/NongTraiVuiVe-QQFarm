<?php

# QFarm Interface For UCHome 2


defined('API_ROOT') || exit('Access denied');


///////////////////////////////常规函数映射////////////////////


//获取个人首页
function qf_getHomePage($uid = 0) {
	global $_QFG;
	$url = preg_replace('/qqfarm.*$/i', '' ,$_SERVER['PHP_SELF']);
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	return $url . "space.php?uid=" . $uid;
}

//获取个人首页
function qf_getFeedurl($uid = 0) {
	global $_QFG;
	return 'qqfarm.php';
}

//获取头像地址
function qf_getheadPic($uid = 0, $size = 'small') {
	global $_QFG, $_QSC;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	if($_QSC['avatarStatic']) {
		$uid = sprintf("%09d", $uid);
		$type = $_QSC['avatarReal'] ? '_real' : '';
		$subdir = substr($uid, 0, 3).'/'.substr($uid, 3, 2).'/'.substr($uid, 5, 2);
		$avatar = '/data/avatar/'.$subdir.'/'.substr($uid, -2).$type.'_avatar_'.$size.'.jpg';
	} else {
		$type = $_QSC['avatarReal'] ? '&type=real' : '';
		$avatar = '/avatar.php?uid='.$uid.'&size='.$size.$type;
	}
	return $_QSC['UC_API'].$avatar;
}

//获取好友列表
function qf_getFriends($uid = 0) {
	global $_QSC, $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$friends = array();
	$flist = $_QFG['db']->fetchAll("SELECT fuid FROM pap_tbpre_friend WHERE uid='{$uid}' AND status='1'");
	foreach($flist as $f) {
		$friends[] = $f['fuid'];
	}
	return implode(',', $friends);
}

//获取用户实名
function qf_getUserName($uid = 0, $update = false) {
	global $_QSC, $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	//先查询QFarm数据库
	if(!$update) {
		$member = $_QFG['db']->fetchOne("SELECT regname,username FROM app_qqfarm_user WHERE uid='$uid'");
		$uname = $member['username'] ? $member['username'] : $member['regname'];
	}
	//再查询宿主应用数据库
	if(!$uname) {
		$member = $_QFG['db']->fetchOne("SELECT username,name,namestatus FROM pap_tbpre_space where uid='$uid'");
		$uname = $member['namestatus'] && $member['name'] ? $member['name'] : $member['username'];
		//$uname || exit('非法玩家');
		$checkUid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_user where uid='$uid'");
		if($checkUid) {
			//更新用户资料
			$_QFG['db']->query("UPDATE app_qqfarm_user SET username='{$uname}',regname='{$member['username']}' where uid='$uid'");
		}
		else {
			//初始化新用户
			$_INIT = qf_getCache('_INIT');
			$_QFG['db']->query("INSERT INTO app_qqfarm_user(uid,username,regname,money,yb,pf) VALUES({$uid},'{$uname}','{$member['username']}',{$_INIT['money']},{$_INIT['yb']},0)");
		}
	}
	return addslashes($uname);
}


//宿主应用用户积分操作
function qf_userCredit($uid = 0, $credit = null) {
	global $_QSC, $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	if($credit === null) {//获取积分
		return (int)$_QFG['db']->result("SELECT {$_QSC['creditType']} FROM pap_tbpre_space where uid={$uid}");
	}
	else {//修改积分
		return $_QFG['db']->query("UPDATE pap_tbpre_space set {$_QSC['creditType']}={$_QSC['creditType']}{$credit} where uid={$uid}");
	}
}

//获取QFarm金币和元宝数量
function qf_getMoney($uid = 0) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$value = $_QFG['db']->fetchOne("select yb,money FROM app_qqfarm_user where uid='$uid'");
	return array((int)$value['money'], (int)$value['yb']);
}

///////////////////////////////系统函数映射////////////////////

//事件推送
function qf_addFeed($type) {
	global $_QFG;
	include_once('source/feed.func.php');
	$ownerId = intval($_REQUEST['ownerId']);
	list($title, $body) = qf_getFeed($type, $ownerId, '');
	//推送事件到UC
	if($title) {
		feed_add('farm', $title, null, null, null, $body);
	}
}

//检查是否登录
function qf_checkauth() {
	global $_QFG, $_QSC;
	//for uchome alone
	if($auth = $_COOKIE[$_QSC['cookiepre'].'auth']) {
		@list($password, $uid) = explode("\t", qf_authcode($auth, 'DECODE', $_QSC['UC_KEY']));
		$_QFG['uid'] = intval($uid);
		if($uid > 0) {
			if($_QFG['db']->result("SELECT password FROM pap_tbpre_session WHERE uid='$uid'") == $pwd) {
				$_QFG['uid'] = (int)$uid;
			}
		}
	}
	//for uch width pw
	if(!$_QFG['uid']) {
		include_once(PAP_ROOT . '/uc_client/client.php');
		function_exists('checkpwauto') && checkpwauto();
	}
	//check again
	if($_QFG['uid']) {
		$update = $_COOKIE['update_'.$_QFG['uid']] ? 1 : 0;
		$_QFG['uname'] = qf_getUserName($_QFG['uid'], $update);
		setcookie('update_'.$_QFG['uid'], 'true', time()+86400);
		return '';//已登陆
	}
	return '请先登录.';//未登录
}

/**
 * 字符串加密以及解密函数
 *
 * @param string $string     原文或者密文
 * @param string $operation  操作(ENCODE | DECODE), 默认为 DECODE
 * @param string $key        密钥
 * @param int $expiry        密文有效期, 加密时候有效， 单位 秒，0 为永久有效
 * @return string            处理后的 原文或者 经过 base64_encode 处理后的密文
 *
 * @example
 *
 *  $a = authcode('abc', 'ENCODE', 'key');
 *  $b = authcode($a, 'DECODE', 'key');  // $b(abc)
 *
 *  $a = authcode('abc', 'ENCODE', 'key', 3600);
 *  $b = authcode('abc', 'DECODE', 'key'); // 在一个小时内，$b(abc)，否则 $b 为空
 */
function qf_authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	global $_QSC;
	$ckey_length = 4; //随机密钥长度 取值 0-32;
	//加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
	//取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
	//当此值为 0 时，则不产生随机密钥
	$key = md5($key);
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';
	$cryptkey = $keya . md5($keya . $keyc);
	$key_length = strlen($cryptkey);
	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
	$string_length = strlen($string);
	$result = '';
	$box = range(0, 255);
	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}
	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}
	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}
	if($operation == 'DECODE') {
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		return $keyc . str_replace('=', '', base64_encode($result));
	}
}


//添加数据
function inserttable($tablename, $insertsqlarr, $returnid = 0, $replace = false, $silent = 0) {
	global $_QSC, $_QFG;
	$insertkeysql = $insertvaluesql = $comma = '';
	foreach((array)$insertsqlarr as $insert_key => $insert_value) {
		$insertkeysql .= $comma . '`' . $insert_key . '`';
		$insertvaluesql .= $comma . '\'' . $insert_value . '\'';
		$comma = ', ';
	}
	$method = $replace ? 'REPLACE' : 'INSERT';
	$_QFG['db']->query($method . ' INTO pap_tbpre_' . $tablename . ' (' . $insertkeysql . ') VALUES (' . $insertvaluesql . ')', $silent ? 'SILENT' : '');
	if($returnid && !$replace) {
		return $_QFG['db']->insert_id();
	}
}

//更新数据
function updatetable($tablename, $setsqlarr, $wheresqlarr, $silent = 0) {
	global $_QFG;
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
	$_QFG['db']->query('UPDATE pap_tbpre_' . $tablename . ' SET ' . $setsql . ' WHERE ' . $where, $silent ? 'SILENT' : '');
}

//事件发布
function feed_add($icon, $title_template = '', $title_data = array(), $body_template = '', $body_data = array(), $body_general = '', $images = array(), $image_links = array(), $target_ids = '', $friend = '', $appid = '', $returnid = 0) {
	global $_QFG, $_QSC;
	if(empty($appid)) {
		$appid = is_numeric($icon) ? 0 : $_QSC['UC_APPID'];
	}
	$feedarr = array('appid' => $appid, 'icon' => $icon, 'uid' => $_QFG['uid'], 'username' => $_QFG['uname'], 'dateline' => $_QFG['timestamp'], 'title_template' => $title_template, 'body_template' => $body_template, 'body_general' => $body_general, 'image_1' => empty($images[0]) ? '' : $images[0], 'image_1_link' => empty($image_links[0]) ? '' : $image_links[0], 'image_2' => empty($images[1]) ? '' : $images[1], 'image_2_link' => empty($image_links[1]) ? '' : $image_links[1], 'image_3' =>
		empty($images[2]) ? '' : $images[2], 'image_3_link' => empty($image_links[2]) ? '' : $image_links[2], 'image_4' => empty($images[3]) ? '' : $images[3], 'image_4_link' => empty($image_links[3]) ? '' : $image_links[3], 'target_ids' => $target_ids, 'friend' => $friend, 'id' => $id, 'idtype' => $idtype);
	$feedarr = qf_stripslashes($feedarr); //去掉转义
	$feedarr['title_data'] = serialize(qf_stripslashes($title_data)); //数组转化
	$feedarr['body_data'] = serialize(qf_stripslashes($body_data)); //数组转化
	$feedarr['hash_template'] = md5($feedarr['title_template'] . "\t" . $feedarr['body_template']); //喜好hash
	$feedarr['hash_data'] = md5($feedarr['title_template'] . "\t" . $feedarr['title_data'] . "\t" . $feedarr['body_template'] . "\t" . $feedarr['body_data']); //合并hash
	$feedarr = qf_addslashes($feedarr); //增加转义
	//去重
	$oldfeed = $_QFG['db']->fetchOne("SELECT feedid FROM pap_tbpre_feed WHERE uid='$feedarr[uid]' AND hash_data='$feedarr[hash_data]' LIMIT 0,1");
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

?>