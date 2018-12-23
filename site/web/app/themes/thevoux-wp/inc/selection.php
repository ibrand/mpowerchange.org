<?php function thb_selection() {
	$id = get_queried_object_id();
	ob_start();
?>
/* Options set in the admin page */
body { 
	<?php thb_typeecho(ot_get_option('body_type'), false, 'Lora'); ?>
}

/* Logo Height */
<?php if ($logo_height_mobile = ot_get_option('logo_height_mobile')) { ?>
@media only screen and (max-width: 40.063em) {
	.header .logo .logoimg {
		max-height: <?php thb_measurementecho($logo_height_mobile); ?>;
	}
}
<?php } ?>
<?php if ($logo_height = ot_get_option('logo_height')) { ?>
@media only screen and (min-width: 40.063em) {
	.header .logo .logoimg {
		max-height: <?php thb_measurementecho($logo_height); ?>;
	}
}
<?php } ?>
<?php if ($logo_height_fixed = ot_get_option('logo_height_fixed')) { ?>
.header.fixed .logo .logoimg {
	max-height: <?php thb_measurementecho($logo_height_fixed); ?>;
}
<?php } ?>
<?php if ($logo_height_mobilemenu = ot_get_option('logo_height_mobilemenu')) { ?>
#mobile-menu .logoimg {
	max-height: <?php thb_measurementecho($logo_height_mobilemenu); ?>;
}
<?php } ?>
/* Title Type */
<?php if ($title_type = ot_get_option('title_type')) { ?>
h1, h2, h3, h4, h5, h6, .mont, .wpcf7-response-output, label, .select-wrapper select, .wp-caption .wp-caption-text, .smalltitle, .toggle .title, q, blockquote p, cite, table tr th, table tr td, #footer.style3 .menu, #footer.style2 .menu, #footer.style4 .menu, .product-title, .social_bar, .widget.widget_socialcounter ul.style2 li {
	<?php thb_typeecho($title_type); ?>	
}
<?php } ?>
<?php if ($button_type = ot_get_option('button_type')) { ?>
input[type="submit"],
.button,
.btn {
	<?php thb_typeecho($button_type); ?>		
}
<?php } ?>
/* Colors */
<?php if ($accent_color = ot_get_option('accent_color')) { ?>
a,
.header .nav_holder.dark .full-menu-container .full-menu > li > a:hover,
.full-menu-container.light-menu-color .full-menu > li > a:hover,
.full-menu-container .full-menu > li.active > a, .full-menu-container .full-menu > li.sfHover > a,
.full-menu-container .full-menu > li > a:hover,
.full-menu-container .full-menu > li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder .thb_mega_menu li.active a, 
.full-menu-container .full-menu > li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder .thb_mega_menu li.active a .fa,
.post.featured-style4 .featured-title,
.post-detail .article-tags a,
.post .post-content .post-review .average,
#archive-title h1 span,
.widget > strong.style1,
.widget.widget_recent_entries ul li .url, .widget.widget_recent_comments ul li .url,
.thb-mobile-menu li a.active,
.thb-mobile-menu-secondary li a:hover,
q, blockquote p,
cite,
.notification-box a:not(.button),
.video_playlist .video_play.vertical.video-active,
.video_playlist .video_play.vertical.video-active h6,
.not-found p,
.thb_tabs .tabs h6 a:hover,
.thb_tabs .tabs dd.active h6 a,
.cart_totals table tr.order-total td,
.shop_table tbody tr td.order-status.approved,
.shop_table tbody tr td.product-quantity .wishlist-in-stock,
.shop_table tbody tr td.product-stock-status .wishlist-in-stock ,
.payment_methods li .about_paypal,
.place-order .terms label a,
.woocommerce-MyAccount-navigation ul li:hover a, .woocommerce-MyAccount-navigation ul li.is-active a,
.product .product-information .price > .amount,
.product .product-information .price ins .amount,
.product .product-information .wc-forward:hover,
.product .product-information .product_meta > span a,
.product .product-information .product_meta > span .sku,
.woocommerce-tabs .wc-tabs li a:hover,
.woocommerce-tabs .wc-tabs li.active a,
.thb-selectionSharer a.email:hover,
.widget ul.menu .current-menu-item>a {
  color: <?php echo esc_attr($accent_color); ?>;
}

.header-submenu-style2 .full-menu-container .full-menu > li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder,
.custom_check + .custom_label:hover:before,
.thb-pricing-table .thb-pricing-column.highlight-true .pricing-container,
.woocommerce-MyAccount-navigation ul li:hover a, .woocommerce-MyAccount-navigation ul li.is-active a,
.thb_3dimg:hover .image_link {
	border-color: <?php echo esc_attr($accent_color); ?>;
}
.header .social-holder .social_header:hover .social_icon,
.thb_3dimg .title svg,
.thb_3dimg .arrow svg {
	fill: <?php echo esc_attr($accent_color); ?>;	
}
.header .social-holder .quick_cart .cart_count,
.header.fixed .progress,
.post .post-gallery.has-gallery:after,
.post.featured-style4:hover .featured-title,
.post-detail .post-detail-gallery .gallery-link,
.post .post-content .post-review ul li .progress span,
#archive-title,
.widget .count-image .count,
.slick-nav:hover,
.btn:hover,
.btn:focus:hover,
.button:hover,
input[type=submit]:hover,
.btn.accent,
.btn:focus.accent,
.button.accent,
input[type=submit].accent,
.custom_check + .custom_label:after,
[class^="tag-link"]:hover, .tag-cloud-link:hover
.category_container.style3:before,
.highlight.accent,
.video_playlist .video_play.video-active,
.thb_tabs .tabs h6 a:after {
	background-color: <?php echo esc_attr($accent_color); ?>;	
}
.header-submenu-style2 .full-menu-container .full-menu > li.menu-item-has-children .sub-menu:not(.thb_mega_menu),
.woocommerce-MyAccount-navigation ul li:hover + li a, .woocommerce-MyAccount-navigation ul li.is-active + li a {
	border-top-color: <?php echo esc_attr($accent_color); ?>;
}
.woocommerce-tabs .wc-tabs li a:after {
	border-bottom-color: <?php echo esc_attr($accent_color); ?>;
}

/* Sub-menu styles */
.header-submenu-style2 .full-menu-container .full-menu>li.menu-item-has-children .sub-menu:not(.thb_mega_menu),
.header-submenu-style2 .full-menu-container .full-menu>li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder {
	border-top-color: <?php echo esc_attr($accent_color); ?>;
}
.header-submenu-style3 .full-menu-container .full-menu>li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder .thb_mega_menu li.active a,
.header-submenu-style3 .full-menu-container .full-menu > li.menu-item-has-children .sub-menu:not(.thb_mega_menu) li a:hover {
	background: rgba(<?php echo thb_hex2rgb($accent_color); ?>, 0.2);
}
blockquote:before,
blockquote:after {
	background: rgba(<?php echo thb_hex2rgb($accent_color); ?>, 0.2);
}
@media only screen and (max-width: 40.063em) {
	.post.featured-style4 .featured-title,
	.post.category-widget-slider .featured-title {
		background: <?php echo esc_attr($accent_color); ?>;
	}
}
<?php } ?>

/* Link Colors */
<?php if ($general_link_color = ot_get_option('general_link_color')) { ?>
	<?php thb_linkcolorecho($general_link_color, ''); ?>
<?php } ?>

<?php if ($menu_link_color = ot_get_option('menu_link_color')) { ?>
	<?php thb_linkcolorecho($menu_link_color, '.full-menu-container .full-menu > li >'); ?>
	<?php thb_linkcolorecho($menu_link_color, '.full-menu-container.light-menu-color .full-menu > li >'); ?>
<?php } ?>

<?php if ($footer_link_color = ot_get_option('footer_link_color')) { ?>
<?php thb_linkcolorecho($footer_link_color, '#footer .widget'); ?>
<?php if ('dark' === ot_get_option('footer_color')) { thb_linkcolorecho($footer_link_color, '#footer.dark .widget'); }?>
<?php } ?>

<?php if ($mobilemenu_link_color = ot_get_option('mobilemenu_link_color')) { ?>
<?php thb_linkcolorecho($mobilemenu_link_color, '#mobile-menu .thb-mobile-menu>li>'); ?>
<?php thb_linkcolorecho($mobilemenu_link_color, '#mobile-menu.dark .thb-mobile-menu>li>'); ?>
<?php } ?>
<?php if ($mobilemenu_secondary_link_color = ot_get_option('mobilemenu_secondary_link_color')) { ?>
<?php thb_linkcolorecho($mobilemenu_secondary_link_color, '#mobile-menu .thb-mobile-menu-secondary'); ?>
<?php thb_linkcolorecho($mobilemenu_secondary_link_color, '#mobile-menu.dark .thb-mobile-menu-secondary'); ?>
<?php } ?>

/* Colors */
<?php if ($mobileicon_color = ot_get_option('mobileicon_color')) { ?>
	.mobile-toggle span,
	.light-title .mobile-toggle span {
		background: <?php echo esc_attr($mobileicon_color); ?>;
	}
<?php } ?>
<?php if ($headericon_color = ot_get_option('headericon_color')) { ?>
	.quick_search .search_icon,
	.header .social-holder .social_toggle svg,
	.header .social-holder .quick_cart svg {
		fill: <?php echo esc_attr($headericon_color); ?>;
	}
<?php } ?>
<?php if ($widgettitle_color = ot_get_option('widgettitle_color')) { ?>
	.widget > strong {
		color: <?php echo esc_attr($widgettitle_color); ?> !important;
	}
<?php } ?>
<?php if ($readingindicator_color = ot_get_option('readingindicator_color')) { ?>
	.header.fixed .header_top .progress {
		background: <?php echo esc_attr($readingindicator_color); ?>;
	}
<?php } ?>
<?php if ($text_color = ot_get_option('text_color')) { ?>
body {
	color: <?php echo esc_attr($text_color); ?>;
}
<?php } ?>
<?php if ($footer_text_color = ot_get_option('footer_text_color')) { ?>
#footer p,
#footer.dark p {
	color: <?php echo esc_attr($footer_text_color); ?>;
}
<?php } ?>

/* Backgrounds */
<?php if ($header_bg = ot_get_option('header_bg')) { ?>
	.header_top {
		<?php thb_bgecho($header_bg); ?>
	}
<?php	} ?>
<?php if ($menu_bg = ot_get_option('menu_bg')) { ?>
	.full-menu-container {
		<?php thb_bgecho($menu_bg); ?>
	}
<?php	} ?>
<?php if ($megamenu_bg = ot_get_option('megamenu_bg')) { ?>
	.full-menu-container .full-menu > li.menu-item-has-children.menu-item-mega-parent .thb_mega_menu_holder,
	.full-menu-container .full-menu > li.menu-item-has-children > .sub-menu {
		<?php thb_bgecho($megamenu_bg); ?>
	}
<?php	} ?>
<?php if ($mobilemenu_bg = ot_get_option('mobilemenu_bg')) { ?>
	#mobile-menu {
		<?php thb_bgecho($mobilemenu_bg); ?>
	}
<?php	} ?>
<?php if ($footer_social_bar_bg = ot_get_option('footer_social_bar_bg')) { ?>
	.social_bar {
		<?php thb_bgecho($footer_social_bar_bg); ?>
	}
<?php	} ?>
<?php if ($footer_bg = ot_get_option('footer_bg')) { ?>
	#footer {
		<?php thb_bgecho($footer_bg); ?>
	}
<?php	} ?>
<?php if ($subfooter_bg = ot_get_option('subfooter_bg')) { ?>
	#subfooter {
		<?php thb_bgecho($subfooter_bg); ?>
	}
<?php	} ?>
<?php if ($widgettitle_bg = ot_get_option('widgettitle_bg')) { ?>
	.widget.style1 > strong span {
		background: <?php echo esc_attr($widgettitle_bg); ?>;
	}
<?php	} ?>
<?php if ( thb_wc_supported() ) { ?>
	<?php if ( is_product_category() ) { 
		$cat = get_queried_object();
		$cat_id = $cat->term_id;
		$header_id = get_term_meta( $cat_id, 'header_id', true );
		
		$image = wp_get_attachment_url($header_id, 'full');
	?>
		.tax-product_cat.term-<?php echo esc_attr($cat_id); ?> #archive-title {
			background-image: url(<?php echo esc_url($image); ?>);	
			background-size: cover;
		}
	<?php } ?>
<?php } ?>
/* Typography */
<?php if ($menu_type = ot_get_option('menu_type')) { ?>
.full-menu-container .full-menu > li > a,
#footer.style2 .menu, 
#footer.style3 .menu, 
#footer.style4 .menu, 
#footer.style5 .menu {
	<?php thb_typeecho($menu_type); ?>	
}
<?php } ?>
<?php if ($submenu_type = ot_get_option('submenu_type')) { ?>
.subheader-menu>li>a {
	<?php thb_typeecho($submenu_type); ?>	
}
<?php } ?>
<?php if ($subheader_menu_type = ot_get_option('subheader_menu_type')) { ?>
.full-menu-container .full-menu > li > a,
#footer.style2 .menu, 
#footer.style3 .menu, 
#footer.style4 .menu, 
#footer.style5 .menu {
	<?php thb_typeecho($menu_type); ?>	
}
<?php } ?>
<?php if ($mobile_menu_type = ot_get_option('mobile_menu_type')) { ?>
.thb-mobile-menu>li>a,
.thb-mobile-menu-secondary li a {
	<?php thb_typeecho($mobile_menu_type); ?>	
}
<?php } ?>
<?php if ($mobile_submenu_type = ot_get_option('mobile_submenu_type')) { ?>
.thb-mobile-menu .sub-menu li a {
	<?php thb_typeecho($mobile_submenu_type); ?>	
}
<?php } ?>
<?php if ($article_title_type = ot_get_option('article_title_type')) { ?>
.post .post-title h1 {
	<?php thb_typeecho($article_title_type); ?>	
}
<?php } ?>
<?php if ($widget_title_type = ot_get_option('widget_title_type')) { ?>
.widget > strong {
	<?php thb_typeecho($widget_title_type); ?>	
}
<?php } ?>
<?php if ($post_meta_type = ot_get_option('post_meta_type')) { ?>
.post-links,
.thb-post-top,
.post-meta,
.post-author,
.post-title-bullets li button span {
	<?php thb_typeecho($post_meta_type); ?>	
}
<?php } ?>
/* Category Colors */
<?php 
	if ($category_colors = ot_get_option('category_colors')) {
		thb_catcolorecho($category_colors);
	} 
?>
/* 404 Image */
<?php if ($bg_404 = ot_get_option('404_bg')) { ?>
@media only screen and (min-width: 40.063em) {
	.content404 > .row {
		background-image: url('<?php echo esc_attr($bg_404); ?>');
	}
}
<?php } ?>
/* Measurements */
<?php if ($footer_padding = ot_get_option('footer_padding')) { ?>
#footer.style1,
#footer.style2,
#footer.style3,
#footer.style4 {
	<?php thb_spacingecho($footer_padding, false, 'padding'); ?>;
}
<?php } ?>
<?php if ($footer_widget_padding = ot_get_option('footer_widget_padding')) { ?>
#footer .widget {
	<?php thb_spacingecho($footer_widget_padding, false, 'padding'); ?>;
}
<?php } ?>
<?php if ($footer_logo_height = ot_get_option('footer_logo_height')) { ?>
#footer.style2 .logolink img,
#footer.style3 .logolink img {
	max-height: <?php thb_measurementecho($footer_logo_height); ?>;
}
<?php } ?>
<?php if ($menu_margin = ot_get_option('menu_margin')) { ?>
.full-menu-container .full-menu>li {
	padding-left: <?php thb_measurementecho($menu_margin); ?>;
	padding-right: <?php thb_measurementecho($menu_margin); ?>;
}
<?php } ?>
/* Site Border */
<?php if (ot_get_option('site_borders') == 'on') { ?>
.thb-borders {
	border-color: <?php echo esc_attr(ot_get_option('site_borders_color')); ?>;
}
	<?php if ($site_borders_width = ot_get_option('site_borders_width', array('8', 'px'))) { ?>
	@media only screen and (min-width: 40.063em) {
	  .thb-borders {
	    border-width: <?php thb_measurementecho($site_borders_width); ?>;
	  }
	  .thb-borders-on .header {
	  	margin-top: <?php thb_measurementecho($site_borders_width); ?>;
	  }
	}
	<?php } ?>
<?php } ?>
/* Extra CSS */
<?php 
echo ot_get_option('extra_css');
?>
<?php 
	$out = ob_get_clean();
	// Remove comments
	$out = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $out);
	// Remove space after colons
	$out = str_replace(': ', ':', $out);
	// Remove whitespace
	$out = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $out);
	
	return $out;
}