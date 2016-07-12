<?php
/*
Template Name: Become a Contributor Full Page
*/
?>

<div class="becomeContributorForm full col-xs-12 col-sm-12 col-md-8 col-md-offset-2" ng-controller="becomeContributorCtrl">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	<?php endif; ?>

	<div class="contributorFormWrapper">
		<div class="bcForm">
		<?php echo do_shortcode( '[contact-form-7 id="3809" title="Become a Contributor_copy"]' ); ?>
		</div>
		<div class="successMessage formStep mobileHide hide" data-step="4">
			<h4>Here's what happens next:</h4>
			<p><span class="number">1.</span> We'll get back to you within one week to finalize your article idea.</p>
			<p><span class="number">2.</span> You'll submit a rough draft, and one of our TWIGG How-To editors will give some notes.</p>
			<p><span class="number">3.</span> You'll make any final edits and submit any original pictures or videos.</p>
			<p><span class="number">4.</span> We'll finalize the article and publish you on twigghowto.com</p>
			<p>Want to get even <strong>MORE</strong> involved? Send an email to <a href="mailto:twigghowto@gmail.com">twigghowto@gmail.com</a>.</p>
		</div>	
	</div>
</div>