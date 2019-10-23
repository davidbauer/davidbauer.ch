<div class="wrapper lightblue" id="latest">
	<div class="content">
		<div class="g g6 gl centered">
			<p class="large">Latest notes</p>
		</div>
		<div class="g g2 gl mobile-hide"></div>
		<div class="g g2">
			
			<p>For more regular updates: <a class="external" href="https://www.davidbauer.ch">Twitter</a>.</p>
			
			<ul>
				<?php query_posts(array('showposts' => 3, 'category_name' => 'Notizblock')); if (have_posts()): ?>
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
	</div>
	<div class="clear"></div>
</div>