<?php
/**
 * Get search html of ChinaSO by js
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
require './inc/js_common.php';

header("Content-Type: application/x-javascript; charset=utf-8");

$html  = '<div class="search">';
$html .=   '<p>&nbsp;</p>';
$html .=   '<form id="flpage" action="http://www.chinaso.com/search/pagesearch.htm" method="get" target="_blank">';
$html .=     '<input type="text" class="search_input2" id="q" name="q" value="" maxlength="40" autocomplete="off" autocorrect="off" autocapitalize="off"/>';
$html .=     '<input type="submit" class="search_btn2" value="中国搜索" />';
$html .=   '</form>';
$html .= '</div>';

doc_write($html);

/*----- END FILE: js_search.php -----*/