<form method="get" action="<?php bloginfo('home'); ?>/" name="search-form" id="search-form" >
	<p>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="input-text" />
		<input name="submit" type="submit" id="submit" value="Search" />
	</p>
</form>