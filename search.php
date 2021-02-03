<?php get_header(); ?>

<?php get_template_part('inc/page-title'); ?>

<div class="content">
	<div class="content-inner magic-wrap">
		
		<div class="magic-grid">
			<?php if ( have_posts() ) : ?>
				
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
				
			<?php endif; ?>
		</div>
		
		<?php get_template_part('inc/pagination'); ?>
		
	</div>
</div><!--/.content-->

<div id="move-sidebar-content"></div>
	
<?php get_footer(); ?>