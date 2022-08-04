<?php

# 合并UCH配置到QFarm

define('PAP_ROOT', str_replace('/qqfarm/core', '', FARM_ROOT));

if(!$_QSC['UC_KEY']) {

	if(@include_once(PAP_ROOT . '/config.php')) {
		$_SC || $_SC = $GLOBALS['_SC'];
	} else die('无法加载必要的UCHome配置文件.');

	//添加UCH创始人到管理员列表
	$founder = @explode(',', $_SC['founder']);
	$_QSC['adminer'] = array_merge($founder, (array)$_QSC['adminer']);
	$_QSC['adminer'] = array_unique($_QSC['adminer']);

	//数据库参数
	$_QSC['db']['dbhost'] = $_SC['dbhost']; //MySQL地址
	$_QSC['db']['dbuser'] = $_SC['dbuser']; //MySQL用户名
	$_QSC['db']['dbpass'] = $_SC['dbpw']; //MySQL密码
	$_QSC['db']['dbname'] = $_SC['dbname']; //数据库名
	$_QSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
	$_QSC['db']['pconnect'] = $_SC['pconnect']; //是否持续连接
	$_QSC['db']['tbprefix'] = $_SC['tablepre']; //表名前缀
	$_QSC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志
	//积分类型
	$_QSC['creditType'] = 'credit';
	//其他参数
	$_QSC['charset'] = $_SC['charset']; //页面字符集
	$_QSC['cookiepre'] = $_SC['cookiepre']; //COOKIE前缀
	$_QSC['UC_APPID'] = UC_APPID;
	$_QSC['UC_KEY'] = UC_KEY;
	$_QSC['UC_API'] = UC_API;

	//更新缓存
	qf_putCache('_QSC', $_QSC);

}

?>