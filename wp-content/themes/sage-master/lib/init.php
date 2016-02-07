<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'secondary_navigation' => __('Secondary Navigation', 'sage'),
    'footer_navigation' => __('Footer Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));

  // Add icomoon font, used in the main stylesheet
  wp_enqueue_style('icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css', array());
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Category Page', 'sage'),
    'id'            => 'sidebar-category',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

function the_latest_author_posts($post) {

        //some content goes here regarding the post itself!!!
        $relatedargs = array(

             'author' => $post->post_author,
             'post__not_in' => array( $post->ID),
             'posts_per_page' => 3

        );

        $relatedquery = new WP_Query( $relatedargs );

        while($relatedquery->have_posts()){
             $relatedquery->the_post(); 
             $ID = get_the_ID();
        ?>

             <div class="span3">

             <?php
                  if(has_post_thumbnail()) { 
                       $relatedthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'medium', false);
                       $relatedthumbnail_large = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'full', false);
?>

                       <div class="hover_colour"><a href="<?php echo $relatedthumbnail_large['0']; ?>" rel="prettyPhoto"><img src="<?php echo $relatedthumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a>
                       </div>

                 <?php } ?>

                       <h6><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a><br><i class="icon-time muted"></i> <?php echo get_the_time('j') . '/' . get_the_time('m') . '/' . get_the_time('Y') . ' '; ?> <i class="icon-comments muted"></i> <a href="<?php the_permalink(); ?>"> <?php comments_number(0 . __(' comments','textdomain'), 1 . __(' comment','textdomain'), '% ' . __('comments','textdomain')); ?></a></h6>

               </div>

    <?php }
    wp_reset_postdata();
}