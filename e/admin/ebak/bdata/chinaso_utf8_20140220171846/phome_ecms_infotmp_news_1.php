<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infotmp_news`;");
E_C("CREATE TABLE `phome_ecms_infotmp_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `oldurl` varchar(200) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `tmptime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `keyboard` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `ftitle` varchar(120) NOT NULL DEFAULT '',
  `smalltext` varchar(255) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_infotmp_news` values('1','1','http://www.youxi.com//news/30637.html','1','2014-01-12 21:40:36','1','admin','1389534036','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('2','1','http://www.youxi.com//news/30630.html','1','2014-01-12 21:40:36','1','admin','1389534036','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('3','1','http://www.youxi.com//news/30595.html','1','2014-01-12 21:40:37','1','admin','1389534037','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('4','1','http://www.youxi.com//news/30535.html','1','2014-01-12 21:40:37','1','admin','1389534037','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('5','1','http://www.youxi.com//news/30502.html','1','2014-01-12 21:40:38','1','admin','1389534038','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('6','1','http://www.youxi.com//news/30481.html','1','2014-01-12 21:40:38','1','admin','1389534038','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('7','1','http://www.youxi.com//news/30435.html','1','2014-01-12 21:40:39','1','admin','1389534039','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('8','1','http://www.youxi.com//news/30394.html','1','2014-01-12 21:40:39','1','admin','1389534039','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('9','1','http://www.youxi.com//news/30373.html','1','2014-01-12 21:40:44','1','admin','1389534044','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('10','1','http://www.youxi.com//news/30364.html','1','2014-01-12 21:40:44','1','admin','1389534044','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('11','1','http://www.youxi.com//news/30360.html','1','2014-01-12 21:40:45','1','admin','1389534045','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('12','1','http://www.youxi.com//news/30308.html','1','2014-01-12 21:40:45','1','admin','1389534045','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('13','1','http://www.youxi.com//news/30267.html','1','2014-01-12 21:40:45','1','admin','1389534045','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('14','1','http://www.youxi.com//news/30220.html','1','2014-01-12 21:40:45','1','admin','1389534045','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('15','1','http://www.youxi.com//news/30198.html','1','2014-01-12 21:40:46','1','admin','1389534046','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('16','1','http://www.youxi.com//news/30115.html','1','2014-01-12 21:40:46','1','admin','1389534046','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('17','1','http://www.youxi.com//news/30110.html','1','2014-01-12 21:40:48','1','admin','1389534048','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('18','1','http://www.youxi.com//news/30099.html','1','2014-01-12 21:40:48','1','admin','1389534048','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('19','1','http://www.youxi.com//news/30073.html','1','2014-01-12 21:40:48','1','admin','1389534048','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('20','1','http://www.youxi.com//news/30064.html','1','2014-01-12 21:40:48','1','admin','1389534048','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('21','1','http://www.youxi.com//news/30063.html','1','2014-01-12 21:40:52','1','admin','1389534052','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('22','1','http://www.youxi.com//news/30062.html','1','2014-01-12 21:40:52','1','admin','1389534052','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('23','1','http://www.youxi.com//news/30061.html','1','2014-01-12 21:40:52','1','admin','1389534052','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('24','1','http://www.youxi.com//news/30060.html','1','2014-01-12 21:40:52','1','admin','1389534052','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('25','1','http://www.youxi.com//news/30054.html','1','2014-01-12 21:40:53','1','admin','1389534053','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('26','1','http://www.youxi.com//news/30053.html','1','2014-01-12 21:40:53','1','admin','1389534053','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('27','1','http://www.youxi.com//news/30041.html','1','2014-01-12 21:40:55','1','admin','1389534055','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('28','1','http://www.youxi.com//news/30040.html','1','2014-01-12 21:40:55','1','admin','1389534055','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('29','1','http://www.youxi.com//news/30038.html','1','2014-01-12 21:40:56','1','admin','1389534056','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('30','1','http://www.youxi.com//news/30036.html','1','2014-01-12 21:40:56','1','admin','1389534056','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('31','1','http://www.youxi.com//news/30034.html','1','2014-01-12 21:40:57','1','admin','1389534057','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('32','1','http://www.youxi.com//news/30008.html','1','2014-01-12 21:40:57','1','admin','1389534057','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('33','1','http://www.youxi.com//news/29933.html','1','2014-01-12 21:40:58','1','admin','1389534058','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('34','1','http://www.youxi.com//news/29854.html','1','2014-01-12 21:40:58','1','admin','1389534058','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('35','1','http://www.youxi.com//news/29853.html','1','2014-01-12 21:41:00','1','admin','1389534060','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('36','1','http://www.youxi.com//news/29837.html','1','2014-01-12 21:41:00','1','admin','1389534060','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('37','1','http://www.youxi.com//news/29822.html','1','2014-01-12 21:41:01','1','admin','1389534061','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('38','1','http://www.youxi.com//news/29807.html','1','2014-01-12 21:41:01','1','admin','1389534061','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('39','1','http://www.youxi.com//news/29792.html','1','2014-01-12 21:41:01','1','admin','1389534061','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('40','1','http://www.youxi.com//news/29791.html','1','2014-01-12 21:41:01','1','admin','1389534061','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('41','1','http://www.youxi.com//news/29790.html','1','2014-01-12 21:41:03','1','admin','1389534063','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('42','1','http://www.youxi.com//news/29789.html','1','2014-01-12 21:41:03','1','admin','1389534063','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('43','1','http://www.youxi.com//news/29788.html','1','2014-01-12 21:41:05','1','admin','1389534065','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('44','1','http://www.youxi.com//news/29748.html','1','2014-01-12 21:41:05','1','admin','1389534065','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('45','1','http://www.youxi.com//news/29740.html','1','2014-01-12 21:41:06','1','admin','1389534066','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('46','1','http://www.youxi.com//news/29738.html','1','2014-01-12 21:41:06','1','admin','1389534066','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('47','1','http://www.youxi.com//news/29664.html','1','2014-01-12 21:41:07','1','admin','1389534067','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('48','1','http://www.youxi.com//news/29643.html','1','2014-01-12 21:41:07','1','admin','1389534067','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('49','1','http://www.youxi.com//news/29638.html','1','2014-01-12 21:41:09','1','admin','1389534069','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('50','1','http://www.youxi.com//news/29628.html','1','2014-01-12 21:41:09','1','admin','1389534069','','手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('51','1','http://www.youxi.com//news/29535.html','1','2014-01-12 21:51:02','1','admin','1389534662','','蜗牛经典战旗游戏续作《英雄之城2》年初开测','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('52','1','http://www.youxi.com//news/29509.html','1','2014-01-12 21:51:02','1','admin','1389534662','','像素风格新游《100回勇者》明年一月上架','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('53','1','http://www.youxi.com//news/29487.html','1','2014-01-12 21:51:02','1','admin','1389534662','','神秘新作《进击的巨人》预告网站曝光','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('54','1','http://www.youxi.com//news/29486.html','1','2014-01-12 21:51:02','1','admin','1389534662','','上《手游伴侣》 马上有礼包','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('55','1','http://www.youxi.com//news/29478.html','1','2014-01-12 21:51:03','1','admin','1389534663','','《JOJO的奇妙冒险星尘射手》宣传视频公开','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('56','1','http://www.youxi.com//news/29460.html','1','2014-01-12 21:51:03','1','admin','1389534663','','人气大作《侠盗猎车手圣安地列斯》即将登陆WP','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('57','1','http://www.youxi.com//news/29459.html','1','2014-01-12 21:51:04','1','admin','1389534664','','《恋姬无双》改编手游 宅男福利不得不看','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('58','1','http://www.youxi.com//news/29454.html','1','2014-01-12 21:51:04','1','admin','1389534664','','《魔龙推币机》年末感谢祭 福利活动轮番来袭','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('59','1','http://www.youxi.com//news/29440.html','1','2014-01-12 21:51:05','1','admin','1389534665','','经营类策略游戏《联萌破坏者》即将激萌来袭','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('60','1','http://www.youxi.com//news/29427.html','1','2014-01-12 21:51:05','1','admin','1389534665','','《秋战军阀混战》最新上架消息曝光','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('61','1','http://www.youxi.com//news/29413.html','1','2014-01-12 21:51:05','1','admin','1389534665','','《锁链战记》日服版故事剧情完结 新篇章即将开启','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('62','1','http://www.youxi.com//news/29411.html','1','2014-01-12 21:51:05','1','admin','1389534665','','父子冒险之旅 《极地传奇》发布时间确定','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('63','1','http://www.youxi.com//news/29396.html','1','2014-01-12 21:51:06','1','admin','1389534666','','福利游戏《出包王女Darkness》即将登陆','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('64','1','http://www.youxi.com//news/29386.html','1','2014-01-12 21:51:06','1','admin','1389534666','','快来《手游伴侣》领《西游降魔篇》的礼包','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('65','1','http://www.youxi.com//news/29370.html','1','2014-01-12 21:51:07','1','admin','1389534667','','形象大变身《王国征服2》与《布偶人Z》合作内容公开','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('66','1','http://www.youxi.com//news/29347.html','1','2014-01-12 21:51:07','1','admin','1389534667','','《新世界福音战士魂之净化》即将登陆手机游戏','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('67','1','http://www.youxi.com//news/29323.html','1','2014-01-12 21:51:08','1','admin','1389534668','','《圣魔激战》新年活动开启','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('68','1','http://www.youxi.com//news/29315.html','1','2014-01-12 21:51:08','1','admin','1389534668','','“JUMPFESTA”超燃开幕 各大游戏巨头齐齐亮相','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('69','1','http://www.youxi.com//news/29292.html','1','2014-01-12 21:51:11','1','admin','1389534671','','上爱拍原创  潮人部落等你加入','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('70','1','http://www.youxi.com//news/29238.html','1','2014-01-12 21:51:11','1','admin','1389534671','','严冬里的父子温情 《Last Inua》前瞻视频','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('71','1','http://www.youxi.com//news/29218.html','1','2014-01-12 21:51:12','1','admin','1389534672','','《手游伴侣》攻略通圣诞来袭','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('72','1','http://www.youxi.com//news/29210.html','1','2014-01-12 21:51:12','1','admin','1389534672','','坐拥后宫过圣诞《剑技少女》新活动开启','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('73','1','http://www.youxi.com//news/29199.html','1','2014-01-12 21:51:13','1','admin','1389534673','','世嘉年末感谢祭 游戏降价第二弹','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('74','1','http://www.youxi.com//news/29192.html','1','2014-01-12 21:51:13','1','admin','1389534673','','《100TURN勇者》登陆时间正式公开','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('75','1','http://www.youxi.com//news/29158.html','1','2014-01-12 21:51:14','1','admin','1389534674','','独特风格末日逃生 手机游戏《黑白不明》前瞻','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('76','1','http://www.youxi.com//news/29151.html','1','2014-01-12 21:51:14','1','admin','1389534674','','和《制服少女》一起过圣诞','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('77','1','http://www.youxi.com//news/29142.html','1','2014-01-12 21:51:14','1','admin','1389534674','','世嘉年末感谢祭 经典游戏疯狂降价','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('78','1','http://www.youxi.com//news/29132.html','1','2014-01-12 21:51:14','1','admin','1389534674','','《轨迹》手游版曝光 登陆移动平台指日可待','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('79','1','http://www.youxi.com//news/29109.html','1','2014-01-12 21:51:15','1','admin','1389534675','','《东京7th sisters》人物角色大公开第一弹','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('80','1','http://www.youxi.com//news/29091.html','1','2014-01-12 21:51:15','1','admin','1389534675','','快来《手游伴侣》领《格斗之皇》圣诞狂欢礼包吧','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('81','1','http://www.youxi.com//news/29059.html','1','2014-01-12 21:51:16','1','admin','1389534676','','投影解密游戏《Shadowmatic》即将登陆iOS','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('82','1','http://www.youxi.com//news/29014.html','1','2014-01-12 21:51:16','1','admin','1389534676','','《Year Walk》开发商Simogo发布新预告','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('83','1','http://www.youxi.com//news/29013.html','1','2014-01-12 21:51:21','1','admin','1389534681','','SQEX最终幻想系列等名作年末大降价','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('84','1','http://www.youxi.com//news/29010.html','1','2014-01-12 21:51:21','1','admin','1389534681','','超现实世界 解谜新作《梦游逃生》曝光','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('85','1','http://www.youxi.com//news/29009.html','1','2014-01-12 21:51:21','1','admin','1389534681','','chillingo新作《给我喂石油2》即将来袭','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('86','1','http://www.youxi.com//news/29006.html','1','2014-01-12 21:51:21','1','admin','1389534681','','和风创意大作《Tengami》明年年初上架','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('87','1','http://www.youxi.com//news/29005.html','1','2014-01-12 21:51:22','1','admin','1389534682','','人气移植游戏《绝技飞车手》即将推出续作','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('88','1','http://www.youxi.com//news/28999.html','1','2014-01-12 21:51:22','1','admin','1389534682','','更偏重跑酷 《车手乔伊无限》年后推出','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('89','1','http://www.youxi.com//news/28998.html','1','2014-01-12 21:51:23','1','admin','1389534683','','融合多元素 SE新作《枪炮与灵魂》将发布','0000-00-00 00:00:00','','','','','','','0');");
E_D("replace into `phome_ecms_infotmp_news` values('90','1','http://www.youxi.com//news/28975.html','1','2014-01-12 21:51:23','1','admin','1389534683','','《诗歌召唤者》续作 《诗歌召唤者：枪魂》','0000-00-00 00:00:00','','','','','','','0');");

@include("../../inc/footer.php");
?>