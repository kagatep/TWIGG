<div class="container">
    <div class="row categoryRow recentlyAdded">
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

    <?php endwhile;
        wp_reset_postdata();
    ?>
    </div>
</div>

<div class="aboutUsTout">

    <img src="/wp-content/themes/sage-master/assets/images/group-photo.jpg">
    <div class="toutInfo">
        <h2>About Us</h2>
        <p>Click here for a quick guide into everything TWIGG How-To!</p>
        <div class="divider"></div>
        <p>Learn more about our team</p>
        <div class="divider"></div>
        <p><a href="" class="icon-twitter"></a> "revolving tweets go here"</p>
    </div>
    <div class="toutInfo bottom">
        <h2>Become a Contributor</h2>
        <p>learn more >></p>
    </div>
</div>

<div class="container videosTout">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">   
            <div class="videoHolder">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/4TWRaGJ33J4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h2>videos</h2>
            <h3>Women in Media [Episode 3]: Hidden (Female) Figures</h3>
            <p>Meet Caitlin and Alex of www.TWIGGHowTo.com - who are passionate about movies, TV, and feminism. In this series, they'll dive into the representation, or lack thereof, of women in the media. Today, they're discussing the upcoming film "Hidden Figures" and other women who don't get the credit they deserve. </p>
        </div>
    </div>
</div>
<!-- <?php the_posts_navigation(); ?>-->
<div class="subscribe container">
    <div class="row">
    <?php get_template_part('templates/subfooter'); ?>
    </div>
</div>
<?php get_template_part('templates/bubbles'); ?>