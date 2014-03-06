<?php
/**
 * Get all nav html of ChinaSO by js
 * 
 * @see http://www.chinaso.com/common/component/cms/all_nav/html/all_nav.html
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
require './inc/js_common.php';

header("Content-Type: application/x-javascript; charset=utf-8");

$html_raw =<<<HDOC
<div class="all_nav">
      <div class="all_nav_con">
        <div class="foot_nav_box1">
          <dl>
            <dt><strong>垂搜频道</strong></dt>
            <dd>
<a bk="1" href="http://news.chinaso.com/" target="_blank">新闻</a>
<a bk="1" href="http://politics.chinaso.com/" target="_blank">时政</a>
<a bk="1" href="http://local.chinaso.com/" target="_blank">地方</a>
<a bk="1" href="http://world.chinaso.com/" target="_blank">国际</a>
<a bk="1" href="http://finance.chinaso.com/" target="_blank">财经</a>
<a bk="1" href="http://mil.chinaso.com/" target="_blank">军事</a>
<a bk="1" href="http://sports.chinaso.com/" target="_blank">体育</a>
<a bk="1" href="http://nation.chinaso.com/" target="_blank">国情</a>
<a bk="1" href="http://theory.chinaso.com/" target="_blank">理论</a>
<a bk="1" href="http://social.chinaso.com/" target="_blank">社科</a>
<a bk="1" href="http://law.chinaso.com/" target="_blank">法规</a>
<a bk="1" href="http://house.chinaso.com/" target="_blank">房产</a>
<a bk="1" href="http://auto.chinaso.com/" target="_blank">汽车</a>
<a bk="1" href="http://shopping.chinaso.com" target="_blank">购物</a>
<a bk="1" href="http://food.chinaso.com/" target="_blank">食品</a>
<a bk="1" href="http://home.chinaso.com/" target="_blank">家居</a>
<a bk="1" href="http://icity.chinaso.com/" target="_blank">智慧城市</a>
            </dd>
          </dl>
        </div>
        <div class="foot_nav_box2">
          <dl>
            <dt>国情</dt>
            <dd><a href="http://nation.chinaso.com/zhengzhi.html" target="_blank">政治</a><a href="http://nation.chinaso.com/jingji.html" target="_blank">经济</a><a href="http://nation.chinaso.com/wenhua.html" target="_blank">文化</a><a href="http://nation.chinaso.com/sifa.html" target="_blank">司法</a><a href="http://nation.chinaso.com/guofang.html" target="_blank">国防</a><a href="http://nation.chinaso.com/waijiao.html" target="_blank">外交</a></dd>
          </dl>
        </div>
        <div class="foot_nav_box2">
          <dl>
            <dt>理论</dt>
            <dd><a href="http://theory.chinaso.com/theorysearch.htm?class1=010000000" target="_blank">马克思主义理论</a><a href="http://theory.chinaso.com/theorysearch.htm?class1=020000000" target="_blank">毛泽东思想</a><a href="http://theory.chinaso.com/theorysearch.htm?class1=030000000" target="_blank">中国特色社会主义</a><a href="http://theory.chinaso.com/theorysearch.htm?class1=001000000" target="_blank">党的建设</a></dd>
          </dl>
        </div>
        <div class="foot_nav_box2">
          <dl>
            <dt>社科</dt>
            <dd><a href="http://social.chinaso.com/shekeyaowen.html" target="_blank">要闻</a><a href="http://social.chinaso.com/redianjiedu.html" target="_blank">热点</a><a href="http://social.chinaso.com/shekejiangtang.html" target="_blank">讲堂</a><a href="http://social.chinaso.com/fenleixueke.html" target="_blank">学科</a><a href="http://social.chinaso.com/xueshujigou.html" target="_blank">机构</a><a href="http://social.chinaso.com/zhuanjiaku.html" target="_blank">专家库</a><a href="http://social.chinaso.com/shekekanwu.html" target="_blank">书刊</a><a href="http://social.chinaso.com/lunwenku.html" target="_blank">论文库</a></dd>
          </dl>
        </div>
        <div class="foot_nav_box2">
          <dl>
            <dt>时政</dt>
            <dd><a href="http://politics.chinaso.com/shizhengxinwen/zuixin.html" target="_blank">新闻</a><a href="http://politics.chinaso.com/shizhengjujiao.html" target="_blank">聚焦</a><a href="http://politics.chinaso.com/gaocengdongtai.html" target="_blank">高层</a><a href="http://politics.chinaso.com/shizhengxinwen/bwdt.html" target="_blank">部委</a><a href="http://politics.chinaso.com/renshirenmian.html" target="_blank">人事</a><a href="http://politics.chinaso.com/fanfu.html" target="_blank">反腐</a><a href="http://politics.chinaso.com/zhengcejiedu.html" target="_blank">解读</a><a href="http://politics.chinaso.com/xuexiguanche.html" target="_blank">学习</a></dd>
          </dl>
        </div>
        <div class="foot_nav_box2">
          <dl>
            <dt>房产</dt>
            <dd><a href="http://house.chinaso.com/beijing/xf.html" target="_blank">新房</a><a href="http://house.chinaso.com/beijing/esf.html" target="_blank">二手房</a><a href="http://house.chinaso.com/beijingxinfang/zx.html" target="_blank">楼讯</a><a href="http://house.chinaso.com/secondhandHouse/beijing?infotype=1&n=20&p=0&arrow=arrowup&areaArrow=areaArrowup" target="_blank">找房</a><a href="http://house.chinaso.com/searchRentHouse/beijing?infotype=1&n=20&p=0&arrow=arrowup" target="_blank">租房</a><a href="http://home.chinaso.com/index.html" target="_blank">家居</a><a href="http://house.chinaso.com/beijing/sydc.html" target="_blank">商业地产</a></dd>
          </dl>
        </div>    
      </div>
    </div>
HDOC;

doc_write($html_raw,true);
 
/*----- END FILE: js_allnav.php -----*/