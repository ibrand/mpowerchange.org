<?php
$thb_animation_array = array(
	"type" => "dropdown",
	"heading" => esc_html__("Animation", 'thevoux'),
	"param_name" => "animation",
	"value" => array(
		"None" => "",
		"Left" => "animation right-to-left",
		"Right" => "animation left-to-right",
		"Top" => "animation bottom-to-top",
		"Bottom" => "animation top-to-bottom",
		"Scale" => "animation scale",
		"Fade" => "animation fade-in"
	)
);

// Shortcodes 
$shortcodes = Thb_Theme_Admin::$thb_theme_directory. 'vc_templates/';
$files = glob($shortcodes.'thb_?*.php');
foreach ($files as $filename) {
	require get_theme_file_path('vc_templates/'.basename($filename));
}

/* Visual Composer Mappings */

// Adding animation to columns
vc_remove_param( "vc_column", "css_animation" );
vc_add_param("vc_column", array(
	"type" => "checkbox",
	"heading" => esc_html__("Enable Fixed Content", 'thevoux'),
	"param_name" => "fixed",
	"value" => array(
		esc_html__("Yes", 'thevoux') =>"true"
	),
	'weight' => 1,
	"description" => esc_html__("If you enable this, this column will be fixed.", 'thevoux')
));
vc_add_param("vc_column_inner", array(
	"type" => "checkbox",
	"heading" => esc_html__("Enable Fixed Content", 'thevoux'),
	"param_name" => "fixed",
	"value" => array(
		esc_html__("Yes", 'thevoux') =>"true"
	),
	'weight' => 1,
	"description" => esc_html__("If you enable this, this column will be fixed.", 'thevoux')
));

vc_add_param("vc_column", $thb_animation_array);
vc_add_param("vc_column_inner", $thb_animation_array);

// Text Area
vc_remove_param("vc_column_text", "css_animation");
vc_add_param("vc_column_text", $thb_animation_array);

// VC_ROW
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__("Disable Column Padding", 'thevoux'),
	"param_name" => "column_padding",
	"value" => array(
		esc_html__("Yes", 'thevoux') => "false"
	),
	'weight' => 1,
	"description" => esc_html__("You can have columns without spaces using this option", 'thevoux')
));
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__("Enable Full Width", 'thevoux'),
	"param_name" => "full_width_row",
	"value" => array(
		esc_html__("Yes", 'thevoux') =>"true"
	),
	'weight' => 1,
	"description" => esc_html__("If you enable this, this row fill the full-screen in large screens", 'thevoux')
));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"heading" => esc_html__("Disable Column Padding", 'thevoux'),
	"param_name" => "column_padding",
	"value" => array(
		esc_html__("Yes", 'thevoux') => "false"
	),
	'weight' => 1,
	"description" => esc_html__("You can have columns without spaces using this option", 'thevoux')
));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"heading" => esc_html__("Enable Max Width", 'thevoux'),
	"param_name" => "max_width",
	"value" => array(
		esc_html__("Yes", 'thevoux') =>"true"
	),
	'weight' => 1,
	"description" => esc_html__("If you enable this, this row will not fill the container.", 'thevoux')
));

// Add / Remove parameters
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );
vc_remove_param( "vc_row", "equal_height" );
vc_remove_param( "vc_row", "css_animation" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_toggle", "color" );
vc_remove_param( "vc_toggle", "style" );
vc_remove_param( "vc_toggle", "size" );
vc_remove_param( "vc_row_inner", "gap" );
vc_remove_param( "vc_row_inner", "equal_height" );
vc_remove_param( "vc_row_inner", "css_animation" );

// Author List
vc_map( array(
	"name" => esc_html__("Author List", 'thevoux'),
	"base" => "thb_authorgrid",
	"icon" => "thb_vc_ico_authorgrid",
	"class" => "thb_vc_sc_authorgrid",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Columns", 'thevoux'),
	      "param_name" => "columns",
	      "admin_label" => true,
	      "value" => array(
	      	'Six Columns' => "6",
	      	'Four Columns' => "4",
	      	'Three Columns' => "3",
	      	'Two Columns' => "2"
	      ),
	      "description" => esc_html__("Select the layout of the authors.", 'thevoux')
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Author IDs", 'thevoux'),
	    "param_name" => "author_ids",
	    "description" => esc_html__("Enter the Author IDs you would like to display seperated by comma", 'thevoux')
	  )
	),
	"description" => esc_html__("Display your blog authors in a grid", 'thevoux')
) );

// Posts Grid
vc_map( array(
	"name" => esc_html__("Block Grid", 'thevoux'),
	"base" => "thb_blockgrid",
	"icon" => "thb_vc_ico_blockgrid",
	"class" => "thb_vc_sc_blockgrid",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
	    "type" => "dropdown",
	    "heading" => esc_html__("Style", 'thevoux'),
	    "param_name" => "style",
	    "admin_label" => true,
	    "value" => array(
	    	'Style 1' => "style1"
	    ),
	    "description" => esc_html__("This changes the layouts of the grids", 'thevoux')
		),
		array(
		  "type" => "loop",
		  "heading" => esc_html__("Post Source", 'thevoux'),
		  "param_name" => "source",
		  "description" => esc_html__("Set your post source here. Block Grids have fixed post counts, so it will be omitted inside source setting.", 'thevoux')
		),
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Offset", 'thevoux'),
		  "param_name" => "offset",
		  "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
		)
	),
	"description" => esc_html__("Display your posts in different grid layouts.", 'thevoux')
) );

// Border Shortcode
vc_map( array(
	"name" => esc_html__("Border Container", 'thevoux'),
	"base" => "thb_border",
	"icon" => "thb_vc_ico_border",
	"class" => "thb_vc_sc_border",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"show_settings_on_create" => true,
	"as_parent" => array('except' => 'thb_border'),
	"params" => array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1' => "style1",
		    	'Style 2' => "style2",
		    	'Style 3' => "style3",
		    ),
		    "description" => esc_html__("This changes the style of the background", 'thevoux')
		),
	),
	"description" => esc_html__("Stylish Border Container that you can place elements in", 'thevoux')
) );
class WPBakeryShortCode_Thb_Border extends WPBakeryShortCodesContainer { }

// Button shortcode
vc_map( array(
	"name" => esc_html__("Button", 'thevoux'),
	"base" => "thb_button",
	"icon" => "thb_vc_ico_button",
	"class" => "thb_vc_sc_button",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
		  "type" => "vc_link",
		  "heading" => esc_html__("Button Link & Text", 'thevoux'),
		  "param_name" => "link",
		  "description" => esc_html__("Set your button link & text here.", 'thevoux')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Size", 'thevoux'),
			"param_name" => "size",
			"value" => array(
				"Mini button" => "mini",
				"Small button" => "small",
				"Medium button" => "medium",
				"Large button" => "large"
			),
			"std" => "medium"
		),
		$thb_animation_array
	),
	"description" => esc_html__("Add an animated button", 'thevoux')
) );

// Google Map
vc_map( array(
	"name" => esc_html__("Contact Map Parent", 'thevoux'),
	"base" => "thb_contactmap",
	"icon" => "thb_vc_ico_contactmap",
	"class" => "thb_vc_sc_contactmap",
	"content_element"	=> true,
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"as_parent" => array('only' => 'thb_contactmap_pin'),
	"params" => array(
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Map Height", 'thevoux'),
		  "param_name" => "height",
		  "admin_label" => true,
		  "value" => 50,
		  "description" => esc_html__("Enter height of the map in vh (0-100). For example, 50 will be 50% of viewport height and 100 will be full height. Make sure you have filled in your Google Maps API inside Appearance > Theme Options.", 'thevoux')
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Map Zoom', 'thevoux' ),
			'param_name'     => 'zoom',
			'value'			 => '0',
			'description'    => esc_html__( 'Set map zoom level. Leave 0 to automatically fit to bounds.', 'thevoux' )
		),
		array(
			'type'           => 'checkbox',
			'heading'        => esc_html__( 'Map Controls', 'thevoux' ),
			'param_name'     => 'map_controls',
			'std'            => 'panControl, zoomControl, mapTypeControl, scaleControl',
			'value'          => array(
				esc_html__('Pan Control', 'thevoux')             => 'panControl',
				esc_html__('Zoom Control', 'thevoux')            => 'zoomControl',
				esc_html__('Map Type Control', 'thevoux')        => 'mapTypeControl',
				esc_html__('Scale Control', 'thevoux')           => 'scaleControl',
				esc_html__('Street View Control', 'thevoux')     => 'streetViewControl'
			),
			'description'    => esc_html__( 'Toggle map options.', 'thevoux' )
		),
		array(
			'type'           => 'dropdown',
			'heading'        => esc_html__( 'Map Type', 'thevoux' ),
			'param_name'     => 'map_type',
			'std'            => 'roadmap',
			'value'          => array(
				esc_html__('Roadmap', 'thevoux')   => 'roadmap',
				esc_html__('Satellite', 'thevoux') => 'satellite',
				esc_html__('Hybrid', 'thevoux')    => 'hybrid',
			),
			'description' => esc_html__( 'Choose map style.', 'thevoux' )
		),
		array(
			'type' => 'textarea_raw_html',
			'heading' => esc_html__( 'Map Style', 'thevoux' ),
			'param_name' => 'map_style',
			'description' => esc_html__( 'Paste the style code here. Browse map styles in https://snazzymaps.com', 'thevoux' )
		),
	),
	"description" => esc_html__("Insert your Contact Map", 'thevoux' ),
	"js_view" => 'VcColumnView'
) );

vc_map( array(
	"name" => esc_html__("Contact Map Location", 'thevoux'),
	"base" => "thb_contactmap_pin",
	"icon" => "thb_vc_ico_contactmap",
	"class" => "thb_vc_sc_contactmap",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"as_child"         => array('only' => 'thb_contactmap'),
	"params"           => array(
		array(
			'type'           => 'attach_image',
			'heading'        => esc_html__( 'Marker Image', 'thevoux' ),
			'param_name'     => 'marker_image',
			'description'    => esc_html__( 'Add your Custom marker image or use default one.', 'thevoux' )
		),
		array(
			'type'           => 'checkbox',
			'heading'        => esc_html__( 'Retina Marker', 'thevoux' ),
			'param_name'     => 'retina_marker',
			'std'            => '',
			'value'          => array(
				esc_html__("Yes", 'thevoux') => 'yes',
			),
			'description'    => esc_html__( 'Enabling this option will reduce the size of marker for 50%, example if marker is 32x32 it will be 16x16.', 'thevoux' )
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Latitude', 'thevoux' ),
			'admin_label' 	 => true,
			'param_name'     => 'latitude',
			'description'    => esc_html__( 'Enter latitude coordinate. To select map coordinates <a href="http://www.latlong.net/convert-address-to-lat-long.html" target="_blank">click here</a>.', 'thevoux' ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Longitude', 'thevoux' ),
			'admin_label' 	 => true,
			'param_name'     => 'longitude',
			'description'    => esc_html__( 'Enter longitude coordinate.', 'thevoux' ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Marker Title', 'thevoux' ),
			'param_name'     => 'marker_title',
		),
		array(
			'type'           => 'textarea',
			'heading'        => esc_html__( 'Marker Description', 'thevoux' ),
			'param_name'     => 'marker_description',
		)
	)
) );

class WPBakeryShortCode_thb_contactmap extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_contactmap_pin extends WPBakeryShortCode {}

// Content box shortcode
vc_map( array(
	"name" => esc_html__("Content Box", 'thevoux'),
	"base" => "thb_contentbox",
	"icon" => "thb_vc_ico_contentbox",
	"class" => "thb_vc_sc_contentbox",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
			"type" => "attach_image", //attach_images
			"heading" => esc_html__("Top Image", 'thevoux'),
			"param_name" => "image",
			"description" => esc_html__("The image to show at the top.", 'thevoux')
		),
		array(
		  "type" => "vc_link",
		  "heading" => esc_html__("Link Content Box?", 'thevoux'),
		  "param_name" => "link",
		  "description" => esc_html__("Enter url if you want this content box to have link.", 'thevoux')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Heading", 'thevoux'),
			"param_name" => "heading",
			"admin_label" => true
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Heading Color", 'thevoux'),
			"param_name" => "heading_color",
			"description" => esc_html__("You can change the heading color from here", 'thevoux')
		),
		array(
			"type" => "textarea",
			"heading" => esc_html__("Content", 'thevoux'),
			"param_name" => "content"
		),
		array(
		  "type"              => "colorpicker",
		  "holder"            => "div",
		  "heading"           => esc_html__("Content Color", 'thevoux'),
		  "param_name"        => "content_color",
		  "admin_label" => false,
		),
		$thb_animation_array
	),
	"description" => esc_html__("Content boxes with images", 'thevoux')
) );

// Gap shortcode
vc_map( array(
	"name" => esc_html__("Gap", 'thevoux'),
	"base" => "thb_gap",
	"icon" => "thb_vc_ico_gap",
	"class" => "thb_vc_sc_gap",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Gap Height", 'thevoux'),
		  "param_name" => "height",
		  "admin_label" => true,
		  "description" => esc_html__("Enter height of the gap in px.", 'thevoux')
		)
	),
	"description" => esc_html__("Add a gap to seperate elements", 'thevoux')
) );

// Icon List shortcode
vc_map( array(
	"name" => esc_html__("Icon List", 'thevoux'),
	"base" => "thb_iconlist",
	"icon" => "thb_vc_ico_iconlist",
	"class" => "thb_vc_sc_iconlist",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'thevoux' ),
			'param_name' => 'icon',
			'value' => 'fa fa-adjust', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'description' => esc_html__( 'Select icon from library.', 'thevoux' ),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Icon color", 'thevoux'),
			"param_name" => "color"
		),
		$thb_animation_array,
		array(
			"type" => "exploded_textarea",
			"heading" => esc_html__("List Items", 'thevoux'),
			"admin_label" => true,
			"param_name" => "content",
			"description" => esc_html__("Every new line will be treated as a list item", 'thevoux')
		)
	),
	"description" => esc_html__("Add lists with icons", 'thevoux')
) );

// 3D Image shortcode
vc_map( array(
	"name" => esc_html__("3D Hover Image", 'thevoux'),
	"base" => "thb_threedimage",
	"icon" => "thb_vc_ico_threedimage",
	"class" => "thb_vc_sc_threedimage",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
			"type" => "attach_image", //attach_images
			"heading" => esc_html__("Select Image", 'thevoux'),
			"param_name" => "image"
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Full Width?", 'thevoux'),
			"param_name" => "full_width",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"description" => esc_html__("If selected, the image will always fill its container", 'thevoux')
		),
		array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Image alignment", 'thevoux'),
		  "param_name" => "alignment",
		  "value" => array("Align left" => "left", "Align right" => "right", "Align center" => "center"),
		  "description" => esc_html__("Select image alignment.", 'thevoux')
		),
		array(
		  "type" => "vc_link",
		  "heading" => esc_html__("Image link", 'thevoux'),
		  "param_name" => "img_link",
		  "description" => esc_html__("Set Image Link here", 'thevoux'),
		  "admin_label" => true,
		)
	),
	"description" => esc_html__("Add a 3D animated image", 'thevoux')
) );

// Image shortcode
vc_map( array(
	"name" => esc_html__("Image", 'thevoux'),
	"base" => "thb_image",
	"icon" => "thb_vc_ico_image",
	"class" => "thb_vc_sc_image",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
			"type" => "attach_image", //attach_images
			"heading" => esc_html__("Select Image", 'thevoux'),
			"param_name" => "image"
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Retina Size?", 'thevoux'),
			"param_name" => "retina",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "retina_size"
			),
			"description" => esc_html__("If selected, the image will be display half-size, so it looks crisps on retina screens. Full Width setting will override this.", 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Full Width?", 'thevoux'),
			"param_name" => "full_width",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"description" => esc_html__("If selected, the image will always fill its container", 'thevoux')
		),
		$thb_animation_array,
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Image size", 'thevoux'),
		  "param_name" => "img_size",
		  "description" => esc_html__("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", 'thevoux')
		),
		array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Image alignment", 'thevoux'),
		  "param_name" => "alignment",
		  "value" => array("Align left" => "left", "Align right" => "right", "Align center" => "center"),
		  "description" => esc_html__("Select image alignment.", 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Link to Full-Width Image?", 'thevoux'),
			"param_name" => "lightbox",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			)
		),
		array(
		  "type" => "vc_link",
		  "heading" => esc_html__("Image link", 'thevoux'),
		  "param_name" => "img_link",
		  "description" => esc_html__("Enter url if you want this image to have link.", 'thevoux'),
		  "dependency" => Array('element' => "lightbox", 'is_empty' => true)
		)
	),
	"description" => esc_html__("Add an animated image", 'thevoux')
) );

// Instagram
vc_map( array(
	"name" => esc_html__("Instagram", 'thevoux'),
	"base" => "thb_instagram",
	"icon" => "thb_vc_ico_instagram",
	"class" => "thb_vc_sc_instagram",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Style", 'thevoux'),
		  "param_name" => "style",
		  "admin_label" => true,
		  "value" => array(
		  	'Grid' => "style1",
		  	'Free Scroll' => "style2"
		  ),
		  "description" => esc_html__("This changes the layouts of the photos", 'thevoux')
		),
	  array(
      "type" => "textfield",
      "heading" => esc_html__("Number of Photos", 'thevoux'),
      "param_name" => "number",
      "admin_label" => true,
      "description" => esc_html__("Number of Instagram Photos to retrieve", 'thevoux')
	  ),
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Columns", 'thevoux'),
			"param_name" => "columns",
			"value" => array(
				'Six Columns' => "6",
				'Five Columns' => "5",
				'Four Columns' => "4",
				'Three Columns' => "3",
				'Two Columns' => "2"
			)
		),
		array(
	    "type" => "checkbox",
	    "heading" => esc_html__("Link Photos to Instagram?", 'thevoux'),
	    "param_name" => "link",
	    "value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
	    "description" => esc_html__("Do you want to link the Instagram photos to instagram.com website?", 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Disable Column Padding", 'thevoux'),
			"param_name" => "column_padding",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "false"
			),
			"description" => esc_html__("You can have columns without spaces using this option"	, 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Low Column Padding", 'thevoux'),
			"param_name" => "low_padding",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "false"
			),
			"description" => esc_html__("You can have columns with smaller spacing. Does not work together with 'Disable Column Padding'", 'thevoux')	
		)
	),
	"description" => esc_html__("Add Instagram Photos", 'thevoux')
) );

// Posts
vc_map( array(
	"name" => esc_html__("Posts Grid", 'thevoux'),
	"base" => "thb_postgrid",
	"icon" => "thb_vc_ico_postgrid",
	"class" => "thb_vc_sc_postgrid",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Style", 'thevoux'),
	      "param_name" => "style",
	      "admin_label" => true,
	      "value" => array(
	      	'Style 1 - Version 1' => "style1",
	      	'Style 1 - Version 2' => "style4",
	      	'Style 1 - Version 3' => "style11",
	      	'Style 2 - Version 1' => "style2",
	      	'Style 2 - Version 2' => "style2-alt",
	      	'Style 2 - Version 3' => "style2-bg",
	      	'Style 3' => "style3",
	      	'Style 5' => "style5",
	      	'Style 6' => "style6",
	      	'Style 7' => "style7",
	      	'Style 8' => "style8",
	      	'Style 9' => "style9",
	      	'Style 10' => "style10"
	      ),
	      "description" => esc_html__("This changes the style of the posts", 'thevoux')
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Add Title?", 'thevoux'),
	  	"param_name" => "add_title",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("If enabled, this will allow you to add a title above the posts", 'thevoux')
	  ),
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Title Style", 'thevoux'),
	      "param_name" => "title_style",
	      "admin_label" => true,
	      "value" => array(
	      	'Style 1' => "style1",
	      	'Style 2' => "style2",
	      	'Style 3' => "style3",
	      	'Style 4' => "style4"
	      ),
	      "description" => esc_html__("This changes the style of the category titles", 'thevoux'),
	      "dependency" => Array('element' => "add_title", 'value' => array('true'))
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Title", 'thevoux'),
	    "param_name" => "title",
	    "description" => esc_html__("Add your own title here", 'thevoux'),
	    "dependency" => Array('element' => "add_title", 'value' => array('true'))
	  ),
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Columns", 'thevoux'),
	      "param_name" => "columns",
	      "admin_label" => true,
	      "value" => array(
	      	'Six Columns' => "6",
	      	'Four Columns' => "4",
	      	'Three Columns' => "3",
	      	'Two Columns' => "2"
	      ),
	      "description" => esc_html__("Select the layout of the posts.", 'thevoux'),
	      "dependency" => Array('element' => "style", 'value' => array('style1', 'style4', 'style11', 'style8', 'style10'))
	  ),
	  array(
	      "type" => "loop",
	      "heading" => esc_html__("Post Source", 'thevoux'),
	      "param_name" => "source",
	      "description" => esc_html__("Set your post source here", 'thevoux')
	  ),
	  array(
  	    "type" => "textfield",
  	    "heading" => esc_html__("Offset", 'thevoux'),
  	    "param_name" => "offset",
  	    "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
  	),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Featured Posts (Enlarged Post Image)", 'thevoux'),
	    "param_name" => "featured_index",
	    "description" => esc_html__("Enter the number for which posts to show as Featured (For ex, entering 1,3,5 will make those posts appear larger, these are not post IDs, just the number in which they appear)", 'thevoux'),
	    "dependency" => Array('element' => "style", 'value' => array('style2', 'style2-alt'))
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Ajax Pagination", 'thevoux'),
	  	"param_name" => "pagination",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("If enabled, this will show pagination underneath. >Offset setting does not work.", 'thevoux')
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Disable Post Excrepts", 'thevoux'),
	  	"param_name" => "disable_excerpts",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("You can hide the post excerpts here", 'thevoux'),
	  	"dependency" => Array('element' => "style", 'value' => array('style1'))
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Disable Post Meta", 'thevoux'),
	  	"param_name" => "disable_postmeta",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("You can hide the post meta here", 'thevoux'),
	  	"dependency" => Array('element' => "style", 'value' => array('style1'))
	  )
	),
	"description" => esc_html__("Display your posts in different grid layouts.", 'thevoux')
) );

// Posts Carousel
vc_map( array(
	"name" => esc_html__("Posts Carousel", 'thevoux'),
	"base" => "thb_postcarousel",
	"icon" => "thb_vc_ico_postcarousel",
	"class" => "thb_vc_sc_postcarousel",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1' => "style1",
		    	'Style 2' => "style2",
		    	'Style 3' => "style3",
		    	'Style 4' => "style4",
		    	'Style 5' => "style5",
		    	'Style 6' => "style6",
		    	'Style 7' => "style7",
		    	'Style 8' => "style8",
		    	'Style 9' => "style9",
		    	'Style 10' => "style10",
		    	'Style 11' => "style11"
		    ),
		    "description" => esc_html__("This changes the style of the posts", 'thevoux')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Columns", 'thevoux'),
			"param_name" => "columns",
			"value" => array(
				'Six Columns' => "6",
				'Five Columns' => "5",
				'Four Columns' => "4",
				'Three Columns' => "3",
				'Two Columns' => "2",
				'One Columns' => "1"
			),
			"description" => esc_html__("Select the layout.", 'thevoux')
		),
		array(
		    "type" => "loop",
		    "heading" => esc_html__("Post Source", 'thevoux'),
		    "param_name" => "source",
		    "description" => esc_html__("Set your post source here", 'thevoux')
		),
		array(
		    "type" => "textfield",
		    "heading" => esc_html__("Offset", 'thevoux'),
		    "param_name" => "offset",
		    "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Centered Slides?", 'thevoux'),
			"param_name" => "center",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"std" => "true",
			"description" => esc_html__("When enabled shows the next and previous slides on the sides.", 'thevoux'),
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Pagination", 'thevoux'),
			"param_name" => "pagination",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"description" => esc_html__("If enabled, this will show pagination circles underneath", 'thevoux'),
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Navigation Arrows", 'thevoux'),
			"param_name" => "navigation",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"description" => esc_html__("If enabled, this will show navigation arrows on the side", 'thevoux'),
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Add Title?", 'thevoux'),
			"param_name" => "add_title",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"description" => esc_html__("If enabled, this will allow you to add a title above the posts", 'thevoux')
		),
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Title Style", 'thevoux'),
		    "param_name" => "title_style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1' => "style1",
		    	'Style 2' => "style2",
		    	'Style 3' => "style3",
		    	'Style 4' => "style4"
		    ),
		    "description" => esc_html__("This changes the style of the category titles", 'thevoux'),
		    "dependency" => Array('element' => "add_title", 'value' => array('true'))
		),
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Title", 'thevoux'),
		  "param_name" => "title",
		  "description" => esc_html__("Add your own title here", 'thevoux'),
		  "dependency" => Array('element' => "add_title", 'value' => array('true'))
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Auto Play", 'thevoux'),
			"param_name" => "autoplay",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "true"
			),
			"std" => "true",
			"description" => esc_html__("If enabled, the carousel will autoplay.", 'thevoux'),
			"dependency" => Array('element' => "thb_carousel", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Speed of the AutoPlay", 'thevoux'),
			"param_name" => "autoplay_speed",
			"value" => "4000",
			"description" => esc_html__("Speed of the autoplay, default 4000 (4 seconds)", 'thevoux'),
			"dependency" => Array('element' => "autoplay", 'value' => array('true'))
		),
	),
	"description" => esc_html__("Display Posts from your blog in a Carousel", 'thevoux')
) );

// Posts Category
vc_map( array(
	"name" => esc_html__("Posts Category", 'thevoux'),
	"base" => "thb_postcategory",
	"icon" => "thb_vc_ico_postcategory",
	"class" => "thb_vc_sc_postcategory",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1 - Version 1' => "style1",
		    	'Style 1 - Version 2' => "style1-alt",
		    	'Style 1 - Version 3' => "style7",
		    	'Style 2' => "style2",
		    	'Style 3 - Version 1' => "style3",
		    	'Style 3 - Version 2' => "style3-alt",
		    	'Style 3 - Version 3' => "style3-nothumbs",
		    	'Style 4' => "style4",
		    	'Style 5' => "style5",
		    	'Style 6' => "style6",
		    	
		    ),
		    "description" => esc_html__("This changes the style of the category posts", 'thevoux')
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Add Title?", 'thevoux'),
			"param_name" => "add_title",
			"value" => array(
				esc_html__("Yes", 'thevoux') =>"true"
			),
			"std" => "true",
			"description" => esc_html__("If enabled, this will add the category title on top.", 'thevoux')
		),
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Title Style", 'thevoux'),
		    "param_name" => "title_style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1' => "style1",
		    	'Style 2' => "style2",
		    	'Style 3' => "style3",
		    	'Style 4' => "style4",
		    	'Style 5' => "style5"
		    ),
		    "description" => esc_html__("This changes the style of the category titles", 'thevoux'),
		    "dependency" => Array('element' => "add_title", 'value' => array('true'))
		),
		array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Post Categories", 'thevoux'),
		  "param_name" => "cat",
		  "value" => thb_blogCategories(),
		  "description" => esc_html__("Which category would you like to show?", 'thevoux')
		),
		array(
		  "type" => "textfield",
		  "heading" => esc_html__("Offset", 'thevoux'),
		  "param_name" => "offset",
		  "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
		)
	),
	"description" => esc_html__("Display a Category with posts", 'thevoux')
) );

// Post Masonry
vc_map( array(
	"name" => esc_html__("Posts Masonry", 'thevoux'),
	"base" => "thb_postmasonry",
	"icon" => "thb_vc_ico_postmasonry",
	"class" => "thb_vc_sc_postmasonry",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Style 1' => "style1",
		    	'Style 2' => "style2",
		    	'Style 3' => "style3",
		    	'Style 4' => "style4"
		    ),
		    "description" => esc_html__("Select the style of the masonry.", 'thevoux')
		),
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Columns", 'thevoux'),
		    "param_name" => "columns",
		    "admin_label" => true,
		    "value" => array(
		    	'Four Columns' => "large-3",
		    	'Three Columns' => "large-4",
		    	'Two Columns' => "large-6"
		    ),
		    "description" => esc_html__("Select the layout of the masonry.", 'thevoux')
		),
		array(
		    "type" => "loop",
		    "heading" => esc_html__("Post Source", 'thevoux'),
		    "param_name" => "source",
		    "description" => esc_html__("Set your post source here", 'thevoux')
		),
		array(
		    "type" => "textfield",
		    "heading" => esc_html__("Offset", 'thevoux'),
		    "param_name" => "offset",
		    "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
		),
		array(
		    "type" => "checkbox",
		    "heading" => esc_html__("Add Load More Button?", 'thevoux'),
		    "param_name" => "loadmore",
		    "value" => array(
		    		esc_html__("Yes", 'thevoux') =>"true"
		    	),
		    "description" => esc_html__("Add Load More button at the bottom", 'thevoux')
		),
	),
	"description" => esc_html__("Show your posts in a masonry grid", 'thevoux')
) );

// Posts Slider
vc_map( array(
	"name" => esc_html__("Posts Slider", 'thevoux'),
	"base" => "thb_postslider",
	"icon" => "thb_vc_ico_postslider",
	"class" => "thb_vc_sc_postslider",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Type", 'thevoux'),
	      "param_name" => "style",
	      "value" => array(
	      	'Style 1' => "featured-style1",
	      	'Style 1 (more-space)' => "featured-style5",
	      	'Style 2' => "featured-style2",
	      	'Style 3' => "featured-style3",
	      	'Style 4' => "featured-style8",
	      	'Style 5' => "featured-style9",
	      	'Style 5 with offset' => "featured-style9 offset",
	      	'Style 6' => "featured-style10",
	      	'Style 7' => "featured-style11",
	      	'Style 8' => "featured-style12",
	      	'Style 9' => "featured-style13",
	      	'Style 10' => "featured-style14" // WIP
	      	),
	      "admin_label" => true,
	      "description" => esc_html__("Select the slider style.", 'thevoux')
	  ),
	  array(
	      "type" => "loop",
	      "heading" => esc_html__("Post Source", 'thevoux'),
	      "param_name" => "source",
	      "description" => esc_html__("Set your post source here", 'thevoux')
	  ),
	  array(
	      "type" => "textfield",
	      "heading" => esc_html__("Offset", 'thevoux'),
	      "param_name" => "offset",
	      "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux')
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Pagination", 'thevoux'),
	  	"param_name" => "pagination",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("If enabled, this will show pagination circles underneath", 'thevoux'),
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Navigation Arrows", 'thevoux'),
	  	"param_name" => "navigation",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("If enabled, this will show navigation arrows on the side", 'thevoux'),
	  )
	),
	"description" => esc_html__("Display Posts from your blog in a Slider", 'thevoux')
) );

// Pricing Table Parent
vc_map( array(
	"name" => esc_html__("Pricing Table", 'thevoux'),
	"base" => "thb_pricing_table",
	"icon" => "thb_vc_ico_pricing_table",
	"class" => "thb_vc_sc_pricing_table",
	"content_element"	=> true,
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"as_parent" => array('only' => 'thb_pricing_column'),
	"params"	=> array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Columns", 'thevoux'),
			"param_name" => "thb_pricing_columns",
			"admin_label" => true,
			"value" => array(
				'2 Columns' => "large-6",
				'3 Columns' => "large-4",
				'4 Columns' => "medium-4 large-3",
				'5 Columns' => "medium-6 thb-5",
				'6 Columns' => "medium-4 large-2"
			)
		)
	),
	"description" => esc_html__("Pricing Table", 'thevoux'),
	"js_view" => 'VcColumnView'
) );

vc_map( array(
	"name" => esc_html__("Pricing Table Column", 'thevoux'),
	"base" => "thb_pricing_column",
	"icon" => "thb_vc_ico_pricing_table",
	"class" => "thb_vc_sc_pricing_table",
	"as_child" => array('only' => 'thb_pricing_table'),
	"params"	=> array(
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Highlight?", 'thevoux'),
			"param_name" => "highlight",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "true"
			),
			"description" => esc_html__("If enabled, this column will be hightlighted.", 'thevoux'),
		),
		array(
			'type'           => 'attach_image',
			'heading'        => esc_html__( 'Image', 'thevoux' ),
			'param_name'     => 'image',
			'description'    => esc_html__( 'Select an image if you would like to display one on top.', 'thevoux' )
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__("Retina Size?", 'thevoux'),
			"param_name" => "retina",
			"value" => array(
				esc_html__("Yes", 'thevoux') => "retina_size"
			),
			"description" => esc_html__("If selected, the image will be display half-size, so it looks crisps on retina screens. Full Width setting will override this.", 'thevoux')
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Title', 'thevoux' ),
			'param_name'     => 'title',
			'admin_label'	 => true,
			'description'    => esc_html__( 'Title of this pricing column', 'thevoux' ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Price', 'thevoux' ),
			'param_name'     => 'price',
			'description'    => esc_html__( 'Price of this pricing column.', 'thevoux' ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Sub Title', 'thevoux' ),
			'param_name'     => 'sub_title',
			'description'    => esc_html__( 'Some information under the price.', 'thevoux' ),
		),
		array(
			'type'           => 'textarea_html',
			'heading'        => esc_html__( 'Description', 'thevoux' ),
			'param_name'     => 'content',
			'description'    => esc_html__( 'Include a small description for this box, this text area supports HTML too.', 'thevoux' ),
		),
		array(
			'type'           => 'vc_link',
			'heading'        => esc_html__( 'Pricing CTA Button', 'thevoux' ),
			'param_name'     => 'link',
			'description'    => esc_html__( 'Button at the end of the pricing table.', 'thevoux' ),
		),
	),
	"description" => esc_html__("Add a pricing table", 'thevoux')
) );

class WPBakeryShortCode_thb_pricing_table extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_pricing_column extends WPBakeryShortCode {}

// Subscription shortcode
vc_map( array(
	"name" => esc_html__("Subscription Form", 'thevoux'),
	"base" => "thb_subscribe",
	"icon" => "thb_vc_ico_subscribe",
	"class" => "thb_vc_sc_subscribe",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params" => array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Vertical' => "style1",
		    	'Horizontal' => "style2",
		    	'Inline' => "style3"
		    ),
		    "description" => esc_html__("This changes the style of the subscribe form", 'thevoux')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Title", 'thevoux'),
			"admin_label" => true,
			"param_name" => "title"
		),
		array(
			"type" => "textarea_html",
			"heading" => esc_html__("Description", 'thevoux'),
			"param_name" => "content"
		)
	),
	"description" => esc_html__("Add a subscription form", 'thevoux')
) );

// Video Playlist
vc_map( array(
	"name" => esc_html__("Video Playlist", 'thevoux'),
	"base" => "thb_videos",
	"icon" => "thb_vc_ico_videos",
	"class" => "thb_vc_sc_videos",
	"category" => esc_html__("by Fuel Themes", 'thevoux'),
	"params"	=> array(
		array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Style", 'thevoux'),
		    "param_name" => "style",
		    "admin_label" => true,
		    "value" => array(
		    	'Horizontal' => "style1",
		    	'Vertical' => "style2"
		    ),
		    "description" => esc_html__("This changes the style of the playlist", 'thevoux')
		),
	  array(
	  	"type" => "dropdown",
	  	"heading" => esc_html__("Post Source", 'thevoux'),
	  	"param_name" => "source",
	  	"value" => array(
	  		'Most Recent' => "most-recent",
	  		'By Category' => "by-category",
	  		'By Tag' => "by-tag",
	  		'By Author' => "by-author",
	  	),
	  	"std" => "most-recent",
	  	"admin_label" => true,
	  	"description" => esc_html__("Select the source of the posts you'd like to show.", 'thevoux')
	  ),
	  array(
	    "type" => "checkbox",
	    "heading" => esc_html__("Post Categories", 'thevoux'),
	    "param_name" => "cat",
	    "value" => thb_blogCategories(),
	    "description" => esc_html__("Which categories would you like to show?", 'thevoux'),
	    "dependency" => Array('element' => "source", 'value' => array('by-category'))
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Number of posts", 'thevoux'),
	    "param_name" => "item_count",
	    "value" => "4",
	    "description" => esc_html__("The number of posts to show.", 'thevoux')
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Tag slugs", 'thevoux'),
	    "param_name" => "tag_slugs",
	    "description" => esc_html__("Enter the tag slugs you would like to display seperated by comma", 'thevoux'),
	    "dependency" => Array('element' => "source", 'value' => array('by-tag'))
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Author IDs", 'thevoux'),
	    "param_name" => "author_ids",
	    "description" => esc_html__("Enter the Author IDs you would like to display seperated by comma", 'thevoux'),
	    "dependency" => Array('element' => "source", 'value' => array('by-author'))
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Offset", 'thevoux'),
	    "param_name" => "offset",
	    "description" => esc_html__("You can offset your post with the number of posts entered in this setting", 'thevoux'),
	    "dependency" => Array('element' => "source", 'value' => array('most-recent', 'by-category', 'by-tag', 'by-author'))
	  ),
	  array(
	  	"type" => "checkbox",
	  	"heading" => esc_html__("Add Title?", 'thevoux'),
	  	"param_name" => "add_title",
	  	"value" => array(
	  		esc_html__("Yes", 'thevoux') =>"true"
	  	),
	  	"description" => esc_html__("If enabled, this will allow you to add a title above the posts", 'thevoux')
	  ),
	  array(
	      "type" => "dropdown",
	      "heading" => esc_html__("Title Style", 'thevoux'),
	      "param_name" => "title_style",
	      "admin_label" => true,
	      "value" => array(
	      	'Style 1' => "style1",
	      	'Style 2' => "style2",
	      	'Style 3' => "style3",
	      	'Style 4' => "style4"
	      ),
	      "description" => esc_html__("This changes the style of the category titles", 'thevoux'),
	      "dependency" => Array('element' => "add_title", 'value' => array('true'))
	  ),
	  array(
	    "type" => "textfield",
	    "heading" => esc_html__("Title", 'thevoux'),
	    "param_name" => "title",
	    "description" => esc_html__("Add your own title here", 'thevoux'),
	    "dependency" => Array('element' => "add_title", 'value' => array('true'))
	  ),
	),
	"description" => esc_html__("Display your videos in a playlist", 'thevoux')
) );