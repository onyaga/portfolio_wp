<?php get_header(); ?>

<main class="main pg-main">
  <div class="aside-label">
    <div class="container">
      <h1 class="lv1-heading"><?php the_title(); ?></h1>
      <time class="wp__time">公開日：<?php the_time('Y-m-d');?>　最終更新日：<?php the_modified_date('Y-m-d') ?></time>
    </div>
  </div>
  <!-- /.aside-label -->

  <?php while (have_posts()): the_post(); ?>
  <div class="aside-contents">
    <div class="container">
      <div class="wp__editor">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <!-- /.aside-contents -->
  <?php endwhile; ?>

</main>
<!-- /.main -->

<?php get_footer();