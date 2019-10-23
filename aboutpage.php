<?php /* Template Name: About-Page */ ?>

<?php get_header(); ?>

<?php get_template_part( 'block', 'about-short'); ?> 

<div class="wrapper whiteish" id="article">
	<div class="content">
		<article class="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(__('Read the rest of this post','min').' &raquo;'); ?>
		</article>
		<?php endwhile; else: ?>
			<p class="string"><?php _e('Sorry, there are no posts about that.','min'); ?></p>
	<?php endif; ?>
	</div>
	<div class="clear"></div>
</div>

<?php get_template_part( 'block', 'connect'); ?> 

<?php get_template_part( 'block', 'ydka'); ?> 

<?php get_template_part( 'block', 'weeklyfilet'); ?> 

<?php get_template_part( 'block', 'book'); ?> 

<?php get_footer(); ?>