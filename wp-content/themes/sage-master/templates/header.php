<?php if (is_category() || is_page( 'stuff-we-love' ) || is_page( 'about-us' )): ?>
    <div class="categoryBanner">
        
        <?php if (is_category( 'videos' )): ?>
            <div class="videoWrapper">
                <video autoplay loop muted>
                  <source src="/wp-content/themes/sage-master/assets/videos/videos_category.mp4" type="video/mp4">
                  <source src="/wp-content/themes/sage-master/assets/videos/videos_category.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif;  ?>

        <h2><?php is_category() ? single_cat_title() : the_title(); ?></h2>
    </div>

<header class="categoryHeader banner" role="banner">
    <div class="headerWrap">
        <div class="headerBg"></div>
        <a href="<?= esc_url(home_url('/')); ?>">
            <img class="logo" src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png">
        </a>
        <nav role="navigation" class="desktopNav mobileHide categoryNav">
            <?php
            if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondaryNav']);
            endif;
            ?>
        </nav>
        <div class="hamburger desktopHide"><i class="fa fa-bars mobileMenu"></i></div>
    </div>

    <nav role="navigation" class="desktopNav mobileHide mainNav smallHeader">
        <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primaryNav']);
            endif;
        ?>
    </nav>

<?php else: ?>

<header>
    <div class="headerWrap">
        <div class="headerBg"></div>
        <?php if(is_home() || is_front_page()): ?>
            <a href="#" class="js-backToTop">
        <?php else: ?>
            <a href="<?= esc_url(home_url('/')); ?>">
        <?php endif;  ?>
    
        <!--<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
            <img class="logo" src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png">
        </a>
        <div class="hamburger desktopHide"><i class="fa fa-bars mobileMenu"></i></div>
        <div class="content">
            <div class="left">
                <div class="hamburger mobileHide"><i class="fa fa-bars desktopMenu"></i></div>
                <h2 class="subtitle">Creating a <span>damsel-free</span> world one article at a time.</h2>
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

    <?php if(is_home() || is_front_page()): ?>
        <?php get_template_part('templates/slider'); ?>
    <?php endif;  ?>

<div class="headerDropdown mobileHide">
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

<?php endif ?>
</header>