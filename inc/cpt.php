<?php 
// //////////////////////////////////////////////////////////////bicycles
function cr_bikes_post_types() {

	$labels = array(
		'name'               => 'Bicycles',
		'singular_name'      => 'Bicycles',
		'menu_name'          => 'Bicycles',
		'name_admin_bar'     => 'Bicycles',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Bicycles',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => get_template_directory_uri().'/src/img/admin-crown.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "bikes", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail' ),
		// , 'editor' 
	);
    register_post_type( 'bikes', $args );

}
add_action( 'init', 'cr_bikes_post_types' );