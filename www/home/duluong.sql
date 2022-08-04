-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2010 at 05:00 PM
-- Server version: 5.0.91
-- PHP Version: 5.2.9


--
-- Table structure for table `uchome_app_duluong`
--

CREATE TABLE IF NOT EXISTS `uchome_app_duluong` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `type` enum('single','double') character set gbk collate gbk_bin NOT NULL default 'single',
  `uid` int(11) NOT NULL,
  `score` int(8) NOT NULL,
  `gtime` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- Dumping data for table `uchome_app_duluong`
--

