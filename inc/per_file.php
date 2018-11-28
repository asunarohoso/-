<?php

// index
if($file_name == 'index'){
$meta = <<<EOT
<link rel="stylesheet" type="text/css" href="js/zoomslider/zoomslider.css" />
EOT;
$footer = <<<EOT
<script type="text/javascript" src="js/zoomslider/jquery.zoomslider.min.js"></script>
EOT;
}

// works
if($file_name == 'works'){
$meta = <<<EOT
EOT;
$footer = <<<EOT
EOT;
}

// media
if($file_name == 'media'){
  $meta = <<<EOT
EOT;
  $footer = <<<EOT
EOT;
}

// contact
if($file_name == 'contact'){
  $meta = <<<EOT
EOT;
  $footer = <<<EOT
EOT;
}

// contact
if($file_name == 'company'){
  $meta = <<<EOT
EOT;
  $footer = <<<EOT
EOT;
}

?>
