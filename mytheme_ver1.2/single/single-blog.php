<?php get_header(); ?>

<?php $terms = get_the_terms($post->ID,'blog_type'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="main">
  <article>
    <section class="section blog">
      <div class="ttl-label">
        <h1 class="lv3-heading"><?php the_title(); ?></h1>
        <div class="blog-list__info">
          <span class="date ft-en"><i class="las la-pen"></i></i><?php echo get_the_date('Y/m/d'); ?></span>
          <?php if($terms): ?>
          <span class="tag ft-en">
            <?php
              foreach( $terms as $term ) {
                $term_link = get_term_link( $term );
                echo '<a href="'.esc_url( $term_link ).'"><i class="las la-hashtag"></i>'.$term->name.'</a>';
              }
            ?>
          </span>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.ttl-label -->
      <div class="section__inner">
        <div class="blog-list single">
          <div class="blog-list__item">
            <div class="blog-list__contents wp__editor">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <!-- /.blog-list -->
        <div class="btn ft-en"><a href="<?php echo home_url(); ?>">HOME</a></div>
      </div>
    </section>
    <!-- /.section -->
  </article>
  
  <?php get_template_part('temp/sidebar'); ?>

</main>
<!-- /.main -->
<?php endwhile; endif; ?>

<?php get_footer();