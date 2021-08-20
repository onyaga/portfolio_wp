<aside clasS="aside sidemenu">
  <div class="section__inner">
    <nav>
      <ul class="sidemenu__link">
        <li class="ft-en"><a href="<?php echo home_url('/works'); ?>">WORKS</a></li>
        <li class="ft-en"><a href="<?php echo home_url('/blog'); ?>">BLOG</a></li>
        <li class="ft-en"><a href="<?php if ( is_front_page() || is_home() ) { echo '#about'; } else { echo home_url('#about'); } ?>">ABOUT</a></li>
      </ul>
    </nav>
  </div>
</aside>