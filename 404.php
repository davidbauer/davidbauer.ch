<?php get_header(); ?>
<div class="wrapper glitched">
	
	<div class="content">
	
		<div class="g g1 gl"></div>
		<div class="g g4 centered">
			<p class="error medium">Something went wrong. Don't cry.<br/><a href="/">Go to home page</a> or simply enjoy this beautiful gif.</p>
		</div>
	
	</div>

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