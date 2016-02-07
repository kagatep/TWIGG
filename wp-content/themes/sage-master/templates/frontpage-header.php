    <header>

      <img src="/wp-content/themes/sage-master/assets/images/hamburger.gif" class="hamburger desktopHide">
      <div class="headerWrap">
        <div class="headerBg"></div>
        <?php if(is_home() || is_front_page()): ?>
          <a href="#" class="js-backToTop">
        <?php else: ?>
          <a href="<?= esc_url(home_url('/')); ?>">
        <?php endif;  ?>
        <!--<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
        <img class="logo" src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png"></a>

        <div class="content">
          <div class="left">
            <img src="/wp-content/themes/sage-master/assets/images/hamburger.gif" class="hamburger">
            <h2>Creating a <span>damsel-free</span> world one article at a time.</h2>
          </div>
        </div>

        <div class="icons">
          <div id="social-menu">
            <a href="https://www.facebook.com/twigghowto" target="_blank" class="icon-facebook-rounded"></a>
            <a href="https://twitter.com/TWIGGHOWTO" target="_blank" class="icon-twitter"></a>
            <a href="https://www.youtube.com/channel/UCyjqwZ8HbZae5ApdZfxdL8w" target="_blank" class="icon-youtube"></a>
            <a href="https://www.linkedin.com/company/the-winging-it-girls'-guide" target="_blank" class="icon-linkedin-rounded"></a>
            <a href="https://www.pinterest.com/twigghowto/" target="_blank" class="icon-pinterest-rounded"></a>
            <a href="http://instagram.com/twigghowto/" target="_blank" class="icon-instagram"></a>
            <div class="searchBar">
              <?php get_search_form(); ?>
            </div>
            <a href="#" class="fa fa-search searchIcon"></a>
          </div>
        </div>

      </div>
      <?php get_template_part('templates/slider'); ?>
      
      <nav role="navigation" class="desktopNav mobileHide mainNav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primaryNav']);
        endif;
        ?>

        <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondaryNav']);
        endif;
        ?>
      </nav>

      <div class="headerDropdown">
        <nav role="navigation" class="mainNav">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primaryNav']);
          endif;
          ?>

          <?php
          if (has_nav_menu('secondary_navigation')) :
            wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondaryNav']);
          endif;
          ?>
        </nav>
      </div>

  </header>