<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php is_home() ? bloginfo('description'):wp_title('');  ?></title>
	<link rel="icon" type="image/png" href="images/favicon_2.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
	
	<!--[if IE 6]>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>css/ie6.css" />
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>css/ie7.css" /> 
	<![endif]-->

	<!--[if IE 6]>
		<script src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG.js"></script>
		<script>
		  /* EXAMPLE */
		  DD_belatedPNG.fix('.nivo-caption, h5, .social_links li a');
		  
		  /* string argument can be any CSS selector */
		  /* .png_bg example is unnecessary */
		  /* change it to what suits you! */
		</script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.4.min.js"></script>

	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<header>
			<a class="header_logo_link" href="index.php"><h1 id="logo">Golden Health & Fitness</h1></a>
			<p class="subtitle">Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis.</p>
		
			<nav>
				<ul id="main_nav">
					<li class="first <?php if($page == "home") echo "active"; ?>"><a href="index.php">Home</a></li>
					<li <?php if($page == "about") echo 'class="active"'; ?>><a href="about.php">About</a></li>
					<li <?php if($page == "blog") echo 'class="active"'; ?>><a href="blog.php">Blog</a></li>
					<li <?php if($page == "pro_tips") echo 'class="active"'; ?>><a href="index.php?pro_tips=1" class="pro_tips_link">Pro Tips</a></li>
					<li class="last <?php if($page == "contact") echo "active"; ?>"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>		
		</header>