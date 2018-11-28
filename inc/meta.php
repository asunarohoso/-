<?php
include_once('_config.php');
include_once('inc/per_file.php');
?>
<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">
  <meta name="keywords" content="広告代理店,東京都,千代田区,内神田,求人広告,会社概要,社長挨拶,企業理念,サービス,ウェブ,取扱媒体,お問い合わせ,求人,個人情報保護">
  <meta name="description" content="総合広告代理店、株式会社あすなろ報創は東京都千代田区内神田の広告代理店です。効果的な広告のご用命、ご相談は是非当社にお任せください。東京スポーツ、その他各新聞メディアや雑誌広告も取り扱っております。インターネット広告、ホームページの作成、リニューアル等や、ポスター、チラシの作成も承ります。">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <!-- 自動リンクOFF -->
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style_flame.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_<?=$file_name;?>.css">
  <link rel="stylesheet" href="css/responsive_<?=$file_name;?>.css">
  <?php if($browser == 'sp'){ ?>
  <link rel="stylesheet" href="css/style_flame_sp.css">
  <link rel="stylesheet" href="css/responsive_<?=$file_name;?>_sp.css">
  <?php } ?>
  <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
  <?=$meta;?>

  <title>東京神田の広告代理店あすなろ報創</title>

</head>

<body>
