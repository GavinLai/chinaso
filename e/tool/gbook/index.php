<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=12;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$bname?>-国搜游戏</title>
<meta name="keywords" content="<?=$bname?>,8558,8558游戏,8558游戏平台">
<meta name="description" content="<?=$bname?>">
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"  />
<link rel="icon" href="/favicon.ico" type="image/x-icon"  />
<script src="/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/js/hijack.js" type="text/javascript"></script>
<link href="/skin/style_2013/css/top.css" rel="stylesheet" type="text/css" />
<link href="/skin/style_2013/css/index.css" rel="stylesheet" type="text/css" />

</head>
<body>
[!--temp.dd_topbar--]
[!--temp.dd_列表内容页左侧栏--]
    <div class="right"><!--右边开始-->
    	<div>
        	<div class="right_com">
            <ul class="cy_coml">留言反馈</ul>
            <ul class="cy_comr">您当前的位置：<a href="http://www.hbclcg.com">首页</a> &gt;&gt; 留言反馈</ul>
            </div>
        	<div class="cyright">
            
            <div class="in_aboutright">
           		<ul class="in_topprdlist_t2">
		  <strong>螺旋喷嘴，脱硫除尘喷头，喷嘴喷头，涂装流水线，空气喷枪，泵浦&nbsp;东莞市南京喜顺搬家有限公司留言板</strong>：<strong>东莞恒大公司为您提供螺旋喷嘴，工业喷嘴，各种空气喷枪泵浦&nbsp;东莞市南京喜顺搬家有限公司</strong>是一家专业生产：<strong>喷雾设备</strong>、<strong>喷涂设备</strong>、<strong>五金配件</strong>、<strong>静电喷涂</strong>厂家直供各种喷嘴，各种空气喷枪泵浦
,我们不断挑战自己的创新能力，秉承诚信精神，在促进业务发展的同时，通过解决与我们业务有关的人士和社区所面临的艰巨挑战，造福于社会。
		</ul>
	      <form action="/e/enews/index.php" method="post" name="form1" id="form1">
		  <input name="enews" type="hidden" id="enews" value="AddGbook" />
		<dt class="inputfeeckback">留言主题：<input name="ZhuTi" type="text" size="56" /></dt>
		<dt class="inputfeeckback">联系邮箱：<input name="email" type="text" size="56" /></dt>
					<dt class="inputfeeckback">留言内容：<textarea name="lytext" cols="55" class="inputs"></textarea></dt>
		<dt class="inputfeeckback">姓&nbsp;&nbsp;&nbsp;&nbsp;名：<input name="name" size="8" type="text" class="input" maxlength="10"/>　验证码：<input id="yzm" size="6" name="yzm" type="text"  class="input" maxlength="10" /><img align="absmiddle" src="/e/ShowKey/?v=gbook"></dt>
        <dt class="inputfeeckback">手机号码：<input name="call" type="text" id="Mobile" size="15" /> <input class="vote_bnt" value="提 交" type="submit" /></dt>
	  </form>
    <div>没有留言</div>
		  <ul class="List_page"></ul>
            </div>
            
            </div>
        </div>
    </div><!--右边结束-->
</div>
[!--temp.dd_友情链接--]
<div class="bo">
<div class="bq"><a href="/" target="_blank">关于我们</a> - <a href="/" target="_blank">联系我们</a> - <a href="/" target="_blank">广告服务</a> - <a href="/" target="_blank">免责申明</a></div>
<div class="bq">Powered by <strong><a href="/" target="_blank">国搜游戏</a></strong>&nbsp; &copy; 2014</div>
<div class="bq">Copyright @ 2014 <a href="http://www.8558.com/" target="_blank">8558.com</a>. All Rights Reserved. <a href="http://www.8558.com/" target="_blank">8558游戏平台</a> 版权所有</div>
<div class="bq">京ICP备11002130号-3</div>
</div>
</body>
</html>

<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

<?
}
?>

<?php
db_close();
$empire=null;
?>