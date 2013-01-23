<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<![endif]-->

<!-- Open Graph -->
<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="fb:app_id" content=""/>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/touch_icon.png"/>
<!-- Open Graph -->

<meta name="description" content="<?php bloginfo('description'); ?>"/>
<meta name="keywords" content="<?php bloginfo('description'); ?>"/>

<link rel="shortcut icon" sizes="256x256" href="images/favicon.ico"/> 
<link rel="apple-touch-icon-precomposed" href="images/touch_icon.png"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/touch_icon_72x72.png"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/touch_icon_114x114.png"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/touch_icon_144x144.png"/>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ferret.css" media="screen"/>

<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/fancybox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/placeholder.min.js"></script>

<?php wp_head(); ?>
</head>
<body <?php if (!is_front_page()) { ?>class="subpage"<?php } ?>>

<header role="banner">
	<div class="container">
		<div class="row">
			<div class="box-16">
				<div class="mobile-nav"></div>
				<nav role="navigation">
					<ul>
						<li<?php if (is_page('home')) { ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
						<li<?php if (is_page('blog')) { ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
						<li<?php if (is_page('contact')) { ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
					</ul>
				</nav>
			</div><!--/.box-16-->
		</div><!--/.row-->
	</div><!--/.container-->
</header>
