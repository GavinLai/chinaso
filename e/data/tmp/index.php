<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国搜游戏频道 - 做公正、权威的游戏媒体</title>
<meta name="keywords" content="游戏资讯,国搜游戏,中国搜索,中国搜,8558,8558游戏,8558游戏平台">
<meta name="description" content="国搜游戏是中国搜平台下的游戏频道，涉及游戏资讯，游戏平台相关推广等。">
<link href="/skin/style_2013/css/top.css" rel="stylesheet" type="text/css" />
<link href="/skin/style_2013/css/index.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"  />
<link rel="icon" href="/favicon.ico" type="image/x-icon"  />
<script src="/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/js/hijack.js" type="text/javascript"></script>
</head>
<body>
<div class="h">
	<div class="header">
		<div class="header_left"></div>
		<div class="header_right"><a href="javascript:void(0);" onclick="SetHome(this)">设为首页</a> <a href="javascript:void(0);" onclick="addfavorite()">加入收藏</a></div> 
	</div>
	<div class="top">
		<div class="logo"><a href="/"><img src="/image/logo.gif" width="250" height="38" /></a></div>
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
				<a href="/e/search/result/?searchid=<?=$bqr[id]?>"><?=$bqr[title]?></a>
				<?php
}
}
?>
			</div>
		</div>
	</div>
	
<!-- div.h闭合在导航模板 -->
<div class="menu">
	<a href="/">首页</a>
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where classid in(1,2,3,4,5,6,50,55) and showclass=0 order by myorder',0,24,0);
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
	<a href="http://www.8558.com/" target="_blank">游戏中心</a>
</div>

</div><!-- div.h -->
<div style="width:960px; height:100px; margin:0px auto; margin-top:10px;">
<!-- 广告位：广告960*90 -->
<script src="/d/js/acmsd/thea1.js"></script>
</div>
<div class="banner">

	<div class="ba_left">
	
		<div class="xbt">
			<ul>
			<?php $_i = 1; ?>
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,8,13,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<?php if($_i==1 or $_i==3){ ?>
			<li class="hl"><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,35,false)?></a></li>
			<?php }else{ ?>
			<li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=sub($bqr[title],0,60,false)?></a></li>
			<?php } $_i++; ?>
			<?php
}
}
?>
			<?php unset($_i); ?>			
			</ul>
		</div>
		
	</div><!-- div.ba_left -->
  
	<div class="ba_right" id="foccous" style="visibility:hidden;">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,5,13,1);
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
	 
	</div><!-- div.ba_right -->
	<div style="clear:both;"></div>
</div><!-- div.banner -->
<div class="content">
<div class="left">
<div class="cn">
<div class="cn_left">
<div class="cn_left_tit"><a href="/zixun/china/" target="_blank">更多&gt;&gt;</a><img src="/image/t_newschina.jpg" alt="国内新闻" /></div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(8,6,0,0);
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
<div class="cn_left_tit"><a href="/zixun/world/" target="_blank">更多&gt;&gt;</a><img src="/image/t_newsworld.jpg" alt="国际新闻" /></div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(9,6,0,0);
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
<div class="cn_left_tit"><a href="/pingce/" target="_blank">更多&gt;&gt;</a><img src="/image/t_gametest.jpg" alt="游戏评测" /></div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,6,0,0);
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
<div class="cnr_l">行业新闻</div>
<div class="cnr_right"><a href="/hangye/news/" target="_blank">更多&gt;&gt;</a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,1,0,1);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,3,0,0);
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
<div class="cnr_l">电子竞技</div>
<div class="cnr_right"><a href="/jingji/" target="_blank">更多&gt;&gt;</a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,1,0,1);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,3,0,0);
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
<div class="cnr_l">八卦周边</div>
<div class="cnr_right"><a href="/bagua/" target="_blank">更多&gt;&gt;</a></div>
</div>
<div class="tyue" style="border-bottom:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,1,0,1);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,3,0,0);
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
<div class="cntu_titile">人物访谈</div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(12,4,0,1);
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
<li id="one1" onmouseover="setTab('one',1,2)" class="hover" style="border-left:none;">专题报道</li>
<li id="one2" onmouseover="setTab('one',2,2)" style="border-right:none;">免费礼包</li>
</ul>
</div>
 
<div id="con_one_1" class="hover">
<div class="zlcn">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(54,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<p><a href="<?=$bqr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" width="286" height="70" border=0/></a></p>
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

<div id="con_one_2" style="display:none">
<div class="zlcn">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(46,1,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<p><a href="<?=$bqr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" width="286" height="70" border=0/></a></p>
<?php
}
}
?>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(46,6,0,0);
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
<div class="heiks">
	<div class="heiks_t">
		<div class="heiks_left">
			<div class="heiks_lto">
				<a href="/jingji/chuanyuehuoxian/" target="_blank" >穿越火线</a>
			</div>
			<div class="heiks_b">
				<div class="heiks_ble">
					<a href="/photo/list01/" target="_blank" >壁纸原画</a>
				</div>
				<div class="heiks_bri">
					<a href="http://www.8558.com/game-server_list.html?game_id=112" target="_blank" >烈焰</a>
				</div>
			</div>
		</div>
		<div class="heiks_right">
			<p class="heiks_rip"><a href="/video/" target="_blank" >游戏视频</a></p>
			<p class="heiks_rip2"><a href="http://www.8558.com/game-server_list.html?game_id=140" target="_blank" >诸神世界</a></p>
		</div>
	</div>
	<div class="keib">
		<div class="keib_left">
			<p class="keib_left_p"><a href="http://www.8558.com/game-server_list.html?game_id=130" target="_blank" >绝代双骄</a></p>
			<p class="keib_left_p3"><a href="http://bbs.8558.com/" target="_blank" >游戏论坛</a></p>
		</div>
		<div class="keib_cn">
			<p class="keib_cn_p"><a href="/jingji/" target="_blank" >电子竞技</a></p>
			<p class="keib_cn_p2"><a href="/" target="_blank" >部落守卫战</a></p>
		</div>
		<div class="keib_right">
			<p class="keib_right_p"><a href="http://www.8558.com/game-server_list.html?game_id=144" target="_blank" >九天传</a></p>
			<p class="keib_right_p2"><a href="/bagua/" target="_blank" >游戏八卦</a></p>
		</div>
	</div>
</div>

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
<a href="" target="_blank"><img src="/img/ad02.jpg"/></a>
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
<div class="pic">
<div class="pic_title">
<div class="pic_l"><a href="video/" target="_blank">游戏视频</a></div>
<div class="pic_r"><a href="video/" target="_blank">更多&gt;&gt;</a></div>
</div>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(55,5,0,1);
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
<div class="bq">Copyright @ 2014 <a href="http://www.8558.com/" target="_blank">8558.com</a>. All Rights Reserved. <a href="http://www.8558.com/" target="_blank">8558游戏平台</a> 版权所有</div>
<div class="bq">京ICP备11002130号-3</div>
</div>
<script src="/js/common.js" type="text/javascript"></script>
<script src="/js/jquery.slider.js" type="text/javascript"></script>
<script src="/js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
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
</body>
</html>