<?php get_template_part('templates/twiggtip'); ?>
<div class="row-fluid categoryRow recentlyAdded">
    <div class="col-xs-12"><h2><a href="#">Recently Added</a></h2></div>


<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>


<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="article col-xs-12 col-sm-15 col-md-15">
    <article <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <?php if ( has_post_format( 'video' )) : ?>
                <div class="youtubeIcon"></div>
            <?php endif ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </div>

        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
</div>

<?php 
endwhile;
wp_reset_postdata();
?>

</div>

<h4 class="intro">Check back every Monday and Friday for new articles!</h4>

<?php 
	$cats = get_categories(); 

foreach ($cats as $cat) {
    $cat_id= $cat->term_id;
    // Make a header for the cateogry
    echo '<div class="row categoryRow '.$cat->category_nicename.'">';
    echo '<div class="col-xs-12"><h2><a href="/category/'.$cat->slug.'">'.$cat->name.'</a></h2></div>';

    // create a custom wordpress query
    query_posts("cat=$cat_id&posts_per_page=3");
    // start the wordpress loop!

    if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php ?>
        <?php get_template_part('templates/content', 'frontpage'); ?>
   		<?php endwhile; endif;  ?>
  
<?php 
    echo '</div>'; } ?>


<!-- <?php the_posts_navigation(); ?>-->
<div class="subscribe container">
    <div class="row">
    <?php get_template_part('templates/subfooter'); ?>
    </div>
</div>
<?php get_template_part('templates/bubbles'); ?>