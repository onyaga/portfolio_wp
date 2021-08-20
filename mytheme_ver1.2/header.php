<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<?php get_template_part('temp/head-analytics'); ?>
<?php
  wp_head();
  $timestamp = time();
?>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?= $timestamp ?>" rel="stylesheet">
<?php
//IE読み込みscript
$ua = $_SERVER['HTTP_USER_AGENT'];
if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) : ?>
<!-- IE -->
<script type="text/javascript" src="<?php echo esc_url( get_theme_file_uri( '/assets/js/ofi.min.js' ) ); ?>"></script>
<script type="text/javascript" src="<?php echo esc_url( get_theme_file_uri( '/assets/js/picturefill.min.js' ) ); ?>"></script>
<?php endif; ?>
<style>
body { position: static!important; }
</style>
</head>


<body <?php body_class(); ?>>
<?php get_template_part('temp/body-analytics'); ?>


<?php get_template_part('temp/global-header'); ?>
