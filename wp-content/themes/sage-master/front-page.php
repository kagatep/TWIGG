<div class="container">
    <div class="row categoryRow recentlyAdded">
        <div class="col-xs-12 col-sm-12 col-md-12"><h2><span>Recently Added</span></h2>
            <h4 class="intro">Check back every Monday and Friday for new articles!</h4>
        </div>

        <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="article col-xs-12 col-sm-3 col-md-3">
            <article <?php post_class(); ?>>
                <div class="entry-thumbnail">
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
    <!--<div class="recent"><h4><a href="#">See more recent ></a></h4></div> -->
</div>
<div class="container">
<div class="aboutUsTout">
    <div class="leftSideTout">
    <h2>About Us</h2>
    <img src="/wp-content/themes/sage-master/assets/images/group-photo.jpg">
    </div>
    <div class="toutInfo">
        <p><span>The Winging It Girls' Guide,</span><br /> or <b>TWIGG How-To</b> for short, is a how-to platform with articles and videos in nine practical categories. All of our content is created
            by women, for women (with a few wingmen!). Want to hear our story and see what we believe in?</p>
            <p><a style="color: white;" href="/about-us">click here ></a></p>
    </div>
    <div class="toutInfo bottomLeft">  
        <a href="http://instagram.com/twigghowto/" target="_blank">
    <img src="http://www.twigghowto.com/wp-content/uploads/2016/10/wingit.jpg">
    <i class="icon-instagram"></i></a>
</div>
    <div class="toutInfo bottom">
        <h2>Contribute a How-To</h2>
        <p><a style="color: white;" href="/become-a-contributor">get started ></a></p>
    </div>
</div>
</div>

<!-- <div class="container videosTout">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">   
            <div class="videoHolder">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/A9_iS-0S_Zs" frameborder="0" allowfullscreen volume="0"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h2>videos</h2>
            <h3>Women In Media [Episode 5]: Female Script Intros</h3>
            <p>Today we're discussing the twitter account @femscriptintros, the obsession with beautiful female characters, and what it's like to be a female screenwriter!</p>
        </div>
    </div>
</div>
-->
<div class="videoHolder" style="width: 100%; margin-bottom: 20px;">
    <div id="latestVideo"></div>
</div>
<div class="container videosTout" style="margin-bottom: 20px;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <h2><a href="/category/videos/">videos</a></h2>
            <h3>Women In Media [Episode 5]: Female Script Intros</h3>
            <p>Today we're discussing the twitter account @femscriptintros, the obsession with beautiful female characters, and what it's like to be a female screenwriter!</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 nextVideos">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4><a href="https://www.youtube.com/channel/UCyjqwZ8HbZae5ApdZfxdL8w" target="_blank">watch more ></a></h4>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 nextVideo">

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 nextVideo">

            </div>
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