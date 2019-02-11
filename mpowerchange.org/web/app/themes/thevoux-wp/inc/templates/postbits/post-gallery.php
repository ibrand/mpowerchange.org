<?php
	$logo = ot_get_option('logo', Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/logo.png');
	$post_gallery_photos = get_post_meta($id, 'post-gallery-photos', true);
	$adv_gallery_header = ot_get_option('adv_gallery_header');
    if ($post_gallery_photos) {
			$post_gallery_photos_arr = explode(',', $post_gallery_photos);
			$count = sizeof($post_gallery_photos_arr);
    }
	$i = 1;
?>
<div id="post-gallery-<?php the_ID(); ?>" class="mfp-hide">
	
	<?php if ($post_gallery_photos) { foreach ($post_gallery_photos_arr as $photo_id) { ?>
		<div class="post-gallery-content">
			<div class="lightbox-header">
				<div class="row full-width-row no-padding">
					<div class="small-6 medium-2 columns">
						<a href="<?php echo home_url(); ?>" class="logolink" title="<?php bloginfo('name'); ?>">
							<img src="<?php echo esc_url($logo); ?>" class="logoimg" alt="<?php bloginfo('name'); ?>"/>
						</a>
					</div>
					<div class="small-6 medium-8 columns show-for-medium center-column">
						<?php echo '<aside class="ad_container_gallery_header">'.do_shortcode(wp_kses_post($adv_gallery_header)).'</aside>'; ?>
					</div>
					<div class="small-6 medium-2 columns close-column">
						<button title="<?php esc_attr_e('Close (Esc)', 'thevoux'); ?>" class="lightbox-close">× <?php esc_html_e('Close', 'thevoux'); ?></button>
					</div>
				</div>
			</div>
			<div class="row full-width-row no-padding">
				<div class="small-12 medium-6 large-9 columns image">
					<?php echo wp_get_attachment_image( $photo_id, 'full' ); ?>
					<a href="#" class="thb-gallery-arrow prev"><?php get_template_part('assets/svg/arrow_prev.svg'); ?></a>
					<a href="#" class="thb-gallery-arrow next"><?php get_template_part('assets/svg/arrow_next.svg'); ?></i></a>
				</div>
				<div class="small-12 medium-6 large-3 columns image-text">
					<aside class="meta">
						<span><?php echo '<em>'.esc_attr($i) .'</em> '. esc_html__('of', 'thevoux') .' '. esc_attr($count); ?></span>
					</aside>
					<h5><?php the_title(); ?></h5>
					<?php if (get_post($photo_id)->post_title) { ?>
					<h6><?php echo get_post($photo_id)->post_title; ?></h6>
					<?php } ?>
					<p><?php echo get_post($photo_id)->post_excerpt; ?></p>
					<?php if (get_post($photo_id)->post_content) { ?>
					<small><?php esc_html_e('Source:', 'thevoux'); ?> <?php echo get_post($photo_id)->post_content; ?></small>
					<?php } ?>
				</div>
			</div>
			
	</div>
	<?php $i++; } }?>
</div>