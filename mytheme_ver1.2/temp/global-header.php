<header class="header">
  <div class="header__inner">
    <div class="header__logo"><a href="<?php echo home_url(); ?>"></a></div>
    <button class="toggle-btn js-toggle-btn"><span></span></button>
    <nav class="gnav js-toggle-contents">
      <ul class="gnav-link ft-en">
        <li class="gnav-link__item"><a href="<?php echo home_url(); ?>">HOME</a></li>
        <li class="gnav-link__item"><a href="<?php echo home_url('/works'); ?>">WORKS</a></li>
        <li class="gnav-link__item"><a href="<?php if ( is_front_page() || is_home() ) { echo '#about'; } else { echo home_url('#about'); } ?>">ABOUT</a></li>
        <li class="gnav-link__item"><a href="<?php echo home_url('/blog'); ?>">BLOG</a></li>
        <li class="gnav-link__item"><a href="https://github.com/onyaga" target="_blank">GitHub</a></li>
        <li class="gnav-link__item"><a href="https://www.instagram.com/htdnom/" target="_blank">Instagram</a></li>
      </ul>
      <!-- /.gnav-link -->
    </nav>
  </div>
</header>
<!-- /.header -->