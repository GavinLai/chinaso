<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2014-02-18 14:24:47','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('2','admin','2014-02-18 18:54:30','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('3','admin','2014-02-18 19:01:41','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('4','admin','2014-02-19 10:24:01','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('5','admin','2014-02-19 11:44:30','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('6','admin','2014-02-19 12:05:12','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('7','admin','2014-02-19 16:08:07','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('8','admin','2014-02-19 17:22:38','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('9','admin','2014-02-20 00:58:05','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('10','admin','2014-02-20 11:26:48','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('11','admin','2014-02-20 11:43:23','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('12','admin','2014-02-20 11:50:30','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('13','admin','2014-02-20 13:40:24','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('14','admin','2014-02-20 15:19:04','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('15','admin','2014-02-20 16:02:39','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('16','gavin','2014-02-20 16:22:59','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('17','liuhuan','2014-02-20 16:24:10','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('18','admin','2014-02-20 16:51:26','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('19','admin','2014-02-20 16:52:20','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('20','admin','2014-02-20 16:56:52','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('21','admin','2014-02-20 17:00:31','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('22','admin','2014-02-20 17:07:05','127.0.0.1','1','','0');");

@include("../../inc/footer.php");
?>