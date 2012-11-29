<?php

// Sidebars
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));


// Featured Images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 580, 9999);


// Shortcodes
function button($atts) {  
    $atts = shortcode_atts(
	array('link' => '',
		  'text' => ''
		), $atts);
		return '<a class="button" href="'.$atts['link'].'">'.$atts['text'].'</a>';
	};
add_shortcode('button', 'button');


// Remove Inlined Recent Comments Styles from Head
add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
};

// Remove Admin Bar
show_admin_bar(false);