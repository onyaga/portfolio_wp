<?php get_header(); ?>


<main class="main">
  <section class="section works">
    <div class="section__inner">
      <h1 class="works__ttl lv1-heading ft-en">WORKS</h1>
      <?php
        $args = array(
          'posts_per_page' => -1,
          'post_type' => array('works'),
          'post_status' => array('publish'),
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()) :
      ?>
      <ul class="work-list">
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php $terms = get_the_terms($post->ID,'work_type'); ?>
        <li class="work-list__item">
          <a href="<?php the_permalink(); ?>"><div class="work-list__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div></a>
          <div class="work-list__info">
            <span class="date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time></span>
            <span class="tag">
              <?php
                foreach( $terms as $term ) {
                  $term_link = get_term_link( $term );
                  echo '<a href="'.esc_url( $term_link ).'"><i class="las la-hashtag"></i>'.$term->name.'</a>';
                }
              ?>
            </span>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; wp_reset_postdata(); ?>
      <!-- /.work-list -->
    </div>
  </section>
  <!-- /.section -->

  <?php get_template_part('temp/sidebar'); ?>

</main>
<!-- /.main -->


<?php get_footer();