<?php

function thb_filter_radio_images( $array, $field_id ) {
	
	if ( in_array($field_id, array('article_style', 'post-style') ) ) {
	  $array = array(
	    array(
	      'value'   => 'style1',
	      'label'   => esc_html__( 'Style 1', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/article_styles/style1.png'
	    ),
	    array(
	      'value'   => 'style2',
	      'label'   => esc_html__( 'Style 2', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/article_styles/style2.png'
	    ),
	    array(
	      'value'   => 'style3',
	      'label'   => esc_html__( 'Style 3', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/article_styles/style3.png'
	    ),
	    array(
	      'value'   => 'style4',
	      'label'   => esc_html__( 'Style 4', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/article_styles/style4.png'
	    )
	  );
	}
	
	if ( $field_id == 'header_style' ) {
	  $array = array(
	    array(
	      'value'   => 'style1',
	      'label'   => esc_html__( 'Style 1', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style1.png'
	    ),
	    array(
	      'value'   => 'style2',
	      'label'   => esc_html__( 'Style 2', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style2.png'
	    ),
	    array(
	      'value'   => 'style3',
	      'label'   => esc_html__( 'Style 3', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style3.png'
	    ),
	    array(
	      'value'   => 'style4',
	      'label'   => esc_html__( 'Style 4', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style4.png'
	    ),
	    array(
	      'value'   => 'style5',
	      'label'   => esc_html__( 'Style 5', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style5.png'
	    ),
	    array(
	      'value'   => 'style6',
	      'label'   => esc_html__( 'Style 6', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style6.png'
	    ),
	    array(
	      'value'   => 'style7',
	      'label'   => esc_html__( 'Style 7', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style7.png'
	    ),
	    array(
	      'value'   => 'style8',
	      'label'   => esc_html__( 'Style 8', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/header_styles/style8.png'
	    )
	  );
	}
	
	if ( $field_id == 'header_submenu_style' ) {
	  $array = array(
	    array(
	      'value'   => 'style1',
	      'label'   => esc_html__( 'Style 1', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/menu_styles/style1.jpg'
	    ),
	    array(
	      'value'   => 'style2',
	      'label'   => esc_html__( 'Style 2', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/menu_styles/style2.jpg'
	    ),
	    array(
	      'value'   => 'style3',
	      'label'   => esc_html__( 'Style 3', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/menu_styles/style3.jpg'
	    )
	  );
	}
	
	if ( $field_id == 'footer_style' ) {
	  $array = array(
	    array(
	      'value'   => 'style1',
	      'label'   => esc_html__( 'Style 1', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/footer_styles/style1.png'
	    ),
	    array(
	      'value'   => 'style2',
	      'label'   => esc_html__( 'Style 2', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/footer_styles/style2.png'
	    ),
	    array(
	      'value'   => 'style3',
	      'label'   => esc_html__( 'Style 3', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/footer_styles/style3.png'
	    ),
	    array(
	      'value'   => 'style4',
	      'label'   => esc_html__( 'Style 4', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/footer_styles/style4.png'
	    ),
	    array(
	      'value'   => 'style5',
	      'label'   => esc_html__( 'Style 5', 'thevoux' ),
	      'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/footer_styles/style5.png'
	    )
	  );
	}
	
  if ( $field_id == 'widget_style' ) {
    $array = array(
      array(
        'value'   => 'style1',
        'label'   => esc_html__( 'Style 1', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_1.jpg'
      ),
      array(
        'value'   => 'style2',
        'label'   => esc_html__( 'Style 2', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_2.jpg'
      ),
      array(
        'value'   => 'style3',
        'label'   => esc_html__( 'Style 3', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_3.jpg'
      ),
      array(
        'value'   => 'style4',
        'label'   => esc_html__( 'Style 4', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_4.jpg'
      ),
      array(
        'value'   => 'style5',
        'label'   => esc_html__( 'Style 5', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_5.jpg'
      ),
      array(
        'value'   => 'style6',
        'label'   => esc_html__( 'Style 6', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_6.jpg'
      ),
      array(
        'value'   => 'style7',
        'label'   => esc_html__( 'Style 7', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/widget_styles/w_7.jpg'
      ),
    );
  }
  
  if ( $field_id == 'footer_columns' ) {
    $array = array(
      array(
        'value'   => 'fourcolumns',
        'label'   => esc_html__( 'Four Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/four-columns.png'
      ),
      array(
        'value'   => 'threecolumns',
        'label'   => esc_html__( 'Three Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/three-columns.png'
      ),
      array(
        'value'   => 'twocolumns',
        'label'   => esc_html__( 'Two Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/two-columns.png'
      ),
      array(
        'value'   => 'doubleleft',
        'label'   => esc_html__( 'Double Left Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/doubleleft-columns.png'
      ),
      array(
        'value'   => 'doubleright',
        'label'   => esc_html__( 'Double Right Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/doubleright-columns.png'
      ),
      array(
        'value'   => 'fivecolumns',
        'label'   => esc_html__( 'Five Columns', 'thevoux' ),
        'src'     => Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/admin/columns/five-columns.png'
      )
      
    );
  }
  return $array;
  
}
add_filter( 'ot_radio_images', 'thb_filter_radio_images', 10, 2 );

function thb_filter_options_name() {
	return __('<a href="http://fuelthemes.net">Fuel Themes</a>', 'thevoux');
}
add_filter( 'ot_header_version_text', 'thb_filter_options_name', 10, 2 );

function thb_filter_admin_name() {
	return Thb_Theme_Admin::$thb_theme_name.__(' Theme Options', 'thevoux');
}
add_filter( 'ot_theme_options_page_title', 'thb_filter_admin_name', 10, 2 );

function thb_filter_upload_name() {
	return esc_html__('Send to Theme Options', 'thevoux');
}
add_filter( 'ot_upload_text', 'thb_filter_upload_name', 10, 2 );

function thb_header_list() {
	echo '<li class="theme_link"><a href="http://fuelthemes.ticksy.com/" target="_blank">Support Forum</a></li>';
	if (!Thb_Theme_Admin::$thb_envato_hosted) {
		echo '<li class="theme_link right"><a href="http://wpeng.in/fuelt/" target="_blank">Recommended Hosting</a></li>';
	}
	echo '<li class="theme_link right"><a href="https://wpml.org/?aid=85928&affiliate_key=PIP3XupfKQOZ" target="_blank">Purchase WPML</a></li>';
}
add_filter( 'ot_header_list', 'thb_header_list' );

function thb_filter_ot_recognized_font_families( $array, $field_id ) {
	$array['helveticaneue'] = "'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif";
	ot_fetch_google_fonts( true, false );
	$ot_google_fonts = wp_list_pluck( get_theme_mod( 'ot_google_fonts', array() ), 'family' );
  $array = array_merge($array,$ot_google_fonts);
  
  if (ot_get_option('typekit_id')) {
  	$typekit_fonts = trim(ot_get_option('typekit_fonts'), ' ');
  	$typekit_fonts = explode(',', $typekit_fonts);
  	
  	$array = array_merge($array,$typekit_fonts);
  }
  
  $self_hosted_names = array();
  if (ot_get_option('self_hosted_fonts')) {
  	$self_hosted_fonts = ot_get_option('self_hosted_fonts');
  	
  	foreach ($self_hosted_fonts as $font) {
  		$self_hosted_names[] = $font['font_name'];
  	}
  	
  	$array = array_merge($array,$self_hosted_names);
  }
  
  foreach ($array as $font => $value) {
		$thb_font_array[$value] = $value;
  }
  return $thb_font_array;
}
add_filter( 'ot_recognized_font_families', 'thb_filter_ot_recognized_font_families', 10, 2 );

function thb_filter_typography_fields2( $array, $field_id ) {

	if ( in_array($field_id, array("title_type", "body_type", "button_type") ) ) {
		$array = array( 'font-family');
	}
	if ( in_array($field_id, array("article_title_type") ) ) {
		$array = array( 'font-size', 'font-style', 'font-variant', 'font-weight', 'text-decoration', 'text-transform', 'line-height', 'letter-spacing');
	}
	if ( in_array($field_id, array("menu_type", "submenu_type", "subheader_menu_type","mobile_menu_type", "mobile_submenu_type", "post_meta_type") ) ) {
		$array = array( 'font-family', 'font-size', 'font-style', 'font-variant', 'font-weight', 'text-decoration', 'text-transform', 'line-height', 'letter-spacing');
	}
   return $array;

}
add_filter( 'ot_recognized_typography_fields', 'thb_filter_typography_fields2', 10, 2 );

function thb_filter_typography_fields3( $array, $field_id ) {
	
   $fields = array('menu_left_type', 'menu_right_type');
   if ( in_array($field_id, $fields )) {
      $array = array('font-family', 'font-size', 'font-style', 'font-variant', 'font-weight', 'text-decoration', 'text-transform', 'line-height', 'letter-spacing');
   }

   return $array;

}
add_filter( 'ot_recognized_typography_fields', 'thb_filter_typography_fields3', 10, 2 );

function thb_social_links_settings( $id ) {
    
  $settings = array(
    array(
      'label'       => 'Social Networks to display',
      'id'          => 'footer_social_network',
      'type'        => 'select',
      'desc'        => 'Select your social network',
      'choices'     => array(
        array(
          'label'       => 'Facebook',
          'value'       => 'facebook'
        ),
        array(
          'label'       => 'Twitter',
          'value'       => 'twitter'
        ),
        array(
          'label'       => 'Google Plus',
          'value'       => 'google-plus'
        ),
        array(
          'label'       => 'Pinterest',
          'value'       => 'pinterest'
        ),
        array(
          'label'       => 'Linkedin',
          'value'       => 'linkedin'
        ),
        array(
          'label'       => 'Instagram',
          'value'       => 'instagram'
        ),
        array(
          'label'       => 'Flickr',
          'value'       => 'flickr'
        ),
        array(
          'label'       => 'VK',
          'value'       => 'vk'
        ),
        array(
          'label'       => 'Tumblr',
          'value'       => 'tumblr'
        ),
        array(
          'label'       => 'Spotify',
          'value'       => 'spotify'
        ),
        array(
          'label'       => 'Youtube',
          'value'       => 'youtube'
        ),
        array(
          'label'       => 'Vimeo',
          'value'       => 'vimeo'
        ),
        array(
          'label'       => 'Dribbble',
          'value'       => 'dribbble'
        ),
        array(
          'label'       => '500px',
          'value'       => '500px'
        ),
        array(
          'label'       => 'Behance',
          'value'       => 'behance'
        )
      )
    ),
    array(
      'id'        => 'href',
      'label'     => 'Link',
      'desc'      => sprintf( esc_html__( 'Enter a link to the profile or page on the social website. Remember to add the %s part to the front of the link.', 'thevoux' ), '<code>http://</code>' ),
      'type'      => 'text',
    )
  );
  
  return $settings;

}
add_filter( 'ot_social_links_settings', 'thb_social_links_settings');
add_filter( 'ot_type_social_links_load_defaults', '__return_false');

function thb_filter_measurement_unit_types( $array, $field_id ) {
	if ( in_array($field_id, array('site_borders_width', 'menu_margin') ) ) {
	  $array = array(
	    'px' => 'px',
	    'em' => 'em',
	    'pt' => 'pt'
	  );
	}
	return $array;
}
add_filter( 'ot_measurement_unit_types', 'thb_filter_measurement_unit_types', 10, 2 );

function thb_ot_line_height_unit_type( $array, $field_id ) {
	return 'em';
}
add_filter( 'ot_line_height_unit_type', 'thb_ot_line_height_unit_type', 10, 2 );

function thb_ot_line_height_high_range( $array, $field_id ) {
	return 3;
}
add_filter( 'ot_line_height_high_range', 'thb_ot_line_height_high_range', 10, 2 );

function thb_ot_line_height_range_interval( $array, $field_id ) {
	return 0.05;
}
add_filter( 'ot_line_height_range_interval', 'thb_ot_line_height_range_interval', 10, 2 );

function thb_filter_ot_recognized_link_color_fields( $array, $field_id ) {
	$array = array(
		'link'    => esc_html_x( 'Standard', 'color picker', 'revolution' ),
	  'hover'   => esc_html_x( 'Hover', 'color picker', 'revolution' )
	);
	return $array;
}
add_filter( 'ot_recognized_link_color_fields', 'thb_filter_ot_recognized_link_color_fields', 10, 2 );