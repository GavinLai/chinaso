<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','');");
E_D("replace into `phome_enewsclassadd` values('2','','');");
E_D("replace into `phome_enewsclassadd` values('3','','');");
E_D("replace into `phome_enewsclassadd` values('4','','');");
E_D("replace into `phome_enewsclassadd` values('5','','');");
E_D("replace into `phome_enewsclassadd` values('7','','');");
E_D("replace into `phome_enewsclassadd` values('8','','');");
E_D("replace into `phome_enewsclassadd` values('9','','');");
E_D("replace into `phome_enewsclassadd` values('10','','');");
E_D("replace into `phome_enewsclassadd` values('11','','');");
E_D("replace into `phome_enewsclassadd` values('12','','');");
E_D("replace into `phome_enewsclassadd` values('14','','');");
E_D("replace into `phome_enewsclassadd` values('51','','');");
E_D("replace into `phome_enewsclassadd` values('38','','');");
E_D("replace into `phome_enewsclassadd` values('39','','');");
E_D("replace into `phome_enewsclassadd` values('40','','');");
E_D("replace into `phome_enewsclassadd` values('41','','');");
E_D("replace into `phome_enewsclassadd` values('45','','');");
E_D("replace into `phome_enewsclassadd` values('46','','');");
E_D("replace into `phome_enewsclassadd` values('47','','');");
E_D("replace into `phome_enewsclassadd` values('48','','');");
E_D("replace into `phome_enewsclassadd` values('50','','');");
E_D("replace into `phome_enewsclassadd` values('52','','');");
E_D("replace into `phome_enewsclassadd` values('53','','');");
E_D("replace into `phome_enewsclassadd` values('54','','');");
E_D("replace into `phome_enewsclassadd` values('55','','');");
E_D("replace into `phome_enewsclassadd` values('56','','');");
E_D("replace into `phome_enewsclassadd` values('57','','');");
E_D("replace into `phome_enewsclassadd` values('58','','');");
E_D("replace into `phome_enewsclassadd` values('59','','');");
E_D("replace into `phome_enewsclassadd` values('6','','');");
E_D("replace into `phome_enewsclassadd` values('42','','');");

@include("../../inc/footer.php");
?>