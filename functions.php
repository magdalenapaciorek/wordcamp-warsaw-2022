<?php
function wordcamp_setup() {
	load_theme_textdomain( 'wordcamp', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary menu', 'wordcamp' )
		)
	);

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	add_theme_support( 'responsive-embeds' );

	// add_theme_support( 'editor-styles' );
	// add_editor_style( 'editor.css' );

}
add_action( 'after_setup_theme', 'wordcamp_setup' );


function wordcamp_frontend_styles() {

	// wp_enqueue_style( 
	// 	'wordcamp-style', 
	// 	get_template_directory_uri() . '/style.css', 
	// 	array(), 
	// 	wp_get_theme()->get( 'Version' ) 
	// );
}
add_action( 'wp_enqueue_scripts', 'wordcamp_frontend_styles' );


function wordcamp_block_editor_scripts() {
	
	// wp_enqueue_script( 
	// 	'editor-custom-scripts', 
	// 	get_theme_file_uri( '/editor.js' ), 
	// 	array( 'wp-blocks', 'wp-dom', 'wp-edit-post' ), 
	// 	wp_get_theme()->get( 'Version' ), 
	// 	true 
	// );
}
add_action( 'enqueue_block_editor_assets', 'wordcamp_block_editor_scripts' );


function wordcamp_remove_core_patterns() {
	// remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', 'wordcamp_remove_core_patterns', 9 );