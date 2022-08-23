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
    
 if(is_page( 38 ) ){
      wp_enqueue_style( 'cr-svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
      wp_enqueue_script('cr-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
      wp_enqueue_script( 'cr-bikes', get_template_directory_uri() . '/src/js/bikes.js', array(), '20130457', true );
  }
}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );

require get_template_directory() . '/inc/cpt.php';


function dynamic_field_values ( $tag, $unused ) {

    if ( $tag['name'] != 'bike' )
        return $tag;
    $args = array (
        'numberposts'   => -1,
        'post_type'     => 'bikes',
        'orderby'       => 'title',
        'order'         => 'ASC',
    );
    $custom_posts = get_posts($args);
    if ( ! $custom_posts )
        return $tag;
    foreach ( $custom_posts as $custom_post ) {
        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }
    return $tag;
}

add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 10, 2);