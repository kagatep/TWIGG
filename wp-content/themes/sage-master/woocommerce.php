
<div class="container">
	<div class="row cart-customlocation">
		<a class=" icon-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
	</div>
	<div class="row">
		<?php woocommerce_content(); ?>
	</div>
</div>

