<?php 
	$vars = $wp_query->query_vars;
	$thb_class = array_key_exists('thb_class', $vars) ? $vars['thb_class'] : false;
	$thb_class = array_key_exists('thb_class', $vars) ? $vars['thb_class'] : false;	
	$thb_author = array_key_exists('thb_author', $vars) ? $vars['thb_author'] : false;	
	$thb_noexcerpt = array_key_exists('thb_noexcerpt', $vars) ? $vars['thb_noexcerpt'] : false;	
	$thb_image_size = array_key_exists('thb_image_size', $vars) ? $vars['thb_image_size'] : 'thevoux-style1';	
	$thb_sharestyle = array_key_exists('thb_sharestyle', $vars) ? $vars['thb_sharestyle'] : 'post-links';	
	add_filter( 'excerpt_length', 'thb_supershort_excerpt_length' ); 
	
	
	$classes[] = 'post style1';
	$classes[] = $thb_class;
	
global $post; // < -- globalize, just in case
$field = get_post_meta($post->ID, 'redirect', true);
?>
<article itemscope itemtype="http://schema.org/Article" <?php post_class($classes); ?>>
	<div class="row align-middle">
		<div class="small-12 medium-4 large-5 columns">
			<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-gallery <?php do_action('thb_is_gallery'); ?><?php do_action('thb_is_review'); ?>">
				<?php do_action('thb_post_review_average'); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail($thb_image_size); ?></a>
			</figure>
			<?php } ?>
		</div>
		<div class="small-12 medium-8 large-7 columns">
			<div class="thb-post-style1-content">
				<?php do_action('thb_categories'); ?>
				<aside class="post-author cf">
					<time class="time" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo thb_human_time_diff_enhanced(); ?></time>
				</aside>
				<header class="post-title entry-header">
					<h3 itemprop="headline"><a href="<?php if($field){echo $field; }else{ the_permalink(); } ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</header>
				<?php if ($thb_author) { ?>
				<aside class="post-author">
					<em><?php _e('by', 'thevoux'); ?></em> <?php the_author_posts_link(); ?>
				</aside>
				<?php } ?>
				<div class="post-content small">
					<?php if (!$thb_noexcerpt) { the_content(); } ?>
					<?php /* get_template_part( 'inc/templates/postbits/'.$thb_sharestyle ); */ ?>
				</div>
			</div>
		</div>
	</div>
	<?php do_action('thb_PostMeta'); ?>
</article>