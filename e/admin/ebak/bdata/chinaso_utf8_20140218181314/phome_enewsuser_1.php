<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1','admin','228cf8b405c5aaf93f96d2836e722363','EARCCGck4MN8ac2THi4d','','1','0','1','0','i47uQstv','1','1392704687','127.0.0.1','','','0','0','','1392704680','127.0.0.1','uhm8XZ4DJ5UJAiUQiVu9XtRzSkVLCEsaRuM3qqTB2byHWgmn');");

@include("../../inc/footer.php");
?>