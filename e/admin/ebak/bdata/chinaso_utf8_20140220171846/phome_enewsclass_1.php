<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','游戏资讯','|8|9|','0','25','10','10','0','9','','0','zixun','.html','','0','.html','0','0','10','10','10','','0','10','','10','1','1','10','游戏资讯','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','2','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('2','0','游戏评测','|40|41|42|','0','12','10','10','0','9','','0','pingce','.html','','0','.html','0','0','10','10','10','','0','20','','10','1','1','10','游戏评测','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('3','0','电子竞技','|10|','0','25','10','10','0','9','','0','jingji','.html','','0','.html','0','0','10','10','10','','0','30','','10','1','1','10','电子竞技','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('4','0','八卦周边','|53|','0','25','10','10','0','9','','0','bagua','.html','','0','.html','0','0','10','10','10','','0','40','','10','1','1','10','八卦周边','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('5','0','行业信息','|11|12|','0','25','10','10','0','9','','0','hangye','.html','','0','.html','0','0','10','10','10','','0','50','','10','1','1','10','行业信息','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('7','0','游戏中心','|14|','0','25','10','10','0','9','','0','games','.html','','0','.html','0','0','10','10','10','','0','100','','10','1','1','10','游戏中心','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('8','1','国内动态','','0','25','10','10','0','9','|1|','1','zixun/china','.html','Ymd','0','.html','0','0','10','10','10','','0','11','content-','10','1','1','10','国内动态','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','38','19','0');");
E_D("replace into `phome_enewsclass` values('9','1','国际新闻','','0','12','10','10','0','9','|1|','1','zixun/world','.html','Ymd','0','.html','0','0','10','10','10','','0','12','content-','10','1','1','10','国际新闻','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','13','7','0');");
E_D("replace into `phome_enewsclass` values('10','3','英雄联盟','','0','25','10','10','0','9','|3|','1','jingji/yxlm','.html','Ymd','0','.html','0','0','10','10','10','','0','31','content-','10','1','1','10','英雄联盟','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','1','0','2','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','18','9','0');");
E_D("replace into `phome_enewsclass` values('11','5','行业新闻','','0','25','10','10','0','9','|5|','1','hangye/news','.html','Ymd','0','.html','0','0','10','10','10','','0','51','content-','10','1','1','10','行业新闻','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','16','8','0');");
E_D("replace into `phome_enewsclass` values('12','5','人物访谈','','0','25','10','10','0','9','|5|','1','hangye/renwu','.html','Ymd','0','.html','0','0','10','10','10','','0','52','content-','10','1','1','10','人物访谈','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','12','6','0');");
E_D("replace into `phome_enewsclass` values('14','7','新游动态','','0','25','10','10','0','9','|7|','1','games/list01','.html','Ymd','0','.html','0','0','10','10','10','','0','101','content-','10','1','1','10','新游动态','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','14','7','0');");
E_D("replace into `phome_enewsclass` values('51','50','游戏天下','','0','25','10','11','0','10','|50|','1','photo/list01','.html','Ymd','0','.html','0','0','10','10','10','','0','61','content-','10','1','1','10','游戏天下','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','20','10','0');");
E_D("replace into `phome_enewsclass` values('38','0','开服表','|','0','25','10','10','0','9','','0','rxfw','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','开服表','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('39','0','小游戏','|','0','25','10','10','0','9','','0','fwjg','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','小游戏','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('40','2','页游','','0','25','10','10','0','9','|2|','1','pingce/yy','.html','Ymd','0','.html','0','0','10','10','10','','0','21','content-','10','1','1','10','页游','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','18','9','0');");
E_D("replace into `phome_enewsclass` values('41','2','手游','','0','25','10','10','0','9','|2|','1','pingce/sy','.html','Ymd','0','.html','0','0','10','10','10','','0','22','content-','10','1','1','10','手游','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','14','7','0');");
E_D("replace into `phome_enewsclass` values('45','0','玩家乐园','|46|','0','25','10','10','0','9','','0','fwlc','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','玩家乐园','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('46','45','玩家乐园','','0','25','10','10','0','9','|45|','1','fwlc/list01','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','玩家乐园','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','14','7','0');");
E_D("replace into `phome_enewsclass` values('47','0','联系我们','|48|','0','25','10','10','0','9','','0','contact','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','联系我们','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('48','47','联系我们','','0','25','10','10','0','9','|47|','1','contact/list01','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','联系我们','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','1','0');");
E_D("replace into `phome_enewsclass` values('50','0','游戏美图','|51|57|58|59|','0','25','10','11','0','10','','0','photo','.html','Y-m-d','0','.html','0','0','10','10','10','','0','60','','10','1','1','10','游戏美图','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('52','0','游戏工具','|','0','25','10','10','0','9','','0','tools','.html','Y-m-d','0','.html','0','0','10','10','10','','0','80','','10','1','1','10','游戏工具','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('53','4','游戏相关','','0','25','10','10','0','9','|4|','1','bagua/youxi','.html','Ymd','0','.html','0','0','10','10','10','','0','41','content-','10','1','1','10','游戏相关','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','12','6','0');");
E_D("replace into `phome_enewsclass` values('54','6','游戏专题','','0','25','10','10','0','9','|6|','1','zt/list01','.html','Ymd','0','.html','0','0','10','10','10','','0','91','content-','10','1','1','10','游戏专题','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','14','7','0');");
E_D("replace into `phome_enewsclass` values('55','0','游戏视频','|56|','0','25','10','0','0','9','','0','video','.html','Y-m-d','0','.html','0','0','10','10','10','','0','70','','10','1','1','10','游戏视频','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('56','55','游戏视频','','0','25','10','10','0','9','|55|','1','video/list01','.html','Ymd','0','.html','0','0','10','10','10','','0','71','content-','10','1','1','10','游戏视频','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','10','5','0');");
E_D("replace into `phome_enewsclass` values('57','50','图说游戏','','0','25','10','11','0','10','|50|','1','photo/list02','.html','Ymd','0','.html','0','0','10','10','10','','0','62','content-','10','1','1','10','图说游戏','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','20','10','0');");
E_D("replace into `phome_enewsclass` values('58','50','游戏发现','','0','25','10','11','0','10','|50|','1','photo/list03','.html','Ymd','0','.html','0','0','10','10','10','','0','63','content-','10','1','1','10','游戏发现','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','20','10','0');");
E_D("replace into `phome_enewsclass` values('59','50','游戏故事','','0','25','10','11','0','10','|50|','1','photo/list04','.html','Ymd','0','.html','0','0','10','10','10','','0','64','content-','10','1','1','10','游戏故事','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','22','11','0');");
E_D("replace into `phome_enewsclass` values('42','2','端游','','0','25','10','10','0','9','|2|','1','pingce/dy','.html','Ymd','0','.html','0','0','10','10','10','','0','23','content-','10','1','1','10','端游','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");
E_D("replace into `phome_enewsclass` values('6','0','专题报道','|54|','0','12','10','10','0','9','','0','zt','.html','','0','.html','0','0','10','10','10','','0','90','','10','1','1','10','专题报道','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','0');");

@include("../../inc/footer.php");
?>