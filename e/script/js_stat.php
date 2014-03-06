<?php
/**
 * Get statistics js
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
require './inc/js_common.php';

set_page_cache_header(86400);
header("Content-Type: application/x-javascript; charset=utf-8");

$html_raw =<<<HDOC
/*!statistics js*/
HDOC;

echo $html_raw;
 
/*----- END FILE: js_stat.php -----*/