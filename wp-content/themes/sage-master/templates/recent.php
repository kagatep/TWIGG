<?php
/*
Template Name: Recent Posts
*/
?>
<?php get_header(); ?>
		<div class="container">
			<div class="indent">
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php wp_get_archives('type=postbypost&limit=20&format=custom'); ?>

				<?php endwhile; ?>
					
			</div>
		</div>
<?php get_footer(); ?>
