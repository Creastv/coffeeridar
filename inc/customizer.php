<?php 
function inb_customize_register( $wp_customize ) {
    // Header
	$wp_customize->add_section( 'header' , array(
	'title' => __( 'Header', 'cr' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __( 'Upload Logo ', 'cr' ),
		'section' => 'header',
		'settings' => 'logo',
	) ) );

    $wp_customize->add_setting( 'phone' );
    $wp_customize->add_control( 'phone', array(
        'label' => __( 'Nr telefonu', 'cr' ),
        'type' => 'text',
        'section' => 'header',
    ) );

    $wp_customize->add_setting( 'email' );
    $wp_customize->add_control( 'email', array(
        'label' => __( 'Adres email', 'cr' ),
        'type' => 'text',
        'section' => 'header',
    ) );
    // End Header

    // Stickers
	$wp_customize->add_section( 'stickers' , array(
	'title' => __( 'Stickers', 'cr' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'st_link' );
    $wp_customize->add_control( 'st_link', array(
        'label' => __( 'Zobacz na mapie', 'cr' ),
        'type' => 'text',
        'section' => 'stickers',
    ) );
    
    // END Stickers

	// Footer
	$wp_customize->add_section( 'footer' , array(
	'title' => __( 'Footer', 'cr' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'phone_footer' );
    $wp_customize->add_control( 'phone_footer', array(
        'label' => __( 'Nr telefonu', 'cr' ),
        'type' => 'text',
        'section' => 'footer',
    ) );

    $wp_customize->add_setting( 'email_footer' );
    $wp_customize->add_control( 'email_footer', array(
        'label' => __( 'email', 'cr' ),
        'type' => 'text',
        'section' => 'footer',
    ) );

    $wp_customize->add_setting( 'map_footer' );
    $wp_customize->add_control( 'map_footer', array(
        'label' => __( 'Zobacz nas serwis na mapie', 'cr' ),
        'type' => 'text',
        'section' => 'footer',
    ) );

	$wp_customize->add_setting( 'inf_footer' );
    $wp_customize->add_control( 'inf_footer', array(
        'label' => __( 'Info', 'cr' ),
        'type' => 'text',
        'section' => 'footer',
    ) );
    // End Footer

	// Socialmedia
	$wp_customize->add_section( 'socialmedia' , array(
	'title' => __( 'Socialmedia', 'cr' ),
	'priority' => 105,
	) );
	// FB
	$wp_customize->add_setting( 'fb' );

    $wp_customize->add_control( 'fb', array(
        'label' => __( 'Facebook', 'cr' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );
	// Twitter
	$wp_customize->add_setting( 'tw' );

    $wp_customize->add_control( 'tw', array(
        'label' => __( 'Twitter', 'cr' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

    // whatsapp
	$wp_customize->add_setting( 'what' );

    $wp_customize->add_control( 'what', array(
        'label' => __( 'Whatsapp', 'cr' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

	// Twitter
	$wp_customize->add_setting( 'in' );

    $wp_customize->add_control( 'in', array(
        'label' => __( 'Instagram', 'cr' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

	// Twitter
	$wp_customize->add_setting( 'git' );

    $wp_customize->add_control( 'git', array(
        'label' => __( 'Git', 'cr' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

    // End Socialmedia
}

add_action( 'customize_register', 'inb_customize_register' );
