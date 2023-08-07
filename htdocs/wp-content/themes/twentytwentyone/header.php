<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8MLD0Z0N3G"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-8MLD0Z0N3G');
  </script>
  <!-- Google Tag Manager-->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P36PRNS');
  </script>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MDQRW34D');
  </script>
  <!-- End Google Tag Manager -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="content-script-type" content="text/javascript">
  <meta http-equiv="content-script-type" content="text/css">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,viewport-fit=cover">
  <title>メディア掲載情報 | グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム</title>
  <meta name="description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。">
  <meta name="keywords" content="">
  <!-- OGs-->
  <meta property="og:site_name" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）" />
  <meta property="og:title" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）" />
  <meta property="og:description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://goodlifegym.jp/undefined" />
  <meta property="og:image" content="https://goodlifegym.jp/ogimg.png" />
  <!-- /OGs-->
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css" media="all" />
  <script src="https://sdk.form.run/js/v2/formrun.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <link href="/common/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="/common/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/common/js/slick.min.js" type="text/javascript"></script>
  <script src="/common/js/jquery.colorbox-min.js" type="text/javascript"></script>
  <script src="/common/js/common.js?2022-3" type="text/javascript"></script>
</head>

<body class="pageStores">
  <?php wp_body_open(); ?>
  <div class="l-wrapper">
    <?php get_template_part('template-parts/header/site-header'); ?>