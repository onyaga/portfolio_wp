<?php
  $pg_slug = $post->post_name;
  $filename = get_stylesheet_directory().'/pages/page-'.$pg_slug.'.php';

  if ( file_exists($filename) ) {
    get_template_part( 'pages/page-'.$pg_slug);
  } else {
    get_template_part('pages/page-default');
  }
?>

<?php get_header(); ?>