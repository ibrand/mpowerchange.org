<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$attachment_ids = $product->get_gallery_image_ids();
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

$classes[] = 'columns';
?>

<li <?php wc_product_class($classes); ?>>
	<figure class="product-image">
		<?php do_action( 'thb_product_badge'); ?>
		<?php 
					
			woocommerce_template_loop_product_link_open();
			do_action( 'woocommerce_before_shop_loop_item_title' );	
			if ($attachment_ids) {
				echo wp_get_attachment_image( $attachment_ids[0], 'woocommerce_thumbnail' );
			}
			woocommerce_template_loop_product_link_close();
			
			
		?>
		<?php woocommerce_template_loop_add_to_cart(); ?>
	</figure>
	<header class="post-title">
		<h5><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
			<?php
				/**
				 * woocommerce_after_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_template_loop_price - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
	</header>
	
</li><!-- end product -->