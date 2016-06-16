<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
  		<div class="col-md-10 col-md-offset-1">
  		<div class="col-xs-12 col-sm-3 col-md-3 leftBorder">
  			<img class="logo" src="http://www.twigghowto.com/wp-content/uploads/2015/03/twigg-logo.png">
		    <?php dynamic_sidebar('sidebar-footer'); ?><br />
		    <a href="http://www.gofundme.com/fampok" class="donateCta" target="_blank"><img src="http://www.twigghowto.com/wp-content/uploads/2015/02/donate.png"></a>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 last">
    		<?php get_template_part('templates/social'); ?>
    		<?php get_search_form(); ?>
    		
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
		    
		    <?php
            if (has_nav_menu('footer_navigation')) :
            	wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footerNav mainLinks']);
            endif;
        	?>
		    <ul>
		    	<li><a href="/terms-and-conditions">Terms and Conditions</a></li>
		    	<li><a href="/contactus">Contact Us</a></li>
		    </ul>
		</div>
		<!-- <div class="col-xs-12 col-sm-2 col-md-2">
		    <ul>
		    	
		    	<li><a href="/contact-us">Contact Us</a></li>
		    	<li><a href="/terms-and-conditions">Terms and Conditions</a></li>
		    </ul>
		</div> -->
		</div>
    </div>
    <p class="copyright">© Copyright TWIGG How-To <?php echo date('Y'); ?></p>
  </div>
</footer>
