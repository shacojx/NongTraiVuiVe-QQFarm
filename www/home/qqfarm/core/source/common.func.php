<?php

# 公共函数库
# create by seaif@zealv.com

/**
 * 返回字符串的unicode编码
 */
function qf_unicode($input) {
	global $_QSC;
	$charset = $_QSC['charset'] ? $_QSC['charset'] : 'GBK';
	$input = iconv(strtoupper($charset), 'UCS-2BE', $input);
	$len = strlen($input);
	$output = '';
	for($i = 0; $i < $len-1; $i = $i+2) {
		$c1 = $input[$i];
		$c2 = $input[$i+1];
		if(ord($c1) > 0) {
			$s1 = base_convert(ord($c1), 10, 16);
			$output .= '\\u'.(hexdec($s1) > 0xF ? '' : '0').$s1;
			$s2 = base_convert(ord($c2), 10, 16);
			$output .=(hexdec($s2) > 0xF ? '' : '0').$s2;
		}
		elseif(ord($c2) < 127) {
			$output .= $c2;
		}
	}
	return $output;
}

/**
 * 模板调用
 */
function qf_getView($name) {
	global $_QFG, $_QSC;
	if(!$_QFG['TPL']) {
		include_once('source/template.class.php');
		$_QFG['TPL'] = STemplate::getInstance($_QSC['view']);
	}
	$tplId = $_QSC['view']['tplId'];
	if(strpos($name, ':') > 0) {
		list($tplId ,$name) = explode(':', $name);
	}
	$_QFG['TPL']->tplId = $tplId;
	$_QFG['TPL']->show($name);
}
/**
 * XML调用
 */
 function qf_getXML($key,$value,$dir = '/') {
	$dir = 'data'.$dir;
	is_dir($dir) || mkdir($dir, 0777, true);
	$dom = new domDocument;
	// we want a nice output
	//$dom->load($value);
	//$dom->formatOutput = true;
	$dom -> loadXML($value);
	$dom->save($dir.$key.'.xml');
 }

/** 
 * Cookie操作
 */
function qf_setcookie($var, $value = '', $life = 0, $prefix = 1, $httponly = false) {
	global $_QSC, $_QFG;
	$coo = $_QSC['cookie'];
	$var = $prefix ? $coo['prefix'].$var : $var;
	unset($_COOKIE[$var]);
	if($value == '' || $life < 0) {
		$value = '';
		$life = -1;
	}
	$life = $life > 0 ? $_QFG['timestamp']+$life : ($life < 0 ? $_QFG['timestamp']-31536000 : 0);
	$secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
	if(PHP_VERSION < '5.2.0') {
		$coo['path'] .= $httponly ? '; HttpOnly' : '';
		setcookie($var, $value, $life, $coo['path'], $coo['domain'], $secure);
	} else {
		setcookie($var, $value, $life, $coo['path'], $coo['domain'], $secure, $httponly);
	}
}

/**
 * 错误捕获
 */
function qf_error_handler($errno, $errstr, $errfile, $errline) {
	if(in_array($errno, array(8, 1024, 8192))) return;//忽略一些错误
	$time = date("Y/m/d h:i:s");
	$errdata =
		"Message: [{$time}] {$_SERVER['REQUEST_URI']} \r\n" .
		"  Error: {$errstr} \r\n" .
		"         on line $errline in $errfile \r\n" .
		"  Errno: {$errno} \r\n \r\n";
	error_log($errdata, 3, "data/logs/#php_error.log");
}

/**
 * 将级别转换成经验
 */
function qf_toExp($lv) {
	return intval(pow(($lv + 0.5), 2) * 100 - 25);
}

/**
 * 将经验转换成级别
 */
function qf_toLevel($exp) {
	return floor(sqrt(($exp + 25) / 100) - 0.5);
}

/**
 * 将VIP经验转换成级别
 */
function qf_toVipLevel($exp, $status = 1) {
	global $_VIP;
	$vipExps = (array)$_VIP['exps'];//等级经验表
	if($exp >= end($vipExps)) {
		$lv = count($vipExps);
	} elseif($exp >= reset($vipExps)) {
		foreach($vipExps as $key => $value) {
			if($exp < $value) {
				$lv = $key - 1;
				break;
			}
		}
	}
	$lv = ($status > 0 && $lv > 0) ? (int)$lv : 0;
	return $lv;
}

/**
 * 说明: JSON串行化
 *   向客户端输出数据时使用
 */
function qf_jsonCode($data) {
	$data = json_encode($data);
	$data = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $data);
	return $data;
}

/**
 * 说明: QF自编码,默认JSON,可选用serialize
 *   把要存入数据库的PHP数据结构串行化
 */
function qf_encode($data) {
	$data = json_encode($data);
	$data = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $data);
	return $data;
}

/**
 * 说明: QF自解码,默认JSON,可选用unserialize
 *   从数据库取出数据时还原PHP数据结构
 */
function qf_decode($data) {
	return (array)json_decode($data, true);
}

/**
 * 基础函数: addslashes()
 * 功能描述: 添加字符串或数组转义
 */
function qf_addslashes($value) {
	if(is_array($value)) {
		foreach($value as $k => $v) {
			$value[$k] = qf_addslashes($v);
		}
		return $value;
	}
	return addslashes($value);
}

/**
 * 基础函数: stripslashes()
 * 功能描述: 取消字符串或数组转义
 */
function qf_stripslashes($value) {
	if(is_array($value)) {
		foreach($value as $k => $v) {
			$value[$k] = qf_stripslashes($v);
		}
		return $value;
	}
	return stripslashes($value);
}

?>