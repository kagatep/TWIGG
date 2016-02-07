<?php
	/*
	* Template name: Full Page
	*/
?>

	<?php if ( have_posts() ) : ?>


		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	<?php endif; ?>
