<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter( 'rwmb_meta_boxes', 'twigg_register_meta_boxes' );

function twigg_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';

    // 1st meta box
    // $meta_boxes[] = array(
    //     'id'       => 'homeslider',
    //     'title'    => 'Home Slider',
    //     'pages'    => array( 'post', 'page' ),
    //     'context'  => 'normal',
    //     'priority' => 'high',

    //     'fields' => array(
    //         array(
    //             'name'  => 'Full name',
    //             'desc'  => 'Format: First Last',
    //             'id'    => $prefix . 'fname',
    //             'type'  => 'text',
    //             'std'   => 'Anh Tran',
    //             'class' => 'custom-class',
    //             'clone' => true,
    //         ),
    //     )
    // );

    // 2nd meta box
    $meta_boxes[] = array(
        'id'       => 'homeslider',
        'title'    => 'Home Slider',
        'pages'    => 'post',
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Home Slider Article?',
                'id'    => $prefix . 'sliderArticle',
                'type'  => 'radio',
                'options' => array( 'homeSlide' => '')
            ),
            array(
                'name'  => 'Slider image',
                'id'    => $prefix . 'sliderImage',
                'type'  => 'image'
            ),
        )
    );

    return $meta_boxes;
}
