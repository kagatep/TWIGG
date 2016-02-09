<div class="menuOverlay closedMenu">
	<nav role="navigation" class="mainNav">

  <div class="col-xs-12 mobileSearch"><?php get_template_part('templates/searchform'); ?></div>
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