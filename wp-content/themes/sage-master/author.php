<div class="authorBio">
	<img src="<?php the_author_meta('user_img'); ?>" class="userImg">
	<h4><?php the_author_meta('display_name'); ?></h4>
	<h5><?php the_author_meta('user_title'); ?></h5>
	<p><?php the_author_meta('description'); ?></p>

	<!--<?php if(is_super_admin()) : ?> 
		<p><a href="mailto:<?php the_author_meta('user_email'); ?>"><?php the_author_meta('user_email'); ?></a></p>
	<?php endif; ?>-->
	<div class="divider"></div>
</div>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>