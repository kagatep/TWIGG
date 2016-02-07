<?php get_template_part('templates/categorypage', 'header'); ?>

<header class="categoryBanner banner" role="banner">


  <div class="container" >
    <!--<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
    <img src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png">
    
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primaryNav']);
      endif;
      ?>
    </nav>

    <nav role="secondaryNavigation">
      <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondaryNav']);
      endif;
      ?>
    </nav>
  </div>
</header>


<header>
    <img src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png">
    
    <ul class="categories">
      <li><a href="/">Auto</a></li>
      <li><a href="/">LAW</a></li>
      <li><a href="/">Travel</a></li>
      <li><a href="/">Personal Pr</a></li>
      <li><a href="/">School & Career</a></li>
      <li><a href="/">Household</a></li>
      <li><a href="/">Health</a></li>
      <li><a href="/">Technology</a></li>
      <li><a href="/">Misc</a></li>
    </ul>
  </header>

  <div class="categoryBanner">
    <h2><?php single_cat_title(); ?></h2>
  </div>
