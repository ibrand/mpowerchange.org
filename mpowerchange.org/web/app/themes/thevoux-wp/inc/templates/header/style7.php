<?php 
	$id = get_the_ID();
	$header_boxed = ot_get_option('header_boxed', 'off');
	$header_menu_color = ot_get_option('header_menu_color', 'light');
	
	$header_transparent = get_post_meta($id, 'header_transparent', true);
	$header_transparent_color = get_post_meta($id, 'header_transparent_color', true);
	$logo = ot_get_option('logo', Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/logo.png');
	
	$classes[] = 'header style7';
	$classes[] = $header_boxed === 'on' ? 'boxed' : '';
	
	$transparent_classes[] = 'header_holder';
	$transparent_classes[] = $header_transparent;
	$transparent_classes[] = $header_transparent_color;
	
	if ($header_transparent === 'on' && $header_transparent_color === 'light-transparent-header') {
		$logo = ot_get_option('logo_light', Thb_Theme_Admin::$thb_theme_directory_uri . 'assets/img/logo_light.png');
	}
?>

<!-- Start Header -->

<div class="<?php echo implode(' ', $transparent_classes); ?>">
<?php if ($header_boxed === 'on') { ?>
<div class="row">
	<div class="small-12 columns">
<?php } ?>
<header class="<?php echo implode(' ', $classes); ?>">
	<div class="nav_holder">
		<div class="row full-width-row align-middle">
			<div class="small-6 columns">
				<?php do_action( 'thb_mobile_toggle', true); ?>
				<?php if (has_nav_menu('subheader-menu')) { ?>
				  <?php wp_nav_menu( array( 'theme_location' => 'subheader-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'subheader-menu' ) ); ?>
				<?php } else { ?>
					<ul class="subheader-menu">
						<li><a href="<?php echo get_admin_url().'nav-menus.php'; ?>">Please assign a menu from Appearance -> Menus</a></li>
					</ul>
				<?php } ?>
			</div>
			<div class="small-6 columns">
					<div class="social-holder <?php echo esc_attr($social_style = ot_get_option('header_socialstyle', 'style1')); ?>">
						<?php do_action( 'thb_secondary_area', false); ?>
					</div>
			</div>
		</div>
	</div>
	<div class="header_top cf">
		<div class="row full-width-row align-middle">
			<div class="small-12 columns logo">
				<a href="<?php echo esc_url(home_url()); ?>" class="logolink" title="<?php bloginfo('name'); ?>">
					<img src="<?php echo esc_url($logo); ?>" class="logoimg" alt="<?php bloginfo('name'); ?>"/>
				</a>
				<nav class="full-menu-container <?php echo esc_attr($header_menu_color); ?>">
					<?php if(has_nav_menu('nav-menu')) { ?>
					  <?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'full-menu nav submenu-style-' . ot_get_option('header_submenu_style', 'style1'), 'walker' => new thb_MegaMenu_tagandcat_Walker ) ); ?>
					<?php } else { ?>
						<ul class="full-menu">
							<li><a href="<?php echo get_admin_url().'nav-menus.php'; ?>">Please assign a menu from Appearance -> Menus</a></li>
						</ul>
					<?php } ?>
				</nav>
			</div>
		</div>
	</div>
</header>
<?php if ($header_boxed === 'on') { ?>
	</div>
</div>
<?php } ?>
</div>
<!-- End Header -->