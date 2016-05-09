<?php
/*
Template Name: Full Page with subfooter
*/
?>

<div class="container">
	<div class="row">
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
<?php endif; ?>
</div>
</div>

<div class="subscribe container">
	<div class="row">
	<?php get_template_part('templates/subfooter'); ?>
	</div>
</div>

