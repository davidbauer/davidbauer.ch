<div class="wrapper three" id="latest">
	<div class="content">
		<div class="g g6 gl centered">
			<p class="large">Latest notes, recent work.</p>
		</div>
		<div class="g g1 gl mobile-hide"></div>
		<div class="g g2">
			
			<ul>
				<?php query_posts(array('showposts' => 5, 'category_name' => 'Notizblock')); if (have_posts()): ?>
					<?php while (have_posts()) : the_post(); ?>		
						<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
			
				<?php else : ?>
					<p class="string">You broke the interwebs... wow... way to go.. no really you may want to call someone to take a look at it..</p>
					<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','min'); ?></a>
				<?php endif; ?>
				<a href="http://www.davidbauer.ch/category/notizblock/" class="external">More</a>
			</ul>
		</div>
		<div class="g g2">
		
			<ul class="clips">
				<!-- list elements are loaded via Kippt -->
			</ul>
			<a href="https://kippt.com/davidbauer/work" class="external">More</a>
		</div>
	</div>
	<div class="clear"></div>
</div>