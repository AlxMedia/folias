<?php $related = folias_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<h4 class="heading">
	<i class="fas fa-hand-point-right"></i><?php esc_html_e('You may also like...','folias'); ?>
</h4>

<div class="magic-grid">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
	<div class="type-portfolio">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="type-portfolio-thumb">
				<div class="type-portfolio-date">
					<div class="type-portfolio-date-month"><?php the_time('M') ?></div>
					<div class="type-portfolio-date-day"><?php the_time('d') ?></div>
					<div class="type-portfolio-date-year"><?php the_time('Y') ?></div>
				</div>
				<?php if ( get_theme_mod('comment-count','on') == 'on' ): ?>
					<div class="type-portfolio-comments">
						<a class="post-comments" href="<?php comments_link(); ?>"><span><?php comments_number( '0', '1', '%' ); ?></span></a>		
					</div>
				<?php endif; ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('folias-medium'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				</a>
			</div>
		<?php endif; ?>
		<div class="type-portfolio-content">
			<h3 class="type-portfolio-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php if ( has_category() ) : ?>
				<div class="type-portfolio-category"><?php the_category(' / '); ?></div>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
