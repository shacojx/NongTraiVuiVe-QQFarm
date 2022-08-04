<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

/**
 * 写入缓存
 */
function qf_putCache($key, $value, $dir = '/') {
	is_dir('data'.$dir) || mkdir('data'.$dir, 0777, true);
	$cFile = 'data'.$dir.strtolower($key).'.php';
	$cValue = $key.' = '.var_export((array)$value, true);
	return file_put_contents($cFile, "<?php\r\n\${$cValue};\r\n?>");
}

/**
 * 读取缓存
 */
function qf_getCache($key, $dir = '/') {
	if(!@include('data'.$dir.strtolower($key).'.php')) {
		@include('config'.$dir.strtolower($key).'.php');
		qf_putCache($key, $$key, $dir);
	}
	$GLOBALS[$key] = (array)$$key;
	return $GLOBALS[$key];
}

/**
 * 清空缓存
 */
function qf_delCache($pattern) {
	$files = glob($pattern, GLOB_MARK);
	foreach($files as $file) {
		if(substr($file, -1) == '/') {
			qf_delCache($file);
		}
		else unlink($file);
	}
	rmdir($dir);
}

?>