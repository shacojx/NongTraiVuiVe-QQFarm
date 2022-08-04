<?php

# 拍照上传入口
# QFarm API Interface


//加载缓存
if(chdir('../')) {
	include('source/cache.func.php');
	qf_getCache('_QSC');
}

isset($_QSC['apiType']) || die('{"error":"服务配置错误，保存失败...","errno":"-900"}');
define('API_ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/' . $_QSC['apiType']);

include(API_ROOT . '/savepic_'.$_QSC['charset'].'.php');

?>