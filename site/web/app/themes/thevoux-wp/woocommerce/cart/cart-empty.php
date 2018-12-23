<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 	3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<div class="text-center cart-empty-container">
	<section>
		<figure></figure>
		<?php do_action( 'woocommerce_cart_is_empty' ); ?>
		
		<p class="return-to-shop"><a class="button black" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'thevoux' ) ?></a></p>
	</section>
</div>