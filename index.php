<?php get_header(); ?>

<div class="wrapper cover">
	
	<div class="content">
	
		<div class="g g6 gl centered">
			
		</div>
	
		<!--
		<div class="g g4 gl">I write about technology and its effects on society.</div>
		<div class="g g2 gl"><a class="external" href="http://www.kurzbefehl.ch">Zur Website des Buchs</a><a class="external" href="">Referat buchen</a></div>
		-->
	</div>


</div>

	<?php get_template_part( 'block', 'about'); ?> 
	
	<?php get_template_part( 'block', 'latest'); ?> 
	
	<?php get_template_part( 'block', 'weeklyfilet'); ?> 
	
	<?php get_template_part( 'block', 'instacurate'); ?> 
	
	<?php get_template_part( 'block', 'book'); ?> 
	
	<?php get_template_part( 'block', 'portfolio'); ?> 
	
	<?php get_template_part( 'block', 'connect'); ?> 

<?php get_footer(); ?>