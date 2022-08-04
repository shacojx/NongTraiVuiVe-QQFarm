--
-- for qqfarm 6.0 final
-- dump by seaif@zealv.com
--

CREATE TABLE IF NOT EXISTS `app_qqfarm_market` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` mediumint(8) NOT NULL DEFAULT '0',
  `cnumber` mediumint(8) NOT NULL DEFAULT '0',
  `cprice` int(10) NOT NULL DEFAULT '0',
  `mclass` smallint(4) NOT NULL DEFAULT '0',
  `selluid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_mc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0',
  `status` text NOT NULL,
  `exp` int(10) DEFAULT '0',
  `taskid` tinyint(2) NOT NULL DEFAULT '0',
  `goods` text NOT NULL,
  `package` text NOT NULL,
  `tools` text NOT NULL,
  `feed` text NOT NULL,
  `decorative` text NOT NULL,
  `bad` text NOT NULL,
  `badnum` tinyint(3) NOT NULL,
  `badtime` int(10) NOT NULL DEFAULT '0',
  `parade` text NOT NULL,
  `repertory` text NOT NULL,
  `dabian` tinyint(3) NOT NULL,
  `sfeedleft` int(10) NOT NULL DEFAULT '30',
  `mclock` text NOT NULL,
  `guard` text NOT NULL,
  `zong` tinyint(3) NOT NULL DEFAULT '0',
  `randtime` int(10) DEFAULT '0',
  `enemy` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_mclogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `fromid` int(10) NOT NULL,
  `count` text NOT NULL,
  `iid` text NOT NULL,
  `money` text NOT NULL,
  `isread` int(10) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `toid` int(10) NOT NULL,
  `toname` varchar(50) DEFAULT '',
  `fromid` int(10) NOT NULL,
  `fromname` varchar(50) DEFAULT '',
  `msg` text NOT NULL,
  `time` int(10) NOT NULL,
  `isreply` tinyint(2) DEFAULT '0',
  `isread` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_nc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0',
  `status` text NOT NULL,
  `reclaim` tinyint(2) NOT NULL DEFAULT '6',
  `redland` tinyint(2) NOT NULL DEFAULT '0',
  `exp` int(10) NOT NULL DEFAULT '0',
  `taskid` tinyint(2) NOT NULL DEFAULT '0',
  `package` text,
  `flower` text NOT NULL,
  `fruit` text,
  `tools` text,
  `decorative` text,
  `dog` text,
  `weed` text,
  `pest` text,
  `bison` text,
  `nclock` text,
  `badnum` tinyint(2) NOT NULL DEFAULT '50',
  `activeItem` int(6) NOT NULL DEFAULT '90001',
  `repertory` text NOT NULL,
  `tips` text NOT NULL,
  `healthmode` text NOT NULL,
  `chris` int(10) NOT NULL DEFAULT '0',
  `zong` mediumint(9) NOT NULL DEFAULT '0',
  `nc_e` tinyint(1) NOT NULL DEFAULT '1',
  `levelup` int(10) NOT NULL DEFAULT '200',
  `randtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_nclogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `count` int(10) NOT NULL,
  `fromid` int(10) NOT NULL,
  `time` int(10) NOT NULL,
  `cropid` int(10) NOT NULL,
  `isread` int(10) NOT NULL,
  `counts` text NOT NULL,
  `money` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `app_qqfarm_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL,
  `regname` char(18) NOT NULL,
  `username` char(24) NOT NULL,
  `money` int(10) DEFAULT '0',
  `yb` int(10) DEFAULT '0',
  `vip` text NOT NULL,
  `npc` text NOT NULL,
  `pf` tinyint(1) DEFAULT '0',
  `tianqi` tinyint(1) NOT NULL DEFAULT '1',
  `visittime` int(10) DEFAULT '0',
  `beasts` text NOT NULL,
  `crystal` text NOT NULL,
  `tools` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

