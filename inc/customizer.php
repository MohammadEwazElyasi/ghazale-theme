<?php
/**
 * sh_ghazale Theme Customizer
 *
 * @package sh_ghazale
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sh_ghazale_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'sh_ghazale_settings', array(
        'title'          => __( 'Main Page Settings', 'sh_ghazale' ),
        'description'    => 'These settings are for the main page of the site. (The one that has "Main Home Page" as its template)',
        'priority'       => 35,
    ) );

    $wp_customize->add_setting('title1',array(
       'default'    => 'Title One',
        'sanitize_callback' => 'sanitize_text',
    ));

    $wp_customize->add_control('title1',array(
       'label'  =>__( 'Title 1', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'text1', array(
        'default'        => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio.',
        'sanitize_callback' => 'sanitize_text',
    ) );

    $wp_customize->add_control( 'text1', array(
        'label'   => __( 'Text Box 1', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'button1', array(
       'default'    => 'http://',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( 'button1', array(
       'label'  =>__( 'Button 1 URL', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'  =>'text',
    ));

    $wp_customize-> add_setting('icon1',array(
        'default'    => get_template_directory_uri() .'/images/icon1.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon1',array(
        'label' => __( 'Icon 1', 'sh_ghazale' ),
        'description' =>__( 'Recommended Size for icon: 128x128', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'settings'  => 'icon1',
    )));

    $wp_customize->add_setting('title2',array(
        'default'    => 'Title Two',
        'sanitize_callback' => 'sanitize_text',
    ));

    $wp_customize->add_control('title2',array(
        'label'  =>__( 'Title 2', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'text2', array(
        'default'        => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio.',
        'sanitize_callback' => 'sanitize_text',
    ) );

    $wp_customize->add_control( 'text2', array(
        'label'   => __( 'Text Box 2', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'button2', array(
        'default'    => 'http://',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( 'button2', array(
        'label'  =>__( 'Button 2 URL', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'  =>'text',
    ));

    $wp_customize-> add_setting('icon2',array(
        'default'    => get_template_directory_uri() .'/images/icon2.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon2',array(
        'label' => __( 'Icon 2', 'sh_ghazale' ),
        'description' =>__( 'Recommended Size for icon: 128x128', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'settings'  => 'icon2',
    )));

    $wp_customize->add_setting('title3',array(
        'default'    => 'Title Three',
        'sanitize_callback' => 'sanitize_text',
    ));

    $wp_customize->add_control('title3',array(
        'label'  =>__( 'Title 3', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'text3', array(
        'default'        => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio.',
        'sanitize_callback' => 'sanitize_text',
    ) );

    $wp_customize->add_control( 'text3', array(
        'label'   => __( 'Text Box 3', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'button3', array(
        'default'    => 'http://',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( 'button3', array(
        'label'  =>__( 'Button 3 URL', 'sh_ghazale' ),
        'section' => 'sh_ghazale_settings',
        'type'  =>'text',
    ));

    $wp_customize-> add_setting('icon3',array(
        'default'    => get_template_directory_uri() .'/images/icon3.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon3',array(
        'label' => __( 'Icon 3', 'sh_ghazale' ),
        'description' =>__( 'Recommended Size for icon: 128x128', 'sh_ghazale' ),
        'section'   => 'sh_ghazale_settings',
        'settings'  => 'icon3',
    )));

    function sanitize_text($input){
        return wp_kses_post( balanceTags( $input,true ) );
    }
}
add_action( 'customize_register', 'sh_ghazale_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sh_ghazale_customize_preview_js() {
	wp_enqueue_script( 'sh_ghazale_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'sh_ghazale_customize_preview_js' );
