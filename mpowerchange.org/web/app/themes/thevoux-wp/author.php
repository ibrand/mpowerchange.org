<?php get_header(); ?>
<div class="row">
	<section class="blog-section small-12 medium-8 columns">
		<section id="authorpage" class="authorpage">
			<?php 
				$author = get_user_by( 'slug', get_query_var( 'author_name' ) ); do_action('thb_author',$author->ID); 
			?>
		</section>
		<div class="row">
			<div class="small-12 columns">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'inc/templates/loop/style1' ); ?>
				<?php endwhile; else : ?>
				  	<?php get_template_part( 'inc/templates/loop/notfound' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php get_template_part( 'inc/templates/loop/post-nav' ); ?>
	</section>
	<?php get_sidebar('author'); ?>
</div>
<?php get_footer(); ?>