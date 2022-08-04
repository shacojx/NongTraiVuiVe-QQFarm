<?php

/**
 * JS Loader
 * Create by seaif@zealv.com
 * Code:
 *    <script type="text/javascript" charset="utf-8" src="script.php?squery&dialog"></script>
 */
include('common.php');
@error_reporting(0);
define('JS_ROOT', 'source/script');

//Modify Header Information
header('Expires:' . gmdate('D, d M Y H:i:s', time() + 15360000) . ' GMT');
header('Cache-Control: max-age=315360000');
header('Content-Type: text/javascript; charset=utf-8');



//JS file mapping table
$js_list = array(
	'swfobject' => JS_ROOT . '/swfobject/swfobject.js',
	'json' => JS_ROOT . '/squery/json2.js',
	'squery' => JS_ROOT . '/squery/squery.js',
	'dialog' => JS_ROOT . '/squery/dialog.js',
	'c1' => JS_ROOT . '/js/c1.js',
	'main' => JS_ROOT . '/main.js',
	'appclientlib' => JS_ROOT . '/js/appclientlib.js',
	'qzfl_lite' => JS_ROOT . '/js/qzfl_lite.js',
	'friendSelector' => JS_ROOT . '/js/friendSelector.js',
	'pinyin' => JS_ROOT . '/js/pinyin.js',
	'common' => JS_ROOT . '/common.js',
	'help' => JS_ROOT . '/help/help.js',
	'info_mc' => JS_ROOT . '/help/info_mc.js',
	'info_nc' => JS_ROOT . '/help/info_nc.js'
);

//Bulk load JS files
$jss = array_keys($_GET);
foreach($jss as $js_name) {
	if(array_key_exists($js_name, $js_list)) {
		include_once($js_list[$js_name]);
	} elseif(JS_DEBUG) {
		error_log("{$js_name}\r\n", 3, 'data/logs/#script_deny.log');
	}
}

?>