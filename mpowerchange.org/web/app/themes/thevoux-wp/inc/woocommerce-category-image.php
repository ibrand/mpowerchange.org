<?php
/**
 * Edit category header field.
 */

function thb_edit_category_header_img( $term, $taxonomy ) {
	$display_type	= get_woocommerce_term_meta( $term->term_id, 'display_type', true );
	$image 			= '';
	$header_id 	= absint( get_woocommerce_term_meta( $term->term_id, 'header_id', true ) );
	$shop_menu_color_cat 	= get_woocommerce_term_meta( $term->term_id, 'shop_menu_color_cat', true );
	if ($header_id) {
		$image = wp_get_attachment_image_url( $header_id, 'thumbnail' );
	} else {
		$image = wc_placeholder_img_src();
	}

	?>
	<tr class="form-field">
		<th scope="row"><h2><?php esc_html_e( 'The Voux Settings', 'thevoux' ); ?></h2></th>
	</tr>
	<tr class="form-field">
		<th scope="row" valign="top"><label><?php esc_html_e( 'Header', 'thevoux' ); ?></label></th>
		<td>
			<div id="product_cat_header" style="float:left;margin-right:10px;"><img src="<?php echo esc_url($image); ?>" width="60px" height="60px" /></div>
			<div style="line-height:60px;">
				<input type="hidden" id="product_cat_header_id" name="product_cat_header_id" value="<?php echo esc_attr($header_id); ?>" />
				<button type="submit" class="thb_upload_header button"><?php esc_html_e( 'Upload/Add image', 'thevoux' ); ?></button>
				<button type="submit" class="thb_remove_header button"><?php esc_html_e( 'Remove image', 'thevoux' ); ?></button>
			</div>

			<script type="text/javascript">

			if (jQuery('#product_cat_thumbnail_id').val() == 0)
				 jQuery('.remove_image_button').hide();

			if (jQuery('#product_cat_header_id').val() == 0)
				 jQuery('.thb_remove_header').hide();

				// Uploading files
				var header_file_frame;

				jQuery(document).on( 'click', '.thb_upload_header', function( event ){

					event.preventDefault();

					// If the media frame already exists, reopen it.
					if ( header_file_frame ) {
						header_file_frame.open();
						return;
					}

					// Create the media frame.
					header_file_frame = wp.media.frames.downloadable_file = wp.media({
						title: '<?php esc_html_e( 'Choose an image', 'thevoux' ); ?>',
						button: {
							text: '<?php esc_html_e( 'Use image', 'thevoux' ); ?>',
						},
						multiple: false
					});

					// When an image is selected, run a callback.
					header_file_frame.on( 'select', function() {
						attachment = header_file_frame.state().get('selection').first().toJSON();
						
						jQuery('#product_cat_header_id').val( attachment.id );
						jQuery('#product_cat_header img').attr('src', attachment.url );
						jQuery('.thb_remove_header').show();
					});

					// Finally, open the modal.
					header_file_frame.open();
				});

				jQuery(document).on( 'click', '.thb_remove_header', function( event ){
					jQuery('#product_cat_header img').attr('src', '<?php echo esc_url(wc_placeholder_img_src()); ?>');
					jQuery('#product_cat_header_id').val('');
					jQuery('.thb_remove_header').hide();
					return false;
				});

			</script>

			<div class="clear"></div>

		</td>

	</tr>
	<?php

}

add_action( 'product_cat_edit_form_fields', 'thb_edit_category_header_img', 20, 2 );




/**
 * woocommerce_category_header_img_save function.
 */

function thb_category_header_img_save( $term_id, $tt_id, $taxonomy ) {

	if ( isset( $_POST['product_cat_header_id'] ) )
		update_woocommerce_term_meta( $term_id, 'header_id', wp_unslash( absint( $_POST['product_cat_header_id'] ) ) );

	delete_transient( 'wc_term_counts' );

}

add_action( 'created_term', 'thb_category_header_img_save', 10,3 );
add_action( 'edit_term', 'thb_category_header_img_save', 10,3 );



/**
 * Header column added to category admin.
 */

function thb_woocommerce_product_cat_header_columns( $columns ) {

	$new_columns = array();
	$new_columns['cb'] = $columns['cb'];
	$new_columns['thumb'] = esc_html__( 'Image', 'thevoux' );
	$new_columns['header'] = esc_html__( 'Header', 'thevoux' );
	unset( $columns['cb'] );
	unset( $columns['thumb'] );

	return array_merge( $new_columns, $columns );

}

add_filter( 'manage_edit-product_cat_columns', 'thb_woocommerce_product_cat_header_columns' );


/**
 * Thumbnail column value added to category admin.
 */

function thb_woocommerce_product_cat_header_column( $columns, $column, $id ) {



	if ( $column == 'header' ) {

		$image 			= '';
		$thumbnail_id 	= get_woocommerce_term_meta( $id, 'header_id', true );

		if ($thumbnail_id)
			$image = wp_get_attachment_image_url( $thumbnail_id, 'thumbnail' );
		else
			$image = wc_placeholder_img_src();

		$columns .= '<img src="' . esc_url($image) . '" alt="Thumbnail" class="wp-post-image" height="40" width="40" />';

	}

	return $columns;

}

add_filter( 'manage_product_cat_custom_column', 'thb_woocommerce_product_cat_header_column', 10, 3 );
