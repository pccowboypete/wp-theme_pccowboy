<?php

require_once 'custom/objects.php';


function mytheme_resources(){
		wp_enqueue_style('normalize', get_template_directory_uri().'/assets/normalize.css', false,'1.0','all');
		wp_enqueue_style('bootstrap.min.css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', false,'1.0','all');
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
		'primary' => __('Primary Menu'),
		'projects' => __('Project Links'),
		'footer' => __('Footer Menu')
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
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('medium-thumbnail-wide', 400, 300, true);
	add_image_size('banner-image', 920, 210, array('left','top'));
	
}

add_action('after_setup_theme', 'pccowboy_theme_setup');




?>