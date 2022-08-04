<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

define('PAP_ROOT', str_replace('/fish/core', '', FISH_ROOT));

if(!$_HSC['UC_KEY']) {

	if(@include_once(PAP_ROOT . '/config.php')) {
		$_SC || $_SC = $GLOBALS['_SC'];
	} else die('无法加载必要的UCHome配置文件.');

	//添加UCH创始人到管理员列表
	$founder = explode(',', $_SC['founder']);
	$_HSC['adminer'] = array_merge($founder, (array)$_HSC['adminer']);
	$_HSC['adminer'] = array_unique($_HSC['adminer']);

	//数据库参数
	$_HSC['db']['dbhost'] = $_SC['dbhost']; //MySQL地址
	$_HSC['db']['dbuser'] = $_SC['dbuser']; //MySQL用户名
	$_HSC['db']['dbpass'] = $_SC['dbpw']; //MySQL密码
	$_HSC['db']['dbname'] = $_SC['dbname']; //数据库名
	$_HSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
	$_HSC['db']['pconnect'] = $_SC['pconnect']; //是否持续连接
	$_HSC['db']['tbprefix'] = $_SC['tablepre']; //表名前缀

	//其他参数
	$_HSC['charset'] = $_SC['charset']; //页面字符集
	$_HSC['cookiepre'] = $_SC['cookiepre']; //COOKIE前缀
	$_HSC['UC_APPID'] = UC_APPID;
	$_HSC['UC_KEY'] = UC_KEY;
	$_HSC['UC_API'] = UC_API;

	//更新缓存
	qf_putCache('_HSC', $_HSC);

}

?>