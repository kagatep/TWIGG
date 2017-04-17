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
		<div class="description">
			<h3>Welcome to</h3>
			<h2>The Winging It Girls' Guide!</h2>
		</div>
		
			<!--<p>Check back every <b>Monday</b> and <b>Friday</b> for new articles!</p>-->
	</div>
	<div class="slide">
		<a href="/category/spanish">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/spanish.jpg'); background-position: center;">
		</div>
		<div class="description bottom-right">
			<h2>ESPAÑOL</h2>
			<h3>Artículos para capacitarte y ayudarte a tener éxito.</h3>
		</div>
		</a>
	</div>
	<div class="slide auto">
		<a href="/category/auto">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/auto.jpg');">
		</div>
		<div class="description">
			<h2>Auto</h2>
			<h3>Car troubles? We’ve got the tips you need to get back on the road.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/finances">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/finance.jpg');">
		</div>
		<div class="description">
			<h2>finance</h2>
			<h3>Learn to manage your money and be your most business savvy self.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/health">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/health.jpg');">
		</div>
		<div class="description bottom-left">
			<h2>Health</h2>
			<h3>Ways to keep yourself at your healthiest.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/household">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/home.jpg');">
		</div>
		<div class="description bottom-left">
			<h2>household</h2>
			<h3>Home improvement 101.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/law">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/law.jpg');">
		</div>
		<div class="description top-left">
			<h2>law</h2>
			<h3>Understanding basics of law, your rights, and politics.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/personal-pr">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/personal-PR.jpg');">
		</div>
		<div class="description">
			<h2>personal PR</h2>
			<h3>Advice on all of life’s unspoken rules and sticky situations.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/school">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/school_career.jpg');">
		</div>
		<div class="description bottom-left">
			<h2>school & career</h2>
			<h3>Tips for succeeding academically and beyond.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/tech">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/tech.jpg');">
		</div>
		<div class="description bottom-left">
			<h2>technology</h2>
			<h3>Keepin’ up with all the latest tips & tricks in technology.</h3>
		</div>
		</a>
	</div>
	<div class="slide">
		<a href="/category/travel">
		<div class="slide-image" style="background-image: url('/wp-content/themes/sage-master/assets/images/categories/travel.jpg');">
		</div>
		<div class="description">
			<h2>travel</h2>
			<h3>Guides to help you explore new places.</h3>
		</div>
		</a>
	</div>
	
</div>

<div class="arrowNav prev mobileHide"></div>
<div class="arrowNav next mobileHide"></div>


</div>
