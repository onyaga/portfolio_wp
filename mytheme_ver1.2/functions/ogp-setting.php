<?php
/*
  OGP出力設定
-------------------------------*/
/*
function meta_ogp() {
  // 初期設定
  $ogp_image = get_template_directory_uri() .'/ogp.jpg';
  $twitter_site = '@Twitterアカウント名';
  $twitter_card = 'summary_large_image';
  $facebook_app_id = '';

  global $post;
  $ogp_title = '';
  $ogp_description = '';
  $ogp_url = '';
  $html = '';

  if (is_post_type_archive()) {
    $ogp_title = esc_html(get_post_type_object(get_post_type())->label) .' | '. get_bloginfo('name');
    $ogp_description = esc_html(get_post_type_object(get_post_type())->description);
    $ogp_url = get_post_type_archive_link(get_post_type());
  } elseif (is_singular()) {
    setup_postdata($post);
    $ogp_title = $post->post_title .' | '. get_bloginfo('name');
    $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
    $ogp_url = get_permalink();
    wp_reset_postdata();
  } elseif (is_front_page() || is_home()) {
    $ogp_title = get_bloginfo('name');
    $ogp_description = get_bloginfo('description');
    $ogp_url = home_url();
  }
  // og:type
  $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
  // og:image
  if (is_singular() && has_post_thumbnail()) {
    $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $ogp_image = $ps_thumb[0];
  }
  // OGP出力情報
  $html = '<!-- OGP -->' . "\n";
  $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
  $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
  $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
  $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
  $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
  $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
  $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
  $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
  $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

  if ($facebook_app_id != "") {
  $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
  }

  echo $html;
}
add_action('wp_head', 'meta_ogp');
*/