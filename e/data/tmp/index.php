<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国搜游戏-国搜游戏</title>
<meta name="keywords" content="游戏资讯,国搜游戏,中国搜索,中国搜">
<meta name="description" content="国搜游戏是中国搜平台下的游戏频道，涉及游戏资讯，游戏平台相关推广等。">
<link href="/skin/style_2013/css/top.css" rel="stylesheet" type="text/css" />
<link href="/skin/style_2013/css/index.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/common.js" type="text/javascript"></script>
<script src="/js/jquery.slider.js" type="text/javascript"></script>
<script src="/js/jquery-1.4a2.min.js" type="text/javascript"></script>
<script src="/js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"  />
<link rel="icon" href="/favicon.ico" type="image/x-icon"  />
<script type="text/javascript"> 
$(function(){
$("#foccous").KinSlideshow({
moveStyle:"down",
intervalTime:5,
mouseEvent:"mouseover",
titleFont:{TitleFont_size:14,TitleFont_color:"#ffffff"}
});
})
</script>
</head>
<body>
<div class="h">
<div class="header">
<div class="header_left"><!--
<span><img src="/image/siji.gif" width="9" height="14" /></span>
<a href="#">手机探索</a>-->
<span><img src="/image/gx.gif" width="12" height="14" /></span>
<a href="/new/" id='hd' >最新更新</a>
</div>
<div class="header_right"><a href="javascript:void(0);" onclick="SetHome(this)">设为首页</a> <a href="javascript:void(0);" onclick="addfavorite()">加入收藏</a></div>
 
</div>
<div class="top">
<div class="logo"><a href="/"><img src="/image/logo.gif" width="250" height="38" /></a></div>
<div class="tde">
<div class="tde_fxd">分享到：</div>
<div class="tde_weibo"><a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,title=d.title,p=['url=',e(u),'&title=',e(title),'&appkey=1449381461'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"><img src="/image/xina.gif" width="24" height="24" /></a></div>
<div class="tde_weibo"><a href="javascript:void((function(s,d,e){if(/renren.com/.test(d.location))return;var f='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=',u=d.location,l=d.title,p=[e(u),e(l)].join('');function a(){if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();})(screen,document,encodeURIComponent));"><img src="/image/kj.gif" width="24" height="24" /></a></div>

<div class="so">
<form action="/e/search/index.php" method="post" >
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<div class="souk">
<input type="text" class="search_box" id="keyboard" name="keyboard"   value="游戏" onfocus="if(this.value=='ufo'){this.value='';this.style.color='#727272'}" onblur="if(this.value==''){this.value='ufo';this.style.color='#727272'}"/>
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
<a href="/e/search/result/?searchid=<?=$bqr[id]?>"><?=$bqr[title]?></a>
<?php
}
}
?>
</div>
</div>
</div>
<div class="menu">
<a href="/"  class="xuan">首页</a>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where classid in(1,2,3,4,5,6,7,50,55) and showclass=0 order by myorder',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>/"><?=$bqr[classname]?></a>
<?php
}
}
?> 

</div>
</div>
<div style="width:960px; height:100px; margin:0px auto; margin-top:10px;">
<!-- 广告位：广告960*90 -->
<img src="/img/ad01.jpg" width="960" height="90" />
</div>
<div class="banner">
<div class="ba_left">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?> 
<div class="xbt">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,4,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?>
 
<div style="clear:both;"></div>
</ul>
</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?>
 
<div class="xbt">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,2,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?> 
 
<div style="clear:both;"></div>
</ul>
</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?>
 
<div class="xbt">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,2,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?>
 
<div style="clear:both;"></div>
</ul>
</div>
</div>
 
 
<div class="ba_right" id="foccous" style="visibility:hidden;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,5,12,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" alt="<?=sub($bqr[title],0,30,false)?>" width="560" height="224" name="<?=sub($bqr[smalltext],0,120,false)?> " value="<?=$bqsr[titleurl]?>"></a>
<?php
}
}
?>
 
 
</div>
</div>
<div class="content">
<div class="left">
<div class="cn">
<div class="cn_left">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?> 
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?>
</ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?> 
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?>
</ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<h1><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></h1>
<?php
}
}
?> 
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?></ul>
</div>
<div class="cn_right">
<div class="cn_rtop"></div>
<div class="cn_rtit">
<div class="cnr_l">开服表</div>
<div class="cnr_right"><a href="rxfw/" target="_blank">更多>></a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(38,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
<dt><b><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></b></dt>
<span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" width="90" height="65" /></a></dd></span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank">	<?=sub($bqr[smalltext],0,46,false)?><span>[详细]</span></a></dd>
</dl>
<?php
}
}
?>

<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(38,3,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?>
</ul>
</div>
<div class="cn_rtop"></div>
<div class="cn_rtit">
<div class="cnr_l">小游戏</div>
<div class="cnr_right"><a href="fwjg/" target="_blank">更多>></a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(39,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
<dt><b><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></b></dt>
<span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" width="90" height="65" /></a></dd></span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank">	<?=sub($bqr[smalltext],0,46,false)?><span>[详细]</span></a></dd>
</dl>
<?php
}
}
?>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(39,3,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?>
</ul>
</div>
 
<div class="cn_rtop"></div>
<div class="cn_rtit">
<div class="cnr_l">玩家论坛</div>
<div class="cnr_right"><a href="fwlc/" target="_blank">更多>></a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(45,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
<dt><b><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></b></dt>
<span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" width="90" height="65" /></a></dd></span>
<dd><a href="<?=$bqsr[titleurl]?>" target="_blank">	<?=sub($bqr[smalltext],0,46,false)?><span>[详细]</span></a></dd>
</dl>
<?php
}
}
?>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(45,3,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,30,false)?></a></li>
<?php
}
}
?>
</ul>
</div>
</div>
</div>
 
<div class="cntu">
<div class="cntu_titile">游戏热图</div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(50,4,0,1);
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
<div class="right">
<div class="zhuanlan">
<div class="zhuanlan_t">
<ul>
<li id="one1" onmouseover="setTab('one',1,2)"class="hover" style="border-left:none;">UFO目击报告</li>
<li id="one2" onmouseover="setTab('one',2,2)" style="border-right:none;">游戏专题</li>
</ul>
</div>
<div id="con_one_1" class="hover">
<div class="zlcn">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(53,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<p><a><img src="<?=$bqr[titlepic]?>" width="286" height="70" border=0/></a></p>
<?php
}
}
?>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(53,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,20,false)?></a></li>
<?php
}
}
?>
 
</ul>
</div>
</div>
 
<div id="con_one_2" style="display:none">
<div class="zlcn">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(54,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<p><a><img src="<?=$bqr[titlepic]?>" width="286" height="70" border=0/></a></p>
<?php
}
}
?>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(54,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,20,false)?></a></li>
<?php
}
}
?>
 
</ul>
</div>
</div>
</div>
 
 
<div class="shuaxin">
<div class="cnr_l">猜你喜欢</div>
<div class="shuaxin_r"><a href="javascript:;" id='cai'><img src="image/shuaxin.gif" width="16" height="15" /></a></div>
</div>

<div class="heiks"><div class="heiks_t"><div class="heiks_left"><div class="heiks_lto"><a href="/" target="_blank" >天天飞车</a></div><div class="heiks_b"><div class="heiks_ble"><a href="/" target="_blank" >神魔</a></div><div class="heiks_bri"><a href="/" target="_blank" >君王2</a></div></div></div> <div class="heiks_right"><p class="heiks_rip"><a href="/" target="_blank" >疯狂猜图</a></p><p class="heiks_rip2"><a href="/" target="_blank" >全民飞机大战</a></p></div></div><div class="keib"><div class="keib_left"><p class="keib_left_p"><a href="/" target="_blank" >世界末日</a></p><p class="keib_left_p3"><a href="/" target="_blank" >保卫萝卜2</a></p></div><div class="keib_cn"><p class="keib_cn_p"><a href="/" target="_blank" >斗战神魔谱</a></p><p class="keib_cn_p2"><a href="/" target="_blank" >部落守卫战</a></p></div><div class="keib_right"><p class="keib_right_p"><a href="/" target="_blank" >乱斗堂</a></p><p class="keib_right_p2"><a href="/" target="_blank" >魔物狩猎者</a></p></div></div></div>
<div class="ph">
<div class="ph_title">
<ul>
<li id="ond1" onmouseover="setTab('ond',1,3)" style="border-left:none;" class="hover">点击排行</li>
<li id="ond2" onmouseover="setTab('ond',2,3)">热门排行</li>
<li id="ond3" onmouseover="setTab('ond',3,3)" style="border-right:none;">游戏排行</li>
</ul>
</div>
 
<div id="con_ond_1" class="hover">
<div class="ph_cn">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(news,8,3,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><span class="ph_span"><?=$bqno?></span><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?>
<div class="ph_xt"></div>
</ul>
</div>
</div>
<div id="con_ond_2" style="display:none" class="hover">
<div class="ph_cn">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(news,8,4,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><span class="ph_span"><?=$bqno?></span><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?>
<div class="ph_xt"></div>
</ul>
</div>
</div>
<div id="con_ond_3" style="display:none">
<div class="ph_cn">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,8,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><span class="ph_span"><?=$bqno?></span><a  href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,46,false)?></a></li>
<?php
}
}
?>
<div class="ph_xt"></div>
</ul>
</div>
</div>
</div>
</div>
<div style="clear:both;"></div>
</div>
 
<div class="egg">
<!-- 广告位：首页banner1 -->
<img src="/img/ad02.jpg"/>
</div>
 

<div style="clear:both;"></div>
 
</div>
<div class="pic">
<div class="pic_title">
<div class="pic_l"><a href="photo/" target="_blank">游戏图库</a></div>
<div class="pic_r"><a href="photo/" target="_blank">更多&gt;&gt;</a></div>
</div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(50,10,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>"/><p><?=sub($bqr[title],0,24,false)?></p></a></li>
<?php
}
}
?>
 
<div style="clear:both;"></div>
 
</ul>
</div>
<div class="bo">
<div class="bq"><a href="/" target="_blank">关于我们</a> - <a href="/" target="_blank">联系我们</a> - <a href="/" target="_blank">广告服务</a> - <a href="/" target="_blank">免责申明</a></div>
 
<div class="bq">Powered by <strong><a href="/" target="_blank">国搜游戏</a></strong>&nbsp; &copy; 2014</div>
<div class="bq">Copyright @ 2014 www.8558.com Inc. All Rights Reserved. 8558游戏平台 版权所有</div>
<div class="bq">京ICP备11002130号-3</div>
</div>
 
</body>
</html>