<?php
/*
Template Name: Default Template with subfooter
*/
?>

<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('templates/subfooter'); ?>