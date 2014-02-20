<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('39','10','1','1356360370','1356360706','1392798048','1');");
E_D("replace into `phome_ecms_news_index` values('42','10','1','1356739188','1356739477','1392798053','1');");
E_D("replace into `phome_ecms_news_index` values('43','10','1','1388592349','1356739477','1392798058','1');");
E_D("replace into `phome_ecms_news_index` values('96','8','1','1389534681','1389534681','1392800093','1');");
E_D("replace into `phome_ecms_news_index` values('95','8','1','1389534681','1389534681','1392800099','1');");
E_D("replace into `phome_ecms_news_index` values('94','8','1','1389534681','1389534681','1392800104','1');");
E_D("replace into `phome_ecms_news_index` values('56','48','1','1373906170','1373906240','1392798655','1');");
E_D("replace into `phome_ecms_news_index` values('93','8','1','1389534681','1389534681','1392800110','1');");
E_D("replace into `phome_ecms_news_index` values('92','8','1','1389534682','1389534682','1392800115','1');");
E_D("replace into `phome_ecms_news_index` values('91','8','1','1389615829','1389534682','1392800121','1');");
E_D("replace into `phome_ecms_news_index` values('90','8','1','1389534683','1389534683','1392800126','1');");
E_D("replace into `phome_ecms_news_index` values('89','8','1','1389615834','1389534683','1392800131','1');");
E_D("replace into `phome_ecms_news_index` values('97','8','1','1389534676','1389534676','1392800088','1');");
E_D("replace into `phome_ecms_news_index` values('98','8','1','1389534676','1389534676','1392800083','1');");
E_D("replace into `phome_ecms_news_index` values('99','8','1','1389534675','1389534675','1392800078','1');");
E_D("replace into `phome_ecms_news_index` values('100','8','1','1389534675','1389534675','1392800072','1');");
E_D("replace into `phome_ecms_news_index` values('101','8','1','1389534674','1389534674','1392800060','1');");
E_D("replace into `phome_ecms_news_index` values('102','8','1','1389534674','1389534674','1392800054','1');");
E_D("replace into `phome_ecms_news_index` values('103','8','1','1389534674','1389534674','1392800046','1');");
E_D("replace into `phome_ecms_news_index` values('104','8','1','1389534674','1389534674','1392800042','1');");
E_D("replace into `phome_ecms_news_index` values('105','8','1','1389534673','1389534673','1392800038','1');");
E_D("replace into `phome_ecms_news_index` values('106','51','1','1389534673','1389534673','1392798673','1');");
E_D("replace into `phome_ecms_news_index` values('107','51','1','1389534672','1389534672','1392798681','1');");
E_D("replace into `phome_ecms_news_index` values('108','51','1','1389534672','1389534672','1392798686','1');");
E_D("replace into `phome_ecms_news_index` values('109','51','1','1389534671','1389534671','1392798697','1');");
E_D("replace into `phome_ecms_news_index` values('110','51','1','1389534671','1389534671','1392798702','1');");
E_D("replace into `phome_ecms_news_index` values('111','51','1','1389614681','1389534668','1392798707','1');");
E_D("replace into `phome_ecms_news_index` values('112','51','1','1389534668','1389534668','1392798712','1');");
E_D("replace into `phome_ecms_news_index` values('113','8','1','1389534667','1389534667','1392799356','1');");
E_D("replace into `phome_ecms_news_index` values('114','56','1','1389534667','1389534667','1392799058','1');");
E_D("replace into `phome_ecms_news_index` values('115','56','1','1389534666','1389534666','1392799062','1');");
E_D("replace into `phome_ecms_news_index` values('116','57','1','1389534666','1389534666','1392798786','1');");
E_D("replace into `phome_ecms_news_index` values('117','57','1','1389534665','1389534665','1392798791','1');");
E_D("replace into `phome_ecms_news_index` values('118','57','1','1389534665','1389534665','1392798795','1');");
E_D("replace into `phome_ecms_news_index` values('119','57','1','1389534665','1389534665','1392798799','1');");
E_D("replace into `phome_ecms_news_index` values('120','56','1','1389534665','1389534665','1392799066','1');");
E_D("replace into `phome_ecms_news_index` values('121','56','1','1389534664','1389534664','1392799070','1');");
E_D("replace into `phome_ecms_news_index` values('122','56','1','1389534664','1389534664','1392799074','1');");
E_D("replace into `phome_ecms_news_index` values('123','46','1','1389534663','1389534663','1392798386','1');");
E_D("replace into `phome_ecms_news_index` values('124','46','1','1389534663','1389534663','1392798391','1');");
E_D("replace into `phome_ecms_news_index` values('125','46','1','1389534662','1389534662','1392798395','1');");
E_D("replace into `phome_ecms_news_index` values('126','46','1','1389534662','1389534662','1392798402','1');");
E_D("replace into `phome_ecms_news_index` values('127','46','1','1389534662','1389534662','1392798407','1');");
E_D("replace into `phome_ecms_news_index` values('128','46','1','1389534662','1389534662','1392798412','1');");
E_D("replace into `phome_ecms_news_index` values('129','46','1','1389534069','1389534069','1392798417','1');");
E_D("replace into `phome_ecms_news_index` values('130','12','1','1389534069','1389534069','1392798145','1');");
E_D("replace into `phome_ecms_news_index` values('131','12','1','1389534067','1389534067','1392798149','1');");
E_D("replace into `phome_ecms_news_index` values('132','12','1','1389534067','1389534067','1392798154','1');");
E_D("replace into `phome_ecms_news_index` values('133','12','1','1389534066','1389534066','1392798159','1');");
E_D("replace into `phome_ecms_news_index` values('134','12','1','1389534066','1389534066','1389601342','1');");
E_D("replace into `phome_ecms_news_index` values('135','12','1','1389534065','1389534065','1392798164','1');");
E_D("replace into `phome_ecms_news_index` values('136','14','1','1389534065','1389534065','1392798176','1');");
E_D("replace into `phome_ecms_news_index` values('137','14','1','1389534063','1389534063','1392798180','1');");
E_D("replace into `phome_ecms_news_index` values('138','14','1','1389534063','1389534063','1392798184','1');");
E_D("replace into `phome_ecms_news_index` values('139','14','1','1389534061','1389534061','1392798189','1');");
E_D("replace into `phome_ecms_news_index` values('140','14','1','1389534061','1389534061','1392798194','1');");
E_D("replace into `phome_ecms_news_index` values('141','14','1','1389534061','1389534061','1392798203','1');");
E_D("replace into `phome_ecms_news_index` values('142','14','1','1389534061','1389534061','1392798198','1');");
E_D("replace into `phome_ecms_news_index` values('143','41','1','1389534060','1389534060','1392798336','1');");
E_D("replace into `phome_ecms_news_index` values('144','41','1','1389534060','1389534060','1392798341','1');");
E_D("replace into `phome_ecms_news_index` values('145','41','1','1389534058','1389534058','1392798345','1');");
E_D("replace into `phome_ecms_news_index` values('146','41','1','1389534058','1389534058','1392798350','1');");
E_D("replace into `phome_ecms_news_index` values('147','41','1','1389534057','1389534057','1392798355','1');");
E_D("replace into `phome_ecms_news_index` values('148','41','1','1389534057','1389534057','1392798360','1');");
E_D("replace into `phome_ecms_news_index` values('149','41','1','1389534056','1389534056','1392798365','1');");
E_D("replace into `phome_ecms_news_index` values('150','40','1','1389534056','1389534056','1392798237','1');");
E_D("replace into `phome_ecms_news_index` values('151','40','1','1389534055','1389534055','1392798250','1');");
E_D("replace into `phome_ecms_news_index` values('152','40','1','1389534055','1389534055','1392798255','1');");
E_D("replace into `phome_ecms_news_index` values('153','40','1','1389534053','1389534053','1392798263','1');");
E_D("replace into `phome_ecms_news_index` values('154','40','1','1389534053','1389534053','1392798267','1');");
E_D("replace into `phome_ecms_news_index` values('155','40','1','1389534052','1389534052','1392798309','1');");
E_D("replace into `phome_ecms_news_index` values('156','40','1','1389534052','1389534052','1392798278','1');");
E_D("replace into `phome_ecms_news_index` values('157','40','1','1389534052','1389534052','1392798283','1');");
E_D("replace into `phome_ecms_news_index` values('158','40','1','1389534052','1389534052','1392798289','1');");
E_D("replace into `phome_ecms_news_index` values('159','11','1','1389534048','1389534048','1392798101','1');");
E_D("replace into `phome_ecms_news_index` values('160','11','1','1389534048','1389534048','1392798106','1');");
E_D("replace into `phome_ecms_news_index` values('161','11','1','1389534048','1389534048','1392798110','1');");
E_D("replace into `phome_ecms_news_index` values('162','11','1','1389534048','1389534048','1392798115','1');");
E_D("replace into `phome_ecms_news_index` values('163','11','1','1389534046','1389534046','1392798120','1');");
E_D("replace into `phome_ecms_news_index` values('164','11','1','1389534046','1389534046','1392798124','1');");
E_D("replace into `phome_ecms_news_index` values('165','11','1','1389534045','1389534045','1392798130','1');");
E_D("replace into `phome_ecms_news_index` values('166','11','1','1389534045','1389534045','1392798135','1');");
E_D("replace into `phome_ecms_news_index` values('167','10','1','1389534045','1389534045','1392798065','1');");
E_D("replace into `phome_ecms_news_index` values('168','10','1','1389534045','1389534045','1392798070','1');");
E_D("replace into `phome_ecms_news_index` values('169','10','1','1389534044','1389534044','1392798076','1');");
E_D("replace into `phome_ecms_news_index` values('170','10','1','1389534044','1389534044','1392798081','1');");
E_D("replace into `phome_ecms_news_index` values('171','10','1','1389534039','1389534039','1392798086','1');");
E_D("replace into `phome_ecms_news_index` values('172','10','1','1389534039','1389534039','1392798092','1');");
E_D("replace into `phome_ecms_news_index` values('173','9','1','1389534038','1389534038','1392798018','1');");
E_D("replace into `phome_ecms_news_index` values('174','9','1','1389534038','1389534038','1392798022','1');");
E_D("replace into `phome_ecms_news_index` values('175','9','1','1389534037','1389534037','1392798028','1');");
E_D("replace into `phome_ecms_news_index` values('176','9','1','1389534037','1389534037','1392798033','1');");
E_D("replace into `phome_ecms_news_index` values('177','9','1','1389534036','1389534036','1392798037','1');");
E_D("replace into `phome_ecms_news_index` values('178','9','1','1389534036','1389534036','1392798042','1');");
E_D("replace into `phome_ecms_news_index` values('179','53','1','1389534671','1389588094','1392798991','1');");
E_D("replace into `phome_ecms_news_index` values('180','53','1','1389534668','1389588094','1392798996','1');");
E_D("replace into `phome_ecms_news_index` values('181','53','1','1389534668','1389588094','1392799000','1');");
E_D("replace into `phome_ecms_news_index` values('182','53','1','1389534667','1389588094','1392799003','1');");
E_D("replace into `phome_ecms_news_index` values('183','53','1','1389534667','1389588094','1392799007','1');");
E_D("replace into `phome_ecms_news_index` values('184','53','1','1389534666','1389588094','1392799011','1');");
E_D("replace into `phome_ecms_news_index` values('185','54','1','1389534673','1389588102','1392799019','1');");
E_D("replace into `phome_ecms_news_index` values('186','54','1','1389534673','1389588102','1392799022','1');");
E_D("replace into `phome_ecms_news_index` values('187','54','1','1389534672','1389588102','1392799026','1');");
E_D("replace into `phome_ecms_news_index` values('188','54','1','1389534672','1389588102','1392799029','1');");
E_D("replace into `phome_ecms_news_index` values('189','54','1','1389534671','1389588102','1392799033','1');");
E_D("replace into `phome_ecms_news_index` values('190','54','1','1389534671','1389588102','1392799042','1');");
E_D("replace into `phome_ecms_news_index` values('191','54','1','1389534668','1389588102','1392799037','1');");
E_D("replace into `phome_ecms_news_index` values('192','51','1','1389614711','1389607175','1392798716','1');");
E_D("replace into `phome_ecms_news_index` values('193','57','1','1389534672','1389607186','1392798805','1');");
E_D("replace into `phome_ecms_news_index` values('194','57','1','1389534671','1389607186','1392798810','1');");
E_D("replace into `phome_ecms_news_index` values('195','57','1','1389534671','1389607186','1392798815','1');");
E_D("replace into `phome_ecms_news_index` values('196','57','1','1389534671','1389607186','1392798820','1');");
E_D("replace into `phome_ecms_news_index` values('197','58','1','1389534672','1389607224','1392798857','1');");
E_D("replace into `phome_ecms_news_index` values('198','58','1','1389534671','1389607224','1392798862','1');");
E_D("replace into `phome_ecms_news_index` values('199','58','1','1389534668','1389607224','1392798866','1');");
E_D("replace into `phome_ecms_news_index` values('200','58','1','1389534668','1389607224','1392798871','1');");
E_D("replace into `phome_ecms_news_index` values('201','58','1','1389534672','1389607237','1392798875','1');");
E_D("replace into `phome_ecms_news_index` values('202','58','1','1389534671','1389607237','1392798880','1');");
E_D("replace into `phome_ecms_news_index` values('203','58','1','1389534671','1389607237','1392798885','1');");
E_D("replace into `phome_ecms_news_index` values('204','58','1','1389534668','1389607242','1392798889','1');");
E_D("replace into `phome_ecms_news_index` values('205','59','1','1389534673','1389607251','1392798915','1');");
E_D("replace into `phome_ecms_news_index` values('206','59','1','1389534672','1389607251','1392798919','1');");
E_D("replace into `phome_ecms_news_index` values('207','59','1','1389534671','1389607251','1392798924','1');");
E_D("replace into `phome_ecms_news_index` values('208','59','1','1389534668','1389607251','1392798928','1');");
E_D("replace into `phome_ecms_news_index` values('209','59','1','1389534671','1389607251','1392798933','1');");
E_D("replace into `phome_ecms_news_index` values('210','59','1','1389534665','1389607257','1392798937','1');");
E_D("replace into `phome_ecms_news_index` values('211','59','1','1389534672','1389607257','1392798942','1');");
E_D("replace into `phome_ecms_news_index` values('212','59','1','1389534671','1389607257','1392798946','1');");
E_D("replace into `phome_ecms_news_index` values('213','59','1','1389534671','1389607257','1392798951','1');");
E_D("replace into `phome_ecms_news_index` values('214','51','1','1389614659','1389607395','1392798721','1');");
E_D("replace into `phome_ecms_news_index` values('215','51','1','1389614576','1389607395','1392798727','1');");
E_D("replace into `phome_ecms_news_index` values('216','57','1','1389534665','1389607401','1392798824','1');");
E_D("replace into `phome_ecms_news_index` values('217','57','1','1389534671','1389607401','1392798828','1');");
E_D("replace into `phome_ecms_news_index` values('218','58','1','1389534672','1389607406','1392798893','1');");
E_D("replace into `phome_ecms_news_index` values('219','58','1','1389534671','1389607406','1392798897','1');");
E_D("replace into `phome_ecms_news_index` values('220','59','1','1389534671','1389607411','1392798955','1');");
E_D("replace into `phome_ecms_news_index` values('221','59','1','1389534671','1389607411','1392798959','1');");
E_D("replace into `phome_ecms_news_index` values('1000','8','1','1392800405','1392800424','1392800424','1');");
E_D("replace into `phome_ecms_news_index` values('1001','9','1','1392881023','1392881088','1392881088','1');");

@include("../../inc/footer.php");
?>