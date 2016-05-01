<div class="sliderWrapper">

<div class="home-slider">
  <?php
	$args = array(
	    'post_type' => 'post', // get posts by category name
	    'numberposts'	=> -1, // all posts,
	    'meta_key'		=> 'featured_post',
		'meta_value'	=> 'Yes'
	);

	$the_query = new WP_Query( $args );
	?>

	<div class="slide homeSlide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/thefword-poster.jpg');">
		</div>
		<div class="videoWrapper" style="top: 0; left: 0;">
            <video autoplay="autoplay" loop muted poster="/wp-content/themes/sage-master/assets/images/thefword-poster.jpg">
              <source src="/wp-content/themes/sage-master/assets/videos/TheFWord_Final.mp4" type="video/mp4">
            </video>
        </div>
        <div class="overlay">
			<a href="https://www.youtube.com/watch?v=_-xIi-54GdA" target="_blank"></a>
		</div>
        <div class="slide-info">
			<h1>Watch our video, "This Part of Me!"</h1>
			<!-- <p>Visit <a href="http://bit.ly/1SetC7p" target="_blank">fword.splashthat.com</a> to vote for our video, "This Part of Me" today!</p> -->
		</div>
	</div>

	<div class="slide homeSlide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/home.jpg');">
		</div>
		<div class="overlay">
			<a href="/about-us"></a>
		</div>
		<div class="slide-info">
			<h1>Welcome to The Winging It Girls' Guide!</h1>
			
			<!--<p>Check back every <b>Monday</b> and <b>Friday</b> for new articles!</p>-->
		</div>
	</div>
	

	<!--<?php
		$args = array( 'numberposts' => '2' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent )
		{
			?>
	<div class="slide">
		<div class="slide-image" style="background-image: url('http://staging.twigghowto.com/wp-content/uploads/2015/07/flowers131.jpg');">
		</div>
		<div class="overlay">
			<?php echo get_permalink($recent["ID"]) ?>
		</div>
		<div class="slide-info">
			<h2><?php echo $recent["post_title"] ?></h2>
			<p>Giving flowers on special occasions has been around for hundreds of years. Click here to read more.</p>
		</div>
	</div>

		<?php
		}
	?> -->

	<?php if( $the_query->have_posts() ): ?>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div class="slide">
		<div class="slide-image" style="background-image: url('<?php the_field('featured_image'); ?>');">
		</div>
		<div class="overlay">
			<a href="#"></a>
		</div>
		<div class="slide-info">
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('featured_description'); ?></p>	
		</div>
	</div>
	<?php endwhile; ?>

	<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	
	<div class="slide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/group-photo.jpg');">
		</div>
		<div class="overlay">
			<a href="http://www.twigghowto.com/welcome-to-the-winging-it-girls-guide-2/"></a>
		</div>
		<div class="slide-info">
			<h2>How To: Get Started on TWIGGHOWTO.com!</h2>
			<p>Click here for a quick guide into everything TWIGG How-To!</p>
		</div>
	</div>
	
</div>

<div class="arrowNav prev mobileHide"></div>
<div class="arrowNav next mobileHide"></div>


</div>
