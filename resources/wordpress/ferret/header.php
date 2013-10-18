<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1">

<!-- Open Graph -->
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php bloginfo('url'); ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="fb:app_id" content="">
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/touch_icon.png">
<!-- Open Graph -->

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="<?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
<meta name="twitter:creator" content="">
<meta name="twitter:image:src" content="<?php bloginfo('template_url'); ?>/images/touch_icon_152x152.png">
<meta name="twitter:domain" content="<?php bloginfo('url'); ?>">
<!-- Twitter Card -->

<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="<?php bloginfo('description'); ?>">

<link rel="shortcut icon" sizes="256x256" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/touch_icon.png">
<link rel="apple-touch-icon-precomposed" sizes="80x80" href="<?php bloginfo('template_url'); ?>/images/touch_icon_80x80.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/touch_icon_120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/touch_icon_152x152.png">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ferret.css?v=1" media="screen">

<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/fancybox.min.js"></script>

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
