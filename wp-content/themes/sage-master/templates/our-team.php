<?php
/*
Template Name: Display Authors
*/

// Get all users order by amount of posts
//$allUsers = get_users('orderby=post_count&order=DESC');
$allUsers = get_users('orderby=display_name');

$users = array();
$admins = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $admin)
{
	if(in_array( 'administrator', $admin->roles ))
	{
		$admins[] = $admin;
	}
}

foreach($allUsers as $currentUser)
{
	if(!in_array( 'administrator', $currentUser->roles ) && !in_array( 'subscriber', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}

?>

	<?php if ( have_posts() ) : ?>


		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	<?php endif; ?>


<div class="accordionTab" data-tab="ourteam">
<div class="admins col-xs-12 col-sm-12 col-md-8 col-md-offset-2">	
	<?php

	foreach($admins as $admin)
	{
		?>
		<?php $metaImg = get_user_meta($admin->ID, 'user_img', true); ?>

		<?php if ( $metaImg ) : ?>
		<div class="row founder <?php echo get_user_meta($admin->ID, 'nickname', true); ?>">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="authorAvatar col-xs-12 col-sm-4 col-md-4">
					<img src="<?php echo $metaImg; ?>">
				</div>
				<h3 class="authorName"><a href="<?php echo get_author_posts_url( $admin->ID ); ?>"><?php echo $admin->display_name; ?></a></h3>
				<p class="authorTitle"><?php echo get_user_meta($admin->ID, 'user_title', true); ?></p>
				<p class="authorDescription"><?php echo get_user_meta($admin->ID, 'description', true); ?></p>
				<a href="mailto:<?php echo get_the_author_meta( 'user_email', $admin->ID ); ?>"><?php echo get_the_author_meta( 'user_email', $admin->ID ); ?></a>
				<!--	
					<p class="authorLinks"><a href="<?php echo get_author_posts_url( $user->ID ); ?>">View Author Links</a></p>
				-->
			</div>
		</div>
		<?php endif; ?>
			
		<?php
	}
?>
</div>

<div class="contributors teamTWIGG col-xs-12 col-sm-12 col-md-10 col-md-offset-1">	
<h2 style="font-size: 26px;">Team TWIGG How-To</h2>
<div class="row"></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" style="border-bottom: 3px solid #e4d4ef; margin-bottom: 30px;"></div>

<div class="contributors col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
	<div class="row">
	<?php

		foreach($users as $user)
		{
			?>
			<?php $metaImg = get_user_meta($user->ID, 'user_img', true); ?>
			<?php $display_author = get_user_meta($user->ID, 'display_author', true); ?>

		<?php if ( $metaImg && $display_author != 'false') : ?>
			<div class="author col-xs-12 col-sm-3 col-md-3 <?php echo get_user_meta($user->ID, 'nickname', true); ?>">
				<div class="authorAvatar">
					<img src="<?php echo $metaImg; ?>">
					<!-- <?php echo get_avatar( $user->user_email, '128' ); ?> -->
					<div class="authorOverlay">
						<a href="<?php echo get_author_posts_url( $user->ID ); ?>">Read More</a>
					</div>
				</div>
				<h3 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a></h3>
				<!--	<p class="authorDescrption"><?php echo get_user_meta($user->ID, 'description', true); ?></p>
					<p class="authorLinks"><a href="<?php echo get_author_posts_url( $user->ID ); ?>">View Author Links</a></p>
				-->
			</div>
			<?php endif; ?>
			<?php
		}
	?>
	</div>
</div>
</div>
<section class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">	
	<h4 class="accordionTrigger"><span class="icon"></span> Get Involved</h4>

<div class="accordionTab">
	<p class="aboutUsCopy">Team TWIGG How-To is constantly growing and looking to expand our team! Currently, we're looking for:</p>

<ul>
<li>Social Media Mavens</li>
<li>Article Editors</li>
<li>Article Contributors</li>
<li>Videographers and Editors</li>
</ul>

<p class="aboutUsCopy">If you or a friend are interested in any of these positions, please reach out to <a href="mailto:alex@twigghowto.com">alex@twigghowto.com</a>!</p>
</div>
</section>
