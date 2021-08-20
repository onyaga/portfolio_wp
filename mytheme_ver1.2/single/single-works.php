<?php get_header(); ?>

<?php $terms = get_the_terms($post->ID,'work_type'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="main">
  <section class="section works">
    <div class="section__inner">
      <div class="work-list single">
        <div class="work-list__item">
          <div class="work-list__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
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
        </div>
      </div>
      <!-- /.work-list -->
    </div>
  </section>
  <!-- /.section -->

  <section class="section works-contents">
    <div class="section__inner">
      <div class="works-contents__desc wp__editor">
        <?php the_content(); ?>
      </div>
      <div class="btn ft-en"><a href="<?php echo home_url(); ?>">HOME</a></div>
    </div>
  </section>
  <!-- /.section -->

  <?php get_template_part('temp/sidebar'); ?>

</main>
<!-- /.main -->
<?php endwhile; endif; ?>

<?php get_footer();