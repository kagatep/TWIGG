<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <div class="col-xs-12 col-sm-6 col-md-6 postNav prevPost">
        <?php previous_post('<span>previous post</span><br />%', '','yes'); ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 postNav nextPost">
        <?php next_post('<span>next post</span><br />%', '','yes'); ?>
      </div>  
      <div style="clear: both; margin-bottom: 20px;"></div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
