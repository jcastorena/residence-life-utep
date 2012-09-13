<?php
add_theme_support( 'post-thumbnails' );
add_editor_style();
add_custom_background();
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Contact Information Panel',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Mision Vision and Goals Section',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Department Banner',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Important Link Bottom',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
?>