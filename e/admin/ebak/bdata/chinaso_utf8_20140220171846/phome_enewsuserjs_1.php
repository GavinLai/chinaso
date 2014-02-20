<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserjs`;");
E_C("CREATE TABLE `phome_enewsuserjs` (
  `jsid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `jsname` varchar(60) NOT NULL DEFAULT '',
  `jssql` text NOT NULL,
  `jstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `jsfilename` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`jsid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserjs` values('1','dd_nav','select classid,classname,classpath from [!db.pre!]enewsclass where classid in(1,2,3,4,5,6,7,38,39,45,50) and showclass=0 order by myorder','2','../../d/js/js/nav.js','0');");
E_D("replace into `phome_enewsuserjs` values('2','dd_搜索','select distinct searchid as id,keyboard as title from [!db.pre!]enewssearch where iskey=0 order by onclick desc limit 5','3','../../d/js/js/soso.js','0');");
E_D("replace into `phome_enewsuserjs` values('3','dd_新闻','select * from [!db.pre!]ecms_news where checked=1 order by id limit 10','4','../../d/js/js/news.js','0');");
E_D("replace into `phome_enewsuserjs` values('4','dd_友情链接','select lname as title,lurl as id,lpic as titlepic from phome_enewslink order by lid','5','../../d/js/js/link.js','0');");
E_D("replace into `phome_enewsuserjs` values('5','dd_产品导航','select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=2 and showclass=0 order by myorder','2','../../d/js/js/product.js','0');");

@include("../../inc/footer.php");
?>