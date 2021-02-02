<?php get_header(); ?>

<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
	<?php get_template_part('inc/page-title'); ?>
<?php endif; ?>

<div class="content">
	<?php get_template_part('inc/featured'); ?>
	<div class="content-inner">
		
		<?php get_template_part('inc/front-widgets-top'); ?>
		
		<div class="magic-grid">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>

			<?php endif; ?>
		</div>
		
		<?php get_template_part('inc/front-widgets-bottom'); ?>
		<?php get_template_part('inc/pagination'); ?>
		
	</div>
</div><!--/.content-->

<div id="move-sidebar-content"></div>

<?php get_footer(); ?>