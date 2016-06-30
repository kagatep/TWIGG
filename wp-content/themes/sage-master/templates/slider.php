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

	
	<div class="slide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/health.jpg');">
		</div>
		<div class="overlay">
			<a href="/health"></a>
		</div>
	</div>
	<div class="slide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/home.jpg');">
		</div>
		<div class="overlay">
			<a href="/health"></a>
		</div>
	</div>
	<div class="slide">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/travel.jpg');">
		</div>
		<div class="overlay">
			<a href="/health"></a>
		</div>
	</div>

	
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
