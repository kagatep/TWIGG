<div class="article col-xs-12 col-sm-4 col-md-4">
    <article <?php post_class(); ?>>
      	<div class="entry-thumbnail">
      		<?php if ( has_post_format( 'video' )) : ?>
    			<div class="youtubeIcon"></div>
    		<?php endif ?>
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        </div>

        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </article>
</div>