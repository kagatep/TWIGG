<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <!-- <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div> 
-->
  <div class="container noResults">
  	<div class="row">
  		 <div class="col-xs-12">
  		 	<h2 class="slabSerif centeredText">Sorry! No results were found.</h2>
			<p>Try your search again or <span class="accordionTrigger submitTrigger" data-opentab="submitrequest">submit a how-to request</u>.</p>
			  <div class="accordionTab" data-tab="submitrequest">
				
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
			  </div>
  		 </div>
  	</div>
  </div>
  
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
