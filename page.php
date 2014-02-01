<?php get_header(); ?>
<div class="wrapper whiteish" id="article">
	<div class="content">
		<article class="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(__('Read the rest of this post','min').' &raquo;'); ?>
		</article>
		<?php endwhile; else: ?>
			<p class="string"><?php _e('Sorry, there are no posts about that.','min'); ?></p>
	<?php endif; ?>
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