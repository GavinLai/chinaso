<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearchtemp`;");
E_C("CREATE TABLE `phome_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearchtemp` values('1','默认搜索模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n[!--temp.ll新闻列表_header--]\r\n</head>\r\n \r\n<body>\r\n\r\n<div class=\\\\\"h\\\\\">\r\n<div class=\\\\\"header\\\\\">\r\n<div class=\\\\\"header_left\\\\\">\r\n<!--\r\n<span><img src=\\\\\"/image/siji.gif\\\\\" width=\\\\\"9\\\\\" height=\\\\\"14\\\\\" /></span>\r\n<a href=\\\\\"#\\\\\">手机探索</a>-->\r\n<span><img src=\\\\\"/image/gx.gif\\\\\" width=\\\\\"12\\\\\" height=\\\\\"14\\\\\" /></span>\r\n<a href=\\\\\"/new/\\\\\" id=\\\\''hd\\\\'' >最新更新</a>\r\n</div>\r\n<div class=\\\\\"header_right\\\\\"><a href=\\\\\"javascript:void(0);\\\\\" onclick=\\\\\"SetHome(this)\\\\\">设为首页</a> <a href=\\\\\"javascript:void(0);\\\\\" onclick=\\\\\"addfavorite()\\\\\">加入收藏</a></div>\r\n \r\n</div>\r\n<div class=\\\\\"top\\\\\">\r\n<div class=\\\\\"logo\\\\\"><a href=\\\\\"!--news.url--]\\\\\"><img src=\\\\\"/image/logo.gif\\\\\" width=\\\\\"250\\\\\" height=\\\\\"38\\\\\" /></a></div>\r\n<div class=\\\\\"tde\\\\\">\r\n<div class=\\\\\"tde_fxd\\\\\">分享到：</div>\r\n<div class=\\\\\"tde_weibo\\\\\"><a href=\\\\\"javascript:void((function(s,d,e){try{}catch(e){}var f=\\\\''http://v.t.sina.com.cn/share/share.php?\\\\'',u=d.location.href,title=d.title,p=[\\\\''url=\\\\'',e(u),\\\\''&title=\\\\'',e(title),\\\\''&appkey=1449381461\\\\''].join(\\\\''\\\\'');function a(){if(!window.open([f,p].join(\\\\''\\\\''),\\\\''mb\\\\'',[\\\\''toolbar=0,status=0,resizable=1,width=620,height=450,left=\\\\'',(s.width-620)/2,\\\\'',top=\\\\'',(s.height-450)/2].join(\\\\''\\\\'')))u.href=[f,p].join(\\\\''\\\\'');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));\\\\\"><img src=\\\\\"/image/xina.gif\\\\\" width=\\\\\"24\\\\\" height=\\\\\"24\\\\\" /></a></div>\r\n<div class=\\\\\"tde_weibo\\\\\"><a href=\\\\\"javascript:void((function(s,d,e){if(/renren.com/.test(d.location))return;var f=\\\\''http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=\\\\'',u=d.location,l=d.title,p=[e(u),e(l)].join(\\\\''\\\\'');function a(){if(!window.open([f,p].join(\\\\''\\\\''),\\\\''xnshare\\\\'',[\\\\''toolbar=0,status=0,resizable=1,width=626,height=436,left=\\\\'',(s.width-626)/2,\\\\'',top=\\\\'',(s.height-436)/2].join(\\\\''\\\\'')))u.href=[f,p].join(\\\\''\\\\'');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();})(screen,document,encodeURIComponent));\\\\\"><img src=\\\\\"/image/kj.gif\\\\\" width=\\\\\"24\\\\\" height=\\\\\"24\\\\\" /></a></div>\r\n \r\n<div class=\\\\\"so\\\\\">\r\n<form action=\\\\\"/e/search/index.php\\\\\" method=\\\\\"post\\\\\" >\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"show\\\\\" value=\\\\\"title\\\\\" />\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\" />\r\n<div class=\\\\\"souk\\\\\">\r\n<input type=\\\\\"text\\\\\" class=\\\\\"search_box\\\\\" id=\\\\\"keyboard\\\\\" name=\\\\\"keyboard\\\\\"   value=\\\\\"游戏\\\\\" onfocus=\\\\\"if(this.value==\\\\''ufo\\\\''){this.value=\\\\''\\\\'';this.style.color=\\\\''#727272\\\\''}\\\\\" onblur=\\\\\"if(this.value==\\\\''\\\\''){this.value=\\\\''ufo\\\\'';this.style.color=\\\\''#727272\\\\''}\\\\\"/>\r\n<input name=\\\\\"\\\\\" type=\\\\\"submit\\\\\" class=\\\\\"soso\\\\\" value=\\\\''\\\\''/>\r\n</div>\r\n</form>\r\n</div>\r\n<div class=\\\\\"denlu\\\\\" id=\\\\''menu_login\\\\''>\r\n<a href=\\\\\"/e/search/result/?searchid=3\\\\\">日本</a>\r\n<a href=\\\\\"/e/search/result/?searchid=4\\\\\">游戏</a>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n[!--temp.dd_导航--] \r\n<div class=\\\\\"content\\\\\">\r\n<div class=\\\\\"left\\\\\">\r\n<div class=\\\\\"left_title\\\\\">\r\n<div class=\\\\\"left_l\\\\\" style=\\\\\"padding-left:15px;\\\\\">搜索结果</div>\r\n</div>\r\n \r\n [!--empirenews.listtemp--]\r\n<ul>\r\n<!--list.var1-->\r\n<!--list.var2-->\r\n<!--list.var3-->\r\n<!--list.var4-->\r\n<!--list.var5-->\r\n<!--list.var6-->\r\n</ul>\r\n<div class=\\\\\"left_xt\\\\\"></div>\r\n[!--empirenews.listtemp--]\r\n\r\n \r\n\r\n \r\n<div class=\\\\\"epages\\\\\">[!--show.page--]</div>\r\n</div>\r\n \r\n<div class=\\\\\"right\\\\\">\r\n\r\n<div class=\\\\\"right_gg\\\\\">\r\n<img src=\\\\\"/image/ad04.jpg\\\\\"/>\r\n</div>\r\n \r\n \r\n\r\n</div>\r\n<div style=\\\\\"clear:both;\\\\\"></div>\r\n</div>\r\n \r\n \r\n \r\n[!--temp.zz_底部--]\r\n</body>\r\n</html>\r\n\r\n','180','1','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--title--]\\\\\" target=\\\\\"_blank\\\\\">[!--title--]</a> <span>[!--newstime--]</span></li>','6','1','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>