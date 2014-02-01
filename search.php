<?php get_header(); ?>

<div class="wrapper whiteish">
	<div class="content">
		<div class="g g2 gl"></div>
		<div class="g g2">
	<?php if (have_posts()) : ?>
		
        <?php get_search_form(); ?>
		<?php while (have_posts()) : the_post(); ?>
				<article class="teaserlist">
				<span class="date"><?php the_time('m/j/Y') ?></span>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<!--<?php echo preg_replace('/<p>(.+?)<\/p>/','$1',get_the_excerpt()); ?> <a href="<?php the_permalink() ?>" class="more-link"> Read more</a>-->
				</article>
		<?php endwhile; ?>
		<div class="pagination clearfix">
			<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','min')) ?></div>
			<div class="next"><?php previous_posts_link(__('Newer posts','min').' &raquo;') ?></div>
		</div>
	<?php else : ?>
		<p class="string"><?php _e('You searched for the following','min') ?>: "<strong><?php echo wp_specialchars($s); ?></strong>"</p>
		<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','min'); ?></a>
		<h2 class="error"><?php _e('We didn\'t find anything. Try a different search or look in the categories below.','min'); ?></h2>
	<?php endif; ?>
		</div>
		</div>
	<div class="clear"></div>
</div>
	
<?php get_template_part( 'block', 'about'); ?> 
	
<?php get_template_part( 'block', 'latest'); ?> 

<?php get_template_part( 'block', 'weeklyfilet'); ?> 

<?php get_template_part( 'block', 'instacurate'); ?> 

<?php get_template_part( 'block', 'book'); ?> 

<?php get_template_part( 'block', 'portfolio'); ?> 

<?php get_template_part( 'block', 'connect'); ?> 	
	
<?php get_footer(); ?>