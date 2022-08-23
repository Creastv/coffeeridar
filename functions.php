<?php
add_theme_support('post-thumbnails');

if ( ! function_exists( 'cr_register_nav_menu' ) ) {
    function cr_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'cr' ),
        ) );
    }
    add_action( 'after_setup_theme', 'cr_register_nav_menu', 0 );
}

function cr_scripts() {
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	wp_enqueue_style( 'cr-custome-style', get_template_directory_uri().'/src/css/style.min.css' ); 
	wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );