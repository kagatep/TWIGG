<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
  if (Config\is_not_full_page()) {
  
  } else {
    $classes[] = 'full-page';
  }
  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  if ( wp_is_mobile() ) {
    $classes[] = 'mobile';
  }
  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */

function excerpt_more() {
  //return ' &hellip; <a href="' . get_permalink() . '">' . __('', 'sage') . '</a>';
  return '... <a href="' . get_permalink() . '" class="readMore">read more' . __('', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\wpdocs_custom_excerpt_length', 999 );

