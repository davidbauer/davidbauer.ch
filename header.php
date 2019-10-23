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
	
	<title>David Bauer. Journalist.</title>
	
	<meta name="title" content="David Bauer" />
	<meta name="description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('David Bauer. Words | Code | Data'); endif;?>" />
	<meta name="author" content="David Bauer" />
	<meta name="google-site-verification" content="NIQf1dkbS1GEEwBoNAr3FiSfoFRFZILdt0Ap1Hen0z4" />

	<meta name="Copyright" content="David Bauer" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
		 	
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_/css/style.css" />
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<!-- 	<link rel="stylesheet" href="https://www.davidbauer.ch/_rsrc/font-awesome/css/font-awesome.min.css"> -->
	
	<!-- Facebook -->
	<meta property="og:image" content="<?php if (is_home()) echo get_template_directory_uri() . "/_/img/cover-glitched.png"; else echo catch_that_image() ?>"/>
	<meta property="og:type" content="<?php if (is_home()) {echo 'website';} else {echo 'article';} ?>"/> 
	<meta name="og:title" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); wp_title(''); endwhile; else: _e('David Bauer. Journalist.'); endif;?>">
	<meta property="og:description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('Words | Code | Data'); endif;?>">
	<meta property="og:url" content="<?php if (is_home()) {echo 'https://www.davidbauer.ch';} else {the_permalink();} ?>" />
	<meta property="og:site_name" content="David Bauer. Journalist."/>
	<meta property="article:author" content="https://www.facebook.com/davidbauer" />
	
	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:creator" content="@davidbauer">
	<meta name="twitter:url" content="<?php if (is_home()) {echo 'https://www.davidbauer.ch';} else {the_permalink();} ?>">
	<meta name="twitter:title" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); wp_title(''); endwhile; else: _e('David Bauer. Journalist.'); endif;?>">
	<meta name="twitter:description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('Words | Code | Data'); endif;?>">
	<meta name="twitter:image:src" content="<?php if (is_home()) echo get_template_directory_uri() . "/_/img/cover-glitched.png"; else echo catch_that_image() ?>">
	<meta property="twitter:domain" content="davidbauer.ch" />
	<link rel="me" href="https://twitter.com/davidbauer">
	<meta name="twitter:dnt" content="on">
	<meta name="twitter:widgets:csp" content="on">

<?php wp_head(); ?>

</head>

<body>

<header class="header centered">
		
		<a rel="author" href="/" alt="David Bauer"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/_/img/lelogo.png"></a>
		
		<p>Head of Visuals, NZZ</p>

		<!--
<nav>
		
			<ol>
				<li><a href="#about">About</a></li>
				<li><a href="#latest">Latest</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#weeklyfilet">Weekly Filet</a></li>
				<li><a href="#ydka">You Don't Know Africa</a></li>
				<li><a href="#book">Speaking</a></li>
				<li><a href="#connect">Connect</a></li>
			</ol>
		
		</nav>
-->
		
</header>

<div class="container">