<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
$file_name  = $path_parts['filename'];
if(empty($path_parts['extension'])){
  $file_name = 'index';
}
$ua = $_SERVER['HTTP_USER_AGENT'];
echo "<!--".$ua."-->";

$browser = ((strpos($ua,'iPhone')!==false) || (strpos($ua,'Android')!==false) && (strpos($ua,'Mobile')!==false) || (strpos($ua, 'Windows Phone') !== false));
if ($browser == true){
  $browser = 'sp';
}
?>
