<?php
/*
  カスタム投稿（ works ）
-------------------------------*/
function works_post() {
  $slug = 'works';
  $labels = array(
    'menu_name'          => $slug,
    'all_items'          => '投稿一覧',
    'name'               => '投稿一覧',
    'singular_name'      => 'works',
    'add_new'            => '新規追加',
    'add_new_item'       => '新規投稿追加',
    'edit_item'          => '投稿編集',
    'new_item'           => '新規投稿',
    'view_item'          => '投稿を表示',
    'search_items'       => '投稿検索',
    'not_found'          => '投稿が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に投稿はありません',
    'parent_item_colon'  => ''
  );
  $supports = array(
    'title', 'editor', 'thumbnail'
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => true,
    'menu_position'      => 5,
    'supports'           => $supports,
    'has_archive'        => true
  );
  register_post_type($slug, $args);
  
  $tax_name = 'work_type';
  $tax_args = array(
    'label' => 'カテゴリ',
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => true
  );
  register_taxonomy($tax_name, $slug, $tax_args);
}

add_action('init', 'works_post');

/*
  カスタム投稿（ blog ）
-------------------------------*/
function blog_post() {
  $slug = 'blog';
  $labels = array(
    'menu_name'          => $slug,
    'all_items'          => '投稿一覧',
    'name'               => '投稿一覧',
    'singular_name'      => 'works',
    'add_new'            => '新規追加',
    'add_new_item'       => '新規投稿追加',
    'edit_item'          => '投稿編集',
    'new_item'           => '新規投稿',
    'view_item'          => '投稿を表示',
    'search_items'       => '投稿検索',
    'not_found'          => '投稿が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に投稿はありません',
    'parent_item_colon'  => ''
  );
  $supports = array(
    'title', 'editor', 'thumbnail'
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => true,
    'menu_position'      => 5,
    'supports'           => $supports,
    'has_archive'        => true
  );
  register_post_type($slug, $args);
  
  $tax_name = 'blog_type';
  $tax_args = array(
    'label' => 'カテゴリ',
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => true
  );
  register_taxonomy($tax_name, $slug, $tax_args);
}

add_action('init', 'blog_post');