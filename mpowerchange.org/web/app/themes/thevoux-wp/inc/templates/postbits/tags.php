<?php 
	$posttags = get_the_tags(); 
	$id = get_the_ID();
	$post_source = get_post_meta($id, 'post_source', true);
	$post_via = get_post_meta($id, 'post_via', true);
?>
<?php if (!empty($posttags) || $post_source !== '' || $post_via !== '') { ?>
<footer class="article-tags entry-footer">
	<?php if ($post_via !== '') { ?>
	<div>
		<strong><?php _e('Via:', 'thevoux'); ?></strong> 
			<?php foreach ($post_via as $source) { ?>
				<a href="<?php echo esc_url($source['post_source_url']); ?>" target="_blank" title="<?php echo esc_attr($source['title']); ?>"><?php echo esc_attr($source['title']); ?></a>
			<?php } ?>
	</div>
	<?php } ?>
	<?php if ($post_source !== '') { ?>
	<div>
		<strong><?php _e('Source:', 'thevoux'); ?></strong> 
			<?php foreach ($post_source as $source) { ?>
				<a href="<?php echo esc_url($source['post_source_url']); ?>" target="_blank" title="<?php echo esc_attr($source['title']); ?>"><?php echo esc_attr($source['title']); ?></a>
			<?php } ?>
	</div>
	<?php } ?>
	<div>
		<strong><?php _e('Tags:', 'thevoux'); ?></strong> 
		<?php
		if ($posttags) {
			$return = '';
			foreach($posttags as $tag) {
				$return .= '<a href="'. get_tag_link($tag->term_id).'" title="'. get_tag_link($tag->name).'">' . $tag->name . '</a>, ';
			}
			echo substr($return, 0, -2);
		} ?>
	</div>
</footer>
<?php } ?>