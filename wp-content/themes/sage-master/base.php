<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php
        if ( wp_is_mobile() ) {
          get_template_part('templates/mobilemenu'); 
        }
    ?>

    <?php
      get_template_part('templates/overlay');
    ?>

     <?php if (Config\is_not_full_page()) : ?>

    <div class="wrap container" role="document">
      <div class="content row">
        
        <div class="catDescription col-xs-12 col-sm-12 col-md-12"><?php echo category_description( $category_id ); ?></div>

        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar mobileHide" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->


<?php else: ?>
      <?php include Wrapper\template_path(); ?>
<?php endif; ?>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
