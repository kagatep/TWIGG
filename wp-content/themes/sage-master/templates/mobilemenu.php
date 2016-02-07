<div class="menuOverlay closedMenu">
	
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