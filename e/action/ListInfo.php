<?php
require('../class/connect.php');
require('../class/db_sql.php');
require('../class/functions.php');
require('../class/t_functions.php');
require('../data/dbcache/class.php');
require LoadLang('pub/fun.php');
$link=db_connect();
$empire=new mysqlquery();
eCheckCloseMods('fieldand');//关闭模块
$tbname='';
$add='';
$addorder='newstime desc';
$search='';
$GLOBALS['navclassid']=0;
$yhid=0;
$yhvar='qlist';
//模型ID
$mid=(int)$_GET['mid'];
if($mid)
{
	$tbname=$emod_r[$mid]['tbname'];
	if(empty($tbname))
	{
		printerror('ErrorUrl','',1);
	}
	$search.='&mid='.$mid;
	$yhid=$etable_r[$tbname][yhid];
}
$pagetitle=$public_r['sitename'];
$pagekey=$public_r['sitename'];
$pagedes=$public_r['sitename'];
$classimg=$public_r[newsurl].'e/data/images/notimg.gif';
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['infolist'];
$pageecms=1;
$pageclassid=0;
$have_class=1;
//栏目
$trueclassid=0;
$classid=$_GET['classid'];
if($classid)
{
	$classid=RepPostVar($classid);
	if(strstr($classid,','))//多栏目
	{
		$son_r=sys_ReturnMoreClass($classid,1);
		$trueclassid=$son_r[0];
		$add.=' and ('.$son_r[1].')';
	}
	else
	{
		$trueclassid=intval($classid);
		if($class_r[$trueclassid][islast])//终极栏目
		{
			$add.=" and classid='$trueclassid'";
			$have_class=0;
		}
		else
		{
			$add.=' and '.ReturnClass($class_r[$trueclassid][sonclass]);
		}
		$cr=$empire->fetch1("select classpagekey,intro,classimg,cgroupid from {$dbtbpre}enewsclass where classid='$trueclassid'");
		//权限
		if($cr['cgroupid'])
		{
			$mgroupid=(int)getcvar('mlgroupid');
			if(!strstr($cr[cgroupid],','.$mgroupid.','))
			{
				printerror('NotLevelToClass','history.go(-1)',1);
			}
		}
		$pagetitle=$class_r[$trueclassid]['classname'];
		$pagekey=$cr['classpagekey'];
		$pagedes=$cr['intro'];
		$classimg=$cr['classimg']?$cr['classimg']:$public_r[newsurl].'e/data/images/notimg.gif';
		$url=ReturnClassLink($trueclassid);
		$pageecms=0;
		$pageclassid=$trueclassid;
		$GLOBALS['navclassid']=$trueclassid;
	}
	if(empty($class_r[$trueclassid][tbname]))
	{
		printerror('ErrorUrl','',1);
	}
	if(empty($tbname))
	{
		$tbname=$class_r[$trueclassid][tbname];
		$mid=$class_r[$trueclassid][modid];
		$yhid=$class_r[$trueclassid][yhid];
	}
	if($class_r[$trueclassid][reorder])
	{
		$addorder=$class_r[$trueclassid][reorder];
	}
	$search.='&classid='.$classid;
}
//标题分类
$truettid=0;
$ttid=$_GET['ttid'];
if($ttid)
{
	$ttid=RepPostVar($ttid);
	if(strstr($ttid,','))//多标题分类
	{
		$son_r=sys_ReturnMoreTT($ttid);
		$truettid=$son_r[0];
		$add.=' and ('.$son_r[1].')';
	}
	else
	{
		$truettid=intval($ttid);
		$add.=" and ttid='$truettid'";
		if($pageecms==1)
		{
			$pagetitle=$class_tr[$truettid]['tname'];
			$pagekey=$class_tr[$truettid]['tname'];
			$pagedes=$class_tr[$truettid]['tname'];
			$classimg=$public_r[newsurl].'e/data/images/notimg.gif';
			$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$class_tr[$truettid]['tname'];
			$pageclassid=$truettid;
			$GLOBALS['navclassid']=$truettid;
		}
	}
	$ttmid=$class_tr[$truettid]['mid'];
	if(empty($ttmid))
	{
		printerror('ErrorUrl','',1);
	}
	if(empty($tbname))
	{
		$tbname=$emod_r[$ttmid]['tbname'];
		$mid=$ttmid;
		$yhid=$class_tr[$truettid][yhid];
	}
	$search.='&ttid='.$ttid;
}
if(empty($tbname)||InfoIsInTable($tbname))
{
	printerror('ErrorUrl','',1);
}
if($public_r['fieldandclosetb']&&stristr($public_r['fieldandclosetb'],','.$tbname.','))
{
	printerror('ErrorUrl','',1);
}
//头条
if($_GET['firsttitle'])
{
	$firsttitle=(int)$_GET['firsttitle'];
	if($firsttitle==10)
	{
		$add.=" and firsttitle>0";
	}
	else
	{
		$add.=" and firsttitle='".$firsttitle."'";
	}
	$search.='&firsttitle='.$firsttitle;
}
//头条
if($_GET['isgood'])
{
	$isgood=(int)$_GET['isgood'];
	if($isgood==10)
	{
		$add.=" and isgood>0";
	}
	else
	{
		$add.=" and isgood='".$isgood."'";
	}
	$search.='&isgood='.$isgood;
}
//时间
if($_GET['endtime'])
{
	$starttime=RepPostVar($_GET['starttime']);
	if(empty($starttime))
	{
		$starttime='0000-00-00';
	}
	$endtime=RepPostVar($_GET['endtime']);
	if(empty($endtime))
	{
		$endtime='0000-00-00';
	}
	if($endtime!='0000-00-00')
	{
		$add.=" and (newstime BETWEEN '".to_time($starttime." 00:00:00")."' and '".to_time($endtime." 23:59:59")."')";
		$search.='&starttime='.$starttime.'&endtime='.$endtime;
	}
}
//每页显示记录数
$line=(int)$_GET['line'];
if($line<1||$line>80)
{
	if($class_r[$trueclassid]['lencord'])
	{
		$line=$class_r[$trueclassid]['lencord'];
	}
	else
	{
		$line=intval($public_r['qlistinfonum']);
	}
}
if(empty($line))
{
	printerror('ErrorUrl','',1);
}
//列表模板
$tempid=(int)$_GET['tempid'];
if(empty($tempid))
{
	if($trueclassid)//栏目
	{
		$tempid=$class_r[$trueclassid]['dtlisttempid']?$class_r[$trueclassid]['dtlisttempid']:$class_r[$trueclassid]['listtempid'];
	}
}
else
{
	DtTempIsClose($tempid,'listtemp');
}
if(empty($tempid))
{
	printerror('ErrorUrl','',1);
}
$tempr=$empire->fetch1("select tempid,temptext,subnews,listvar,rownum,showdate,modid,subtitle,docode from ".GetTemptb("enewslisttemp")." where tempid='$tempid'");
if(empty($tempr[tempid]))
{
	printerror('ErrorUrl','',1);
}
$search.='&line='.$line.'&tempid='.$tempid;
if(empty($mid))
{
	$mid=$tempr['modid'];
}
//结合项
if(!empty($emod_r[$mid]['listandf'])&&$_GET['ph']==1)
{
	$andor=$_GET['andor']=='or'?'or':'and';
	$search.='&ph=1&andor='.$andor;
	$listandf='';
	$andr=explode(',',$emod_r[$mid]['listandf']);
	$count=count($andr)-1;
	for($i=1;$i<$count;$i++)
	{
		$andval=$_GET[$andr[$i]];
		if(!empty($andval))
		{
			$andval=RepPostVar2($andval);
			$doandor=empty($listandf)?'':' '.$andor.' ';
			if(strstr($andval,'__'))
			{
				$andbtr=explode('__',$andval);
				$andbtr[0]=(float)$andbtr[0];
				$andbtr[1]=(float)$andbtr[1];
				if($andbtr[0]&&$andbtr[1])
				{
					$listandf.=$doandor.$andr[$i]." BETWEEN '".$andbtr[0]."' and '".$andbtr[1]."'";
				}
			}
			elseif(empty($emod_r[$mid]['setandf']))
			{
				$listandf.=$doandor.$andr[$i]."='".$andval."'";
			}
			else
			{
				$listandf.=$doandor.$andr[$i]." like '%".$andval."%'";
			}
			$search.="&".$andr[$i]."=$andval";
		}
	}
	if($listandf)
	{
		$add.=' and ('.$listandf.')';
	}
}
//排序
$orderby=RepPostVar($_GET['orderby']);
$myorder=(int)$_GET['myorder'];
if($orderby)
{
	$orderr=ReturnDoOrderF($mid,$orderby,$myorder);
	$addorder=$orderr['returnorder'];
}
$search.='&orderby='.$orderby.'&myorder='.$myorder;
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$page_line=16;//每页显示链接数
$offset=$page*$line;//总偏移量
//系统模型
$ret_r=ReturnReplaceListF($mid);
//优化
$yhadd='';
if($yhid)
{
	$yhadd=ReturnYhSql($yhid,$yhvar);
}
//总数
$totalnum=(int)$_GET['totalnum'];
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}ecms_".$tbname.ReturnYhAndSql($yhadd,$add,1);
	$num=$empire->gettotal($totalquery);
}
else
{
	$num=$totalnum;
}
$search.='&totalnum='.$num;
//置顶
if($public_r['fieldandtop'])
{
	$addorder='istop desc,'.$addorder;
}
$query="select ".ReturnSqlListF($mid)." from {$dbtbpre}ecms_".$tbname.ReturnYhAndSql($yhadd,$add,1);
$query.=" order by ".$addorder." limit $offset,$line";
$sql=$empire->query($query);
//分页
$listpage=page1($num,$line,$page_line,$start,$page,$search);
//页面支持标签
if($public_r['dtcanbq'])
{
	$tempr[temptext]=DtNewsBq('list'.$tempid,$tempr[temptext],0);
}
else
{
	if($public_r['searchtempvar'])
	{
		$tempr[temptext]=ReplaceTempvar($tempr[temptext]);
	}
}
$listtemp=$tempr[temptext];
$rownum=$tempr[rownum];
if(empty($rownum))
{$rownum=1;}
$formatdate=$tempr[showdate];
$subnews=$tempr[subnews];
$subtitle=$tempr[subtitle];
$docode=$tempr[docode];
$modid=$tempr[modid];
$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tempr[listvar]);
//公共
$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
$listtemp=Class_ReplaceSvars($listtemp,$url,$pageclassid,$pagetitle,$pagekey,$pagedes,$classimg,$addr,$pageecms);
$listtemp=str_replace('[!--page.stats--]','',$listtemp);
$listtemp=str_replace('[!--show.page--]',$listpage,$listtemp);
$listtemp=str_replace('[!--show.listpage--]',$listpage,$listtemp);
$listtemp=str_replace('[!--list.pageno--]',$page+1,$listtemp);
//取得列表模板
$list_exp="[!--empirenews.listtemp--]";
$list_r=explode($list_exp,$listtemp);
$listtext=$list_r[1];
$no=$offset+1;
$changerow=1;
while($r=$empire->fetch($sql))
{
	//替换列表变量
	$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$have_class,$r,$ret_r,$docode);
	$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
	$changerow+=1;
	//超过行数
	if($changerow>$rownum)
	{
		$changerow=1;
		$string.=$listtext;
		$listtext=$list_r[1];
	}
	$no++;
}
//多余数据
if($changerow<=$rownum&&$listtext<>$list_r[1])
{
	$string.=$listtext;
}
$string=$list_r[0].$string.$list_r[2];
echo stripSlashes($string);
db_close();
$empire=null;
?>