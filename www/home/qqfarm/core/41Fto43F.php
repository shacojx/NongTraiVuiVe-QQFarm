<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 4.2 Beta2///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_nc ADD `randtime` int (10)  DEFAULT '0'");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc ADD `randtime` int (10)  DEFAULT '0',ADD `enemy` int (1)  DEFAULT '0'");
$_QFG['db']->query("ALTER TABLE app_qqfarm_user ADD `visittime` int (10)  DEFAULT '0'");
$_QFG['db']->query("UPDATE app_qqfarm_user set visittime=".$_QSC['timestamp']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative=REPLACE(decorative,'\"item1\":1','\"item1\":{\"105\":{\"status\":1,\"validtime\":1}}')");
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative=REPLACE(decorative,',\"item4\":1','')");


//up to QFarm 4.3 Final///////////////////////////////////////////////////////

# 并创建农贸市场表
$_QFG['db']->query("
	create table if not exists app_qqfarm_market (
		id int(10) not null auto_increment,
		cid mediumint(8) default '0',
		cname text character set utf8 not null,
		cnumber mediumint(8) default '0',
		cprice int(10) default '0',
		mclass smallint(4) default '0',
		selluid int(10) default '0',
		primary key (id)
	) engine=myisam default charset=utf8;
");

# 修正留言表
$_QFG['db']->query("DROP TABLE IF EXISTS `app_qqfarm_message`;");
$_QFG['db']->query("
	create table if not exists `app_qqfarm_message` (
		id int(10) unsigned not null auto_increment,
		toid int(10) not null,
		toname varchar(50) default '',
		fromid int(10) not null,
		fromname varchar(50) default '',
		msg text character set utf8 not null,
		time int(10) not null,
		isreply int(2) default '0',
		isread int(2) default '0',
		primary key (id)
	) engine=myisam default charset=utf8;
");

die('OK. Thành công. QFarm 4.3 Final');

?>