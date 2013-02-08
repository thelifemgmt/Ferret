<?php
if($metaRobots) {
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

echo $GLOBALS['hailoJs'];

if ($canonicalURL = RV_Web_PageMeta::get_canonical_url()) { ?>
<link rel="canonical" href="<?= $canonicalURL ?>"/>
<? }
?>
