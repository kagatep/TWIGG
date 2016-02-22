<?php if (is_single($post)): ?>

<section class="authorBio">
	<h3 class="widgettitle">About the Author</h3>
	<div class="authorImage">
		<img src="<?php the_author_meta('user_img'); ?>" style="width: 96px;">
	</div>
<h4><a class="authorLink" href="/author/<?php the_author_meta('user_login'); ?>">
<?php the_author_meta('display_name'); ?></a></h4>
<p><?php the_author_meta('short_bio'); ?></p>
<p class="learnMore">Learn more about <a href="/author/<?php the_author_meta('user_login'); ?>">
<?php the_author_meta('user_firstname'); ?></a> <span class="fa fa-long-arrow-right"></span>
</section>

<?php dynamic_sidebar('sidebar-primary'); ?>

<?php else: ?>
	<?php dynamic_sidebar('sidebar-category'); ?>
<?php endif ?>
<p class="postDisclaimer"><span>*</span>All articles featured on TWIGG How-To are the sole opinion of the contributor. Read the full Terms & Conditions <a href="/terms-and-conditions" target="_blank">here</a>.</p>