<?php
/*
Single Post Template: Quiz
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Newsquiz</title>
	
	<meta name="title" content="Newsquiz" />
	<meta name="description" content="" />
	<meta name="author" content="David Bauer" />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="NIQf1dkbS1GEEwBoNAr3FiSfoFRFZILdt0Ap1Hen0z4" />

	<meta name="Copyright" content="David Bauer" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
		 	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_/css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://www.davidbauer.ch/_rsrc/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	

<?php wp_head(); ?>

</head>

<body>


<div style="padding:10px;background:white;">

<div class="wrapper whiteish quiz" id="article">
	<div>
		<article>
		<section class="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(__('Read the rest of this post','min').' &raquo;'); ?>
		</section>

		<?php endwhile; else: ?>
		</article>
			<p class="string"><?php _e('Sorry, there are no posts about that.','min'); ?></p>
	<?php endif; ?>
	</div>
	<div class="clear"></div>
</div>

</div> <!-- /container -->


<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
		 http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/_/js/jquery-1.10.2.min.js'>\x3C/script>")</script>

<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.js"></script>
<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.php"></script>

<?php wp_footer(); ?>
</body>
</html>