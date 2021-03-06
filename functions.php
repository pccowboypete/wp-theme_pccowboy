<?php
if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}


require_once 'XWP/XWP_SetUp.php';


function mytheme_resources(){
		wp_enqueue_style('normalize', get_template_directory_uri().'/assets/normalize.css', false,'1.0','all');
		wp_enqueue_style('bootstrap.min.css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css', false,'1.0','all');
		wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'mytheme_resources');


/**
 * Registers an editor stylesheet for the theme.
 */
function mytheme_editor_style() {
    add_editor_style( get_template_directory_uri().'/css/editor-style.css' );
}
add_action( 'admin_init', 'mytheme_editor_style' );
add_action( 'init',          'mytheme_editor_style' );
add_action( 'pre_get_posts', 'mytheme_editor_style' );



//Register Navigations Menus 
register_nav_menus(array(
		'topbar-home' => __('Top Bar Menu - Home'),
		'primary' => __('Primary Menu Links'),
		'footer' => __('Footer Menu Links')
));


//custom excerpt word count length
function custom_excerpt_length(){
	return 100;
}

add_filter('excerpt_length', 'custom_excerpt_length');


function add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'add_excerpts_to_pages' );



function pccowboy_theme_setup(){

	
	//add featured image support
	add_theme_support('post-thumbnails');
	
	//add image size
	add_image_size('featured_image_xs_wide', 200, 120, true);
	add_image_size('featured_image_xs_square', 200, 150, true);
	
	add_image_size('featured_image_sm_wide', 400, 240, true);
	add_image_size('featured_image_sm_square', 400, 300, true);
	
	add_image_size('featured_image_md_wide', 800, 480, true);
	add_image_size('featured_image_md_square', 800, 600, true);
	
	add_image_size('featured_image_lg_wide', 1200, 120, true);
	add_image_size('featured_image_lg_square', 1200, 900, true);
	
	add_image_size('banner_image', 920, 240, array('left','top'));
	
}

add_action('after_setup_theme', 'pccowboy_theme_setup');




?>