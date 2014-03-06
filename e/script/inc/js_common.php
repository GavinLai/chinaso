<?php
/**
 * js common functions
 *
 * @author Gavin<laigw.vip@gmail.com>
 */
function doc_write($html,$clean = FALSE) {
  if ($clean) $html = clean_rawhtml($html);
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
 
/*----- END FILE: js_common.php -----*/