
<div class="row categoryRow">
    <div><h2><span>Recently Added</span></h2></div>

<h4 class="intro">Check back every Monday and Friday for new articles!</h4>


<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="article col-xs-12 col-sm-15 col-md-15">
    <article <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <?php if ( has_post_format( 'video' )) : ?>
                <div class="youtubeIcon"></div>
            <?php endif ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?>
                <span><?php $c = get_the_category(); echo $c[0]->cat_name;?></span>
            </a>
        </div>

        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
</div>

<?php 
endwhile;
wp_reset_postdata();
?>

</div>


<div class="row categoryRow auto">
<div class="col-xs-12"><h2><a href="/category/auto">Auto</a></h2>
<span class="seeMore"><a href="/category/auto">see more articles ></a></span></div>
<?php $recentAuto = new WP_Query("category_name=auto&showposts=3"); 
while($recentAuto->have_posts()) : $recentAuto->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_query(); 
?>
</div>

<div class="row categoryRow finance">
    <div class="col-xs-12"><h2><a href="/category/finance">Finance</a></h2>
        <span class="seeMore"><a href="/category/finance">see more articles ></a></span>
    </div>
<?php $recentFinance = new WP_Query("category_name=finances&showposts=3"); 
while($recentFinance->have_posts()) : $recentFinance->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; 
wp_reset_query(); 
?>
</div>

<div class="row categoryRow health">
<div class="col-xs-12"><h2><a href="/category/health">Health</a></h2>
<span class="seeMore"><a href="/category/health">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=health&showposts=3"); 
while($recent->have_posts()) : $recent->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_postdata();
?>
</div>

<div class="row categoryRow household">
    <div class="col-xs-12"><h2><a href="/category/household">Household</a></h2>
    <span class="seeMore"><a href="/category/household">see more articles ></a></span>
    </div>
    <?php $recent = new WP_Query("category_name=household&showposts=3"); 
        $x = 0;
        while($recent->have_posts()) : $x++;
            $recent->the_post();
        if($x == 1):
            get_template_part('templates/content', 'large'); 
        else: 
            get_template_part('templates/content', 'small'); 
        endif; endwhile; 
    wp_reset_postdata(); ?>
</div>

<div class="row categoryRow law">
<div class="col-xs-12"><h2><a href="/category/law">Law</a></h2>
    <span class="seeMore"><a href="/category/law">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=law&showposts=3"); 
while($recent->have_posts()) : $recent->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_postdata();
?>
</div>

<div class="row categoryRow personalpr">
<div class="col-xs-12"><h2><a href="/category/personal-pr">Personal PR</a></h2>
<span class="seeMore"><a href="/category/personal-pr">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=personal-pr&showposts=3"); 
while($recent->have_posts()) : $recent->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_postdata();
?>
</div>

<div class="row categoryRow school">
<div class="col-xs-12"><h2><a href="/category/school">School</a></h2>
<span class="seeMore"><a href="/category/school">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=school&showposts=3"); 
        $x = 0;
        while($recent->have_posts()) : $x++;
            $recent->the_post();
        if($x == 1):
            get_template_part('templates/content', 'large'); 
        else: 
            get_template_part('templates/content', 'small'); 
        endif; endwhile; 
    wp_reset_postdata(); ?>
</div>


<div class="row categoryRow tech">
<div class="col-xs-12"><h2><a href="/category/tech">Technology</a></h2>
<span class="seeMore"><a href="/category/tech">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=tech&showposts=3"); 
while($recent->have_posts()) : $recent->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_postdata();
?>
</div>

<div class="row categoryRow travel">
<div class="col-xs-12"><h2><a href="/category/travel">travel</a></h2>
<span class="seeMore"><a href="/category/travel">see more articles ></a></span>
</div>
<?php $recent = new WP_Query("category_name=travel&showposts=3"); 
while($recent->have_posts()) : $recent->the_post();?>
<?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; wp_reset_postdata();
?>
</div>


<!-- <?php the_posts_navigation(); ?>-->
<div class="subscribe container">
    <div class="row">
    <?php get_template_part('templates/subfooter'); ?>
    </div>
</div>
<?php get_template_part('templates/bubbles'); ?>