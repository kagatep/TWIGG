<?php
/*
Template Name: Become a Contributor Page
*/
?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

<?php endif; ?>


<div class="becomeContributorForm hide col-xs-12 col-sm-12 col-md-8 col-md-offset-2" 
ng-app="becomeContributorForm" ng-controller="becomeContributorCtrl">
	<p data-showstep="0">Start Over</p>
	<div class="nav col-xs-12 col-sm-1 col-md-1">
		<ul>
		    <li ng-repeat="n in stepLength()" data-step="{{n}}">{{n}}</li>
			<li>Success!</li>
		</ul>
	</div>
<div class="col-xs-12 col-sm-11 col-md-11 contributorFormWrapper">
	<?php echo do_shortcode( '[contact-form-7 id="2214" title="Become Contributor"]' ); ?>
	<div class="successMessage hide">
		<h3>thanks!</h3>
		<p><span class="number">2.</span> We'll get back to you within one week to finalize your article idea.</p>
		<p><span class="number">3.</span> You'll submit a rough draft, and one of our TWIGG How-To editors will give some notes.</p>
		<p><span class="number">4.</span> You'll make any final edits and submit any original pictures or videos.</p>
		<p><span class="number">5.</span> We'll finalize the article and publish you on twigghowto.com</p>
	</div>
<p class="prevStep" ng-click="prevStep()">prev</p>
<p class="nextStep" ng-click="nextStep()">next</p>
</div>
</div>