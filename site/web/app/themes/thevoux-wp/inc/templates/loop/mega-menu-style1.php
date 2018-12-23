<?php
$vars = $wp_query->query_vars;
$thb_class = array_key_exists('thb_class', $vars) ? $vars['thb_class'] : false;

$classes[] = 'post mega-menu-post';
$classes[] = $thb_class;
?>
<article <?php post_class($classes); ?> itemscope itemtype="http://schema.org/Article">
	<figure class="post-gallery">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('thevoux-style9-2x'); ?>
		</a>
	</figure>
	<div class="post-title entry-header">
		<h6 itemprop="headline"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
	</div>
	<?php do_action('thb_PostMeta'); ?>
</article>