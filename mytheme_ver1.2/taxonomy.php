<?php
  $query_object = get_queried_object();
  $taxonomy_slug = $query_object->taxonomy;
  $filename = get_stylesheet_directory().'/taxonomy/tax-'.$taxonomy_slug.'.php';

  if ( file_exists($filename) ) {
    get_template_part( 'taxonomy/tax-'.$taxonomy_slug);
  } else {
    get_template_part('taxonomy/tax-default');
  }
?>
