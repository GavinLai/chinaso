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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1','admin','228cf8b405c5aaf93f96d2836e722363','maWH3kibhj6C3XcZc2iL','','1','0','1','0','i47uQstv','20','1392887225','127.0.0.1','','','0','1392886831','127.0.0.1','1392704680','127.0.0.1','uhm8XZ4DJ5UJAiUQiVu9XtRzSkVLCEsaRuM3qqTB2byHWgmn');");
E_D("replace into `phome_enewsuser` values('2','gavin','a6ca69033694eacc58b75dcdf4994c79','FVBNnAGKVQFidhr7TBGV','|','2','0','1','0','VUtAq2m3','1','1392884579','127.0.0.1','','','1','0','','1392884533','127.0.0.1','MmZ4rXYQhBvpJFqz9DXfBLrCNhLZ8YXshzT9CDpDTBFcEfax');");
E_D("replace into `phome_enewsuser` values('3','liuhuan','67d8db9c09f743c4dc711f41effa4f39','zL2FHT2Xdzv38LhVqjwA','|','3','0','1','0','X9VvWUuh','1','1392884649','127.0.0.1','','','2','0','','1392884635','127.0.0.1','iRs8Zq26iBGmgEKpQN5yvgKAPrywSCXwJyTXwrMD7Vmqb5KN');");

@include("../../inc/footer.php");
?>