<?php get_header(); ?>

<div class="wrapper whiteish">
	<div class="content">
		<div class="g g2 gl"></div>
		<div class="g g2">
			<?php if (have_posts()) : ?>
			 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
			<h2><?php echo single_cat_title(); ?></h2>
			
	 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2><?php the_time('F jS, Y'); ?></h2>
			
		 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2><?php the_time('F, Y'); ?></h2>
			
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2><?php the_time('Y'); ?></h2>
						
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<?php _e('Blog Archives','min'); ?>
			
			<?php } ?>
			<?php while (have_posts()) : the_post(); ?>
				
				<span class="date"><?php the_time('m/j/Y') ?></span>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			
			<?php endwhile; ?>
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','min')) ?></div>
				<div class="next"><?php previous_posts_link(__('Newer posts','min').' &raquo;') ?></div>
			</div>
		<?php else : ?>
			<h2>Not found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
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