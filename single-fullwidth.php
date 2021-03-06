<?php
/*
Single Post Template: Fullwidth
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php get_header(); ?>
<div class="wrapper whiteish" id="article">
	<div>
		<article>
		<nav class="switch newer mobile-hide"><?php next_post_link('%link','«'); ?> </nav>
		<nav class="switch older mobile-hide"><?php previous_post_link('%link','»'); ?> </nav>
		<section class="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<p class="date">
				<?php $u_time = get_the_time('U'); 
					$u_modified_time = get_the_modified_time('U'); 
					the_time('F j, Y');  
					if ($u_modified_time >= $u_time + 86400) { 
						echo " (updated on "; 
						the_modified_time('F j, Y'); 
						echo ")"; }
				?>
				</p>
				<?php the_content(__('Read the rest of this post','min').' &raquo;'); ?>
		</section>

		<section class="fullwidth"><?php $key="fullwidth"; echo get_post_meta($post->ID, $key, true); ?></section>
		
		<section class="main"><?php comments_template(); ?></section>
		<?php endwhile; else: ?>
		</article>
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

<?php get_template_part( 'block', 'map'); ?> 

<?php get_footer(); ?>