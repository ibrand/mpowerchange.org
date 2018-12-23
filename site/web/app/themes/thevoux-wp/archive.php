<?php get_header(); ?>
<?php get_template_part( 'inc/templates/header/archive-title' ); ?>
<div class="row archive-page-container">
	<div class="small-12 medium-8 columns">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'inc/templates/loop/style1' ); ?>
		<?php endwhile; ?>
			<?php get_template_part( 'inc/templates/loop/post-nav' ); ?>
		<?php else : ?>
		  <?php get_template_part( 'inc/templates/loop/notfound' ); ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar('archive'); ?>
</div>
<?php get_footer(); ?>