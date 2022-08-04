<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
/**
 * JS Loader
 * Create by seaif@zealv.com
 * Code:
 *    <script type="text/javascript" charset="utf-8" src="script.php?squery&dialog"></script>
 */

@error_reporting(0);
define('JS_ROOT', 'source/script');


//JS文件映射表
$js_list = array(
	'swfobject' => JS_ROOT . '/swfobject/swfobject.js',
	'json' => JS_ROOT . '/squery/json2.js',
	'squery' => JS_ROOT . '/squery/squery.js',
	'dialog' => JS_ROOT . '/squery/dialog.js',
	'common' => JS_ROOT . '/common.js',
	'help' => JS_ROOT . '/help/help.js',
	'info_mc' => JS_ROOT . '/help/info_mc.js',
	'info_nc' => JS_ROOT . '/help/info_nc.js'
);

//修改Header信息
header('Expires:' . gmdate('D, d M Y H:i:s', time() + 15360000) . ' GMT');
header('Cache-Control: max-age=315360000');
header('Content-Type: text/javascript; charset=utf-8');

//批量加载JS文件
$jss = array_keys($_GET);
foreach($jss as $js_name) {
	if(array_key_exists($js_name, $js_list)) {
		include_once($js_list[$js_name]);
	} elseif(JS_DEBUG) {
		error_log("{$js_name}\r\n", 3, 'data/logs/#script_deny.log');
	}
}

?>