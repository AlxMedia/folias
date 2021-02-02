<?php $format = get_post_format(); ?>

<div class="featured-item">
	<div class="featured-item-left">
		<div class="featured-item-bottom">
			<div class="featured-item-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
			<h2 class="featured-item-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="featured-item-category"><?php the_category(' / '); ?></div>
			<?php if (get_theme_mod('excerpt-length','16') != '0'): ?>
				<div class="featured-item-excerpt">
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="featured-item-right" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_post_thumbnail_url('folias-square'); ?>');">
		<a class="featured-item-link" href="<?php the_permalink(); ?>" rel="bookmark"></a>
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
	</div>
</div>