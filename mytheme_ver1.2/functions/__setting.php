<?php

function setup() {
  // 各種機能サポート
  add_theme_support('nav-menus');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ));
  add_theme_support('custom-logo', array(
    'width' => 250,
    'height' => 250,
    'flex-width' => true,
  ));
  add_theme_support('customize-selective-refresh-widgets');

  // wp_head関数の出力データ削除
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head','rest_output_link_wp_head');
}
add_action('after_setup_theme', 'setup');

// 画像サイズ
function not_create_image($sizes){
  $sizes = array();  // 空にする
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');


/*
  管理画面メニューバー
-------------------------------*/
function remove_menus () {
  global $menu;
  //unset($menu[2]); // ダッシュボード
  unset($menu[4]); // メニューの線1
  //unset($menu[5]); // 投稿
  unset($menu[10]); // Movie
  unset($menu[15]); // リンク
  //unset($menu[20]); // ページ
  unset($menu[25]); // コメント
  unset($menu[59]); // メニューの線2
  //unset($menu[60]); // テーマ
  //unset($menu[65]); // プラグイン
  //unset($menu[70]); // プロフィール
  //unset($menu[75]); // ツール
  //unset($menu[80]); // 設定
  unset($menu[90]); // メニューの線3

  if( current_user_can('editor') ) {
    remove_menu_page('index.php'); //ダッシュボード
    remove_menu_page('edit.php'); //投稿メニュ
    remove_menu_page('upload.php'); //メディア
    remove_menu_page('edit.php?post_type=page'); //ページ追加
    remove_menu_page('edit-comments.php'); //コメントメニュー
    remove_menu_page('themes.php'); //外観メニュー
    remove_menu_page('plugins.php'); //プラグインメニュー
    remove_menu_page('tools.php'); //ツールメニュー
    remove_menu_page('options-general.php'); //設定メニュー
 }
}
add_action('admin_menu', 'remove_menus');


// title セパレート変更
function title_separate( $sep ) {
  return '|';
 }
 add_filter( 'document_title_separator', 'title_separate' );

// WP5.4でファビコンがデフォルトでついてしまうのを回避
add_action('do_faviconico', 'wp_favicon_remover');
function wp_favicon_remover(){
  exit;
}

// jQuery差し替え
function register_common_script(){
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_bloginfo('template_directory').'/assets/js/jquery-3.5.1.min.js');
}
add_action('wp_enqueue_scripts', 'register_common_script');
