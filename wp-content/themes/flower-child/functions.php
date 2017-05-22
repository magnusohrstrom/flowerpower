<?php

function my_theme_enqueue_styles() {

    $parent_style = 'Flower Power';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_filter( 'flower-power_post_meta', 'remove_post_meta_home_page' );
function remove_post_meta_home_page($post_meta) {
if ( is_home() ) {
	$post_meta = '';
	return $post_meta;
}};

add_filter( 'flower-power_post_info', 'remove_post_info_home_page' );
function remove_post_info_home_page($post_info) {
if ( is_home() ) {
	$post_info = '';
	return $post_info;
}};
remove_action( 'flower-power_entry_header', 'flower-power_post_info', 12 );
remove_action( 'flower-power_entry_footer', 'flower-power_post_meta' );

function google_fonts() {
				wp_register_style( 'OpenSans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' );
				wp_enqueue_style( 'OpenSans' );
		}
//add_action( 'wp_print_styles', 'google_fonts' );

?>
