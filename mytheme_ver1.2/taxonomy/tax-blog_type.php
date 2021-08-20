<?php get_header(); ?>

<?php
  $query_object = get_queried_object();
  $taxonomy_slug = $query_object->taxonomy;
?>

<main class="main">
  <section class="section blog">
    <div class="section__inner">
      <h1 class="blog__ttl lv1-heading ft-en">BLOG<span class="term"><?php echo $term; ?></span></h1>
      <?php
        $cnt = 0;
        $args = array(
          'posts_per_page' => -1,
          'post_type' => array('blog'),
          'post_status' => array('publish'),
          'tax_query' => array(
            array(
              'taxonomy' => $taxonomy_slug,
              'field' => 'slug',
              'terms' => $term
            ),
          ),
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()) :
      ?>
      <ul class="blog-list">
        <?php while($the_query->have_posts()) : $the_query->the_post(); $cnt++; ?>
        <?php $terms = get_the_terms($post->ID, 'blog_type'); ?>
        <li class="blog-list__item">
          <a href="<?php the_permalink(); ?>">
            <h3 class="lv3-heading"><?php the_title(); ?></h3>
            <div class="blog-list__info">
              <span class="date ft-en"><i class="las la-pen"></i></i><?php echo get_the_date('Y/m/d'); ?></span>
              <?php if($terms): ?>
              <span class="tag ft-en">
                <?php
                  foreach( $terms as $term ) {
                    echo '<span><i class="las la-hashtag"></i>'.$term->name.'</span>';
                    //$term_link = get_term_link( $term );
                    //echo '<a href="'.esc_url( $term_link ).' class="tag">'.$term->name.'</a>';
                  }
                ?>
              </span>
              <?php endif; ?>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php if($cnt > 2): ?>
      <div class="btn ft-en"><a href="<?php echo home_url('/blog'); ?>">LEAD MORE</a></div>
      <?php endif; ?>
      <?php endif; wp_reset_postdata(); ?>
      <!-- /.blog-list -->
    </div>
  </section>
  <!-- /.section -->

  <?php get_template_part('temp/sidebar'); ?>

</main>
<!-- /.main -->


<?php get_footer();