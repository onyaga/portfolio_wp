<?php get_header(); ?>


<main class="main">
  <div class="hero">
    <div class="hero__contents">
      <h1 class="hero__ttl lv1-heading"><span class="ttl-main ft-en">PORTFOLIO</span><span class="ttl-desc">web engineer / designer</span></h1>
    </div>
    <!-- /.hero__contents -->
  </div>

  <section class="section works" id="works">
    <div class="section__inner">
      <h2 class="works__ttl lv2-heading ft-en">WORKS</h2>
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
        <?php $terms = get_the_terms($post->ID, 'work_type'); ?>
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

  <section class="section blog" id="blog">
    <div class="section__inner">
      <h2 class="blog__ttl lv2-heading ft-en">BLOG</h2>
      <?php
        $cnt = 0;
        $args = array(
          'posts_per_page' => 2,
          'post_type' => array('blog'),
          'post_status' => array('publish'),
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
              <span class="date"><i class="las la-pen"></i></i><?php echo get_the_date('Y/m/d'); ?></span>
              <?php if($terms): ?>
              <span class="tag">
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

  <section class="section about" id="about">
    <div class="section__inner">
      <h2 class="about__ttl lv2-heading ft-en">ABOUT</h2>
      <div class="about__desc">
        <div class="txt">
          <p class="main">1988年生まれ。WEBデザイナー。<br>
          今までwebデザイン、UI、ディレクション、CMS（Wordpress）テーマ作成、js等、幅広く経験。<br>
          長く使ってもらいたい（育ててもらいたい）から、シンプルで、いつの時代も使いやすいウェブサイトを作るよう心がけています。全力よりも72%くらいの力で生きた方が上手くいく気がします。</p>
          <p class="sub">Born in 1988. Web designer.<br>
          I have extensive experience in web design, UI, direction, CMS (Wordpress) theme creation, js, etc.<br>
          I want to use it for a long time (I want it to grow), so I try to create a website that is simple and easy to use at all times. I feel that it is better to live with about 72% of the power than with full power.</p>
        </div>
      </div>
      <div class="personal-info">
        <div class="personal-info__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nagamatsu.png" alt=""></div>
        <div class="personal-info__desc txt">
          <p class="personal-info__name">NAGAMATSU NAOMI</p>
          <p> スキル：<br>
          Photoshop / Illustrator / XD / HTML5 / CSS3 / JavaScript / jQuery / Wordpress / gulp / sass / git...<br>
          好きなもの： <br>
          ネコ / 昭和歌謡 / 洋服 / シンプル / 整理整頓...
        </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /.section -->

  <?php get_template_part('temp/sidebar'); ?>


</main>
<!-- /.main -->


<?php get_footer();