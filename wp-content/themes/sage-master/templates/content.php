<div class="article row">
    <article <?php post_class(); ?>>
        <div class="entry-thumbnail col-xs-12 col-sm-4 col-md-4">
          <?php if ( has_post_format( 'video' )) : ?>
          <div class="youtubeIcon"></div>
        <?php endif ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </div>

      <div class="col-xs-12 col-sm-8 col-md-8">
        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php get_template_part('templates/entry-meta'); ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </article>
</div>