<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsjstemp`;");
E_C("CREATE TABLE `phome_enewsjstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `showdate` varchar(20) NOT NULL DEFAULT '',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsjstemp` values('1','默认js模板','[!--empirenews.listtemp--]<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>[!--empirenews.listtemp--]','0','1','m-d','1','0','32');");
E_D("replace into `phome_enewsjstemp` values('2','dd_导航','<a href=\\\\\"[!--this.classlink--]\\\\\">[!--this.classname--]</a>','0','0','[m-d]','1','0','0');");
E_D("replace into `phome_enewsjstemp` values('3','dd_搜索','[!--empirenews.listtemp--]<a href=\\\\\"[!--news.url--]e/search/result/?searchid=[!--id--]\\\\\">[!--title--]</a> [!--empirenews.listtemp--]','0','0','[m-d]','1','0','0');");
E_D("replace into `phome_enewsjstemp` values('4','dd_新闻','[!--empirenews.listtemp--]<li><a href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a></li>[!--empirenews.listtemp--]','0','0','[m-d]','1','0','30');");
E_D("replace into `phome_enewsjstemp` values('5','dd_友情链接','[!--empirenews.listtemp--]<a href=\\\\\"[!--id--]\\\\\" target=\\\\\"_blank\\\\\">[!--title--]</a>[!--empirenews.listtemp--]','0','0','[m-d]','1','0','0');");

@include("../../inc/footer.php");
?>