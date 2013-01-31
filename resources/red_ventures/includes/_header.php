<?php
$currentUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$active = ' class="active"';
$siteName = '';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
<title><?= $headerTitle ?></title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<![endif]-->

<!-- Open Graph -->
<meta property="og:title" content="<?= $headerTitle ?>"/>
<meta property="og:description" content="<?= $metaDescription ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?= $currentUrl ?>"/>
<meta property="og:site_name" content="<?= $headerTitle ?>"/>
<meta property="fb:app_id" content=""/>
<meta property="og:image" content="images/fb_icon.png"/>
<!-- Open Graph -->

<?
if (stristr($_SERVER['SCRIPT_FILENAME'], 'terms-and-conditions') 
|| stristr($_SERVER['SCRIPT_FILENAME'], 'privacy-policy')
|| stristr($_SERVER['SCRIPT_FILENAME'], 'my-account')
|| stristr($_SERVER['SCRIPT_FILENAME'], 'legal') ) {
	echo '<meta name="robots" content="noindex,follow,noodp" />';
} elseif($metaRobots) {
	echo '<meta name="robots" content="' . $metaRobots . '" />';	
} else {
	echo '<meta name="robots" content="index,follow,noodp" />';
}
echo "\n";
if($metaDescription) {
	echo '<meta name="description" content="' . $metaDescription . '"/>';
}
echo "\n";
if ($metaKeywords) {
	echo '<meta name="keywords" content="' . $metaKeywords . '"/>';
}
echo "\n";
?>

<?= $GLOBALS['hailoJs']; ?>

<? if ($canonicalURL = RV_Web_PageMeta::get_canonical_url()) { ?>
<link rel="canonical" href="<?= $canonicalURL ?>"/>
<? } ?>

<link rel="shortcut icon" sizes="256x256" href="/images/favicon.ico"/> 
<link rel="apple-touch-icon-precomposed" href="/images/touch_icon.png"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/touch_icon_72x72.png"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/touch_icon_114x114.png"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/touch_icon_144x144.png"/>

<link rel="stylesheet" href="/css/ferret.css" media="screen"/>
<?= RV_LandingPage::try_find_web_tag('css/experience.css','<link rel="stylesheet" href="/##PATH##" media="screen"/>'); ?>

<script src="/js/modernizr.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="/js/fancybox.min.js"></script>

<? echo RV_webTools::get_js_enabled_script($siteParams->CompanyID); ?>
<? include_once(INCLUDE_DIR . "/ga_async.inc"); ?>

</head>
<body id="top" <?php echo ($page != 'index') ? (isset($bodyClass) ? 'class="subpage '.$bodyClass.'"' : 'class="subpage"') : (isset($bodyClass) ? 'class="'.$bodyClass.'"' : '') ?>>
