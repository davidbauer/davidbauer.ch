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
	
	<title><?php wp_title(' | ', 'true','right'); ?>David Bauer</title>
	
	<meta name="title" content="<?php wp_title(' | ', 'true','right'); ?>David Bauer" />
	<meta name="description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('David Bauer. Words | Code | Data'); endif;?>" />
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
	
	<!-- Facebook -->
	<meta property="og:image" content="<?php echo catch_that_image() ?>"/>
	<meta property="og:type" content="article"/> 
	<meta property="og:description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('David Bauer. Words | Code | Data'); endif;?>">
	<meta name="og:title" content="<?php wp_title(''); ?>">
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:site_name" content="David Bauer. Journalist."/>
	<meta property="article:author" content="https://www.facebook.com/davidbauer" />
	<meta property="og:app_id" content="153576157369"/>
	<meta property="fb:admins" content="1306692262" />
	
	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:creator" content="@davidbauer">
	<meta name="twitter:url" content="<?php the_permalink(); ?>">
	<meta name="twitter:title" content="<?php wp_title(''); ?>">
	<meta name="twitter:description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('David Bauer. Journalist.'); endif;?>">
	<meta name="twitter:image:src" content="<?php echo catch_that_image() ?>">
	<meta property="twitter:domain" content="davidbauer.ch" />

<?php wp_head(); ?>

</head>

<body>

<header class="centered">
		
		<a rel="author" href="/" alt="David Bauer"><img class="logo" src="<?php bloginfo('template_url'); ?>/_/img/lelogo.png"></a>
		
		<p>Journalist. Looking for the next big challenge.</p>

		<nav>
		
			<ol>
				<li><a href="#about">About</a></li>
				<li><a href="#latest">Latest</a></li>
				<li><a href="#weeklyfilet">Weekly Filet</a></li>
				<li><a href="#instacurate">Instacurate</a></li>
				<li><a href="#book">Kurzbefehl</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#connect">Connect</a></li>
			</ol>
		
		</nav>
		
		<div class="follow tablet-hide">
			<a href="https://twitter.com/davidbauer" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @davidbauer</a>
		</div>
		
</header>

<div class="container">