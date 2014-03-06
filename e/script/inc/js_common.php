<?php
/**
 * js common functions
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
function doc_write($html, $clean = FALSE, $maxage = 0) {
  if ($clean) $html = clean_rawhtml($html);
  if ($maxage > 0) set_page_cache_header($maxage);
  echo "document.write('{$html}');";
  exit;
}

function clean_rawhtml($rawhtml) {
  if (''===$rawhtml) return '';
  
  $arr = explode("\n",$rawhtml);
  $html= '';
  foreach ($arr AS $line) {
    $html .= trim($line);
  }
  
  return $html;
}

function set_page_cache_header($maxage = 'default') {
  if ('default' === $maxage) {
    $maxage = 300;
  }
  	
  // See if the client has provided the required HTTP headers:
  $if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE']) : FALSE;
  $if_none_match     = isset($_SERVER['HTTP_IF_NONE_MATCH']) ? stripslashes($_SERVER['HTTP_IF_NONE_MATCH']) : FALSE;
  $etag = '"'. md5($if_modified_since) .'"';
  
  $now = isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : time();
  if ($if_modified_since!==FALSE &&  (strtotime($if_modified_since)+$maxage) < $now	// in cache time
    || $if_none_match!==FALSE &&  $if_none_match==$etag	// etag match
  ) {
    header('HTTP/1.1 304 Not Modified');
    // All 304 responses must send an etag if the 200 response for the same object contained an etag
    header('Etag: '.$etag);
    exit;
  }
  
  // Set default values:
  $last_modified  = gmdate('D, d M Y H:i:s', $now).' GMT';
  $etag = '"'. md5($last_modified) .'"';
  
  // Send appropriate response:
  header('Last-Modified: '.$last_modified);
  header('ETag: '.$etag);
   
  // The following headers force validation of cache:
  header("Expires: Sun, 19 Nov 1978 05:00:00 GMT");
  header("Cache-Control: must-revalidate");
}
 
/*----- END FILE: js_common.php -----*/