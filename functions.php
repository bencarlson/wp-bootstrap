<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();


//Code for custom background support
add_custom_background();


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

 
?>
