<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--]-国搜游戏</title>
<meta name="keywords" content="[!--pagekey--]">
<meta name="description" content="[!--pagedes--]">
<link href="/skin/style_2013/css/top.css" rel="stylesheet" type="text/css" />
<link href="/skin/style_2013/css/list.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"  />
<link rel="icon" href="/favicon.ico" type="image/x-icon"  />
<script src="[!--news.url--]js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="[!--news.url--]js/hijack.js" type="text/javascript"></script>
</head>
 
<body>
<div class="h">
<div class="header">
<div class="header_left"></div>
<div class="header_right"><a href="javascript:void(0);" onclick="SetHome(this)">设为首页</a> <a href="javascript:void(0);" onclick="addfavorite()">加入收藏</a></div>
 
</div>
<div class="top">
<div class="logo"><a href="[!--news.url--]"><img src="/image/logo.gif" width="250" height="38" /></a></div>
<div class="tde">
<!--
<div class="tde_fxd">分享到：</div>
<div class="tde_weibo"><a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,title=d.title,p=['url=',e(u),'&title=',e(title),'&appkey=1449381461'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"><img src="/image/xina.gif" width="24" height="24" /></a></div>
<div class="tde_weibo"><a href="javascript:void((function(s,d,e){if(/renren.com/.test(d.location))return;var f='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=',u=d.location,l=d.title,p=[e(u),e(l)].join('');function a(){if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();})(screen,document,encodeURIComponent));"><img src="/image/kj.gif" width="24" height="24" /></a></div>
-->
<div class="so">
<form action="/e/search/index.php" method="post" >
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<div class="souk">
<input type="text" class="search_box" id="keyboard" name="keyboard"   value="游戏" onfocus="if(this.value=='游戏'){this.value='';this.style.color='#727272'}" onblur="if(this.value==''){this.value='游戏';this.style.color='#727272'}"/>
<input name="" type="submit" class="soso" value=''/>
</div>
</form>
</div>
<div class="denlu" id='menu_login'>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq( 'select distinct searchid as id,keyboard as title from [!db.pre!]enewssearch where iskey=0 order by onclick desc limit 2',2,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="[!--news.url--]e/search/result/?searchid=<?=$bqr[id]?>"><?=$bqr[title]?></a>
<?php
}
}
?>
</div>
</div>
</div>
<div class="menu2_bg">
<div class="menu">
<a href="[!--news.url--]">首页</a>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where classid in(1,2,3,4,5,6,50,55) and showclass=0 order by myorder',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>/" rel="<?=$bqr[classpath]?>"><?=$bqr[classname]?></a>
<?php
}
}
?> 
<a href="http://www.8558.com/" target="_blank">游戏中心</a>
</div>
</div>
<div class="menu2">
<!--
<div class="menu2_logo"><a href="/"><img src="/image/logo2.gif" width="149" height="28" /></a></div>
-->
<div class="menu2_wz">[!--newsnav--]</div>
<div class="menu2_so">
<form action="/e/search/index.php" method="post" >
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<input type="text" class="search_box2" id="keyboard" name="keyboard"   value="热门新闻搜索" onfocus="if(this.value=='热门新闻搜索'){this.value='';this.style.color='#727272'}" onblur="if(this.value==''){this.value='热门新闻搜索';this.style.color='#727272'}"/>
<input name="" type="submit" class="soso2" value=''/>
</form>
</div>
</div> 
<div class="content">
<div class="left">
<div class="left_title">
<div class="left_l" style="padding-left:15px;">[!--class.name--]</div>
</div>
 
 [!--empirenews.listtemp--]
<ul>
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
<!--list.var6-->
</ul>
<div class="left_xt"></div>
[!--empirenews.listtemp--]

<div class="epages">[!--show.page--]</div>
</div>
 
<div class="right">
<div class="news">
<div class="left_title">
<div class="left_l">游戏新闻</div>
<div class="left_r"><a href="[!--news.url--]zixun/" target="_blank">更多&gt;&gt;</a></div>
</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',5,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
<dt><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>"/></a></dt>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></dd>
</dl>
<?php
}
}
?>
</div>
<div class="right_gg">
<a href="" target="_blank"><img src="/image/ad04.jpg"/></a>
</div>
 
 
<div class="news2">
<div class="left_title">
<div class="left_l">游戏视频</div>
<div class="left_r"><a href="/video/" target='_blank'>更多&gt;&gt;</a></div>
</div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(55,4,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>"/><p><?=sub($bqr[title],0,20,false)?></p></a></li>
<?php
}
}
?>

</ul>
</div>
</div>
<div style="clear:both;"></div>
</div>

<div class="bo">
<div class="bq"><a href="[!--news.url--]" target="_blank">关于我们</a> - <a href="[!--news.url--]" target="_blank">联系我们</a> - <a href="[!--news.url--]" target="_blank">广告服务</a> - <a href="[!--news.url--]" target="_blank">免责申明</a></div>
<div class="bq">Powered by <strong><a href="[!--news.url--]" target="_blank">国搜游戏</a></strong>&nbsp; &copy; 2014</div>
<div class="bq">Copyright @ 2014 8558.com. All Rights Reserved. 8558游戏平台 版权所有</div>
<div class="bq">京ICP备11002130号-3</div>
</div>
</body>
</html>