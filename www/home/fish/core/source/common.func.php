<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/


/**
 * 模板调用
 */
function qf_getView($name) {
	global $_HFG, $_HSC;
	if(!$_HFG['TPL']) {
		include_once('source/template.class.php');
		$_HFG['TPL'] = STemplate::getInstance($_HSC['view']);
	}
	$_HFG['TPL']->show($name);
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
 * 说明: JSON串行化
 *   向客户端输出数据时使用
 */
function qf_jsonCode($data) {
	$data = json_encode($data);
	$data = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $data);
	return $data;
}

//xieph	鱼塘
function ui_jsonCode($data) {
	$data = json_encode($data);
	$data = str_replace("\\\u","\\u",$data);
	$data = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $data);
	return $data;
}
//_xieph

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