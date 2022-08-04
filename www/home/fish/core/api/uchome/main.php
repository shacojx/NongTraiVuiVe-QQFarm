<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# HFish Interface For UCHome 2.0


defined('API_ROOT') || exit('Access denied');


///////////////////////////////常规函数映射////////////////////

/**
 * 获取数据表名(不推荐)
 */
function qf_getTName($name, $tbpre = '') {
	return $GLOBALS['_HSC']['db']['tbprefix'] . $name;
}

//获取个人首页
function qf_getHomePage($uid = 0) {
	global $_HFG;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	return "../../space.php?uid=" . $uid;
}

//获取头像地址
function qf_getheadPic($uid = 0, $size = 'small') {
	global $_HFG, $_HSC;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	if($_HSC['avatarStatic']) {
		$uid = sprintf("%09d", $uid);
		$type = $_HSC['avatarReal'] ? '_real' : '';
		$subdir = substr($uid, 0, 3).'/'.substr($uid, 3, 2).'/'.substr($uid, 5, 2);
		$avatar = '/data/avatar/'.$subdir.'/'.substr($uid, -2).$type.'_avatar_'.$size.'.jpg';
	} else {
		$type = $_HSC['avatarReal'] ? '&type=real' : '';
		$avatar = '/avatar.php?uid='.$uid.'&size='.$size.$type;
	}
	return $_HSC['UC_API'].$avatar;
}

//获取好友列表
function qf_getFriends($uid = 0) {
	global $_HSC, $_HFG;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	$friends = array();
	$flist = $_HFG['db']->fetchAll("SELECT fuid FROM pap_tbpre_friend WHERE uid='{$uid}' AND status='1'");
	foreach($flist as $f) {
		$friends[] = $f['fuid'];
	}
	return implode(',', $friends);
}

//获取用户实名
function qf_getUserName($uid = 0, $update = false) {
	global $_HSC, $_HFG;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	//先查询HFish数据库
	if(!$update) {
		$member = $_HFG['db']->fetchOne("SELECT username FROM app_fish_ui WHERE uid='$uid'");
		$uname =  $member['username'];
	}
	//再查询宿主应用数据库
	if(!$uname) {
		$member = $_HFG['db']->fetchOne("SELECT username,name,namestatus FROM pap_tbpre_space where uid='$uid'");
		$uname = $member['namestatus'] && $member['name'] ? $member['name'] : $member['username'];
		//$uname || exit('非法玩家');
		$checkUid = $_HFG['db']->result("SELECT uid FROM app_fish_ui where uid='$uid'");
		if($checkUid) {
			//更新用户资料
			$_HFG['db']->query("UPDATE app_fish_ui SET username='{$uname}',regname='{$member['username']}' where uid='$uid'");
		}
		else {
			//初始化新用户
			//$_INIT = qf_getCache('_INIT');
			//$_HFG['db']->query("INSERT INTO app_fish_ui(uid,username,regname,money,yb) VALUES({$uid},'{$uname}','{$member['username']}',0,0)");
		}
	}
	return $uname;
}


//宿主应用用户积分操作
function qf_userCredit($uid = 0, $credit = null) {
	global $_HSC, $_HFG;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	//修改积分
	if($uid > 0 && $credit) {
		return $_HFG['db']->query("UPDATE pap_tbpre_space set credit=credit" . $credit . " where uid='$uid'");
	}
	//获取积分
	else {
		$uid = $uid > 0 ? $uid : $_HFG['uid'];
		return (int)$_HFG['db']->result("SELECT credit FROM pap_tbpre_space where uid='$uid'");
	}
}

//获取HFish金币和元宝数量
function qf_getMoney($uid = 0) {
	global $_HFG;
	$uid = $uid > 0 ? $uid : $_HFG['uid'];
	$value = $_HFG['db']->fetchOne("select yb,money FROM app_fish_ui where uid='$uid'");
	return array((int)$value['money'], (int)$value['yb']);
}

///////////////////////////////系统函数映射////////////////////

//事件推送
function qf_addFeed($type) {
	include_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'feed.php');
	qf_addFeed2($type);
}

//检查是否登录
function qf_checkauth() {
	global $_HFG, $_HSC;
	//for uchome alone
	if($auth = $_COOKIE[$_HSC['cookiepre'].'auth']) {
		@list($password, $uid) = explode("\t", qf_authcode($auth, 'DECODE', $_HSC['UC_KEY']));
		$_HFG['uid'] = intval($uid);
		if($uid > 0) {
			if($_HFG['db']->result("SELECT password FROM pap_tbpre_session WHERE uid='$uid'") == $pwd) {
				$_HFG['uid'] = (int)$uid;
			}
		}
	}
	//for uch width pw
	if(!$_HFG['uid']) {
		include_once(MAIN_ROOT.'/uc_client/client.php');
		function_exists('checkpwauto') && checkpwauto();
	}
	//check again
	if($_HFG['uid']) {
		$update = $_COOKIE['update_'.$_HFG['uid']] ? 1 : 0;
		$_HFG['uname'] = qf_getUserName($_HFG['uid'], $update);
		setcookie('update_'.$_HFG['uid'], 'true', time()+86400);
		return '';//已登陆
	}
	return 'Vui lòng đăng nhập để chơi Ao cá vui vẻ trên <a href="http://www.gohooh.com/nhatui" target="blank">Nhà Tui</a>';//未登录
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
	global $_HSC;
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

?>