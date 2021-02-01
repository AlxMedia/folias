<?php $format = get_post_format(); ?>

<div class="type-portfolio">	
	<div class="type-portfolio-thumb">
		<div class="type-portfolio-date">
			<div class="type-portfolio-date-month"><?php the_time('M') ?></div>
			<div class="type-portfolio-date-day"><?php the_time('d') ?></div>
			<div class="type-portfolio-date-year"><?php the_time('Y') ?></div>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('folias-smallx'); ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
			</a>
		<?php endif; ?>
	</div>
	<div class="type-portfolio-content">
		<h3 class="type-portfolio-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<div class="type-portfolio-category"><?php the_category(' / '); ?></div>
	</div>
</div>