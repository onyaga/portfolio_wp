<?php
  $cp_slug = esc_html(get_post_type_object(get_post_type())->name);
  $filename = get_stylesheet_directory().'/archive/archive-'.$cp_slug.'.php';

  if ( file_exists($filename) ) {
    get_template_part( 'archive/archive-'.$cp_slug);
  } else {
    get_template_part('archive/archive-default');
  }
?>
