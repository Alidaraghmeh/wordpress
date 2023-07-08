<?php
/**
 * Auto Car Dealership Theme Customizer
 *
 * @package Auto Car Dealership
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function vw_bakery_blocks_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_bakery_blocks_custom_controls' );

function vw_bakery_blocks_customize_register( $wp_customize ) {

	//Homepage Settings
	$wp_customize->add_panel( 'vw_bakery_blocks_homepage_panel', array(
		'title' => esc_html__( 'Homepage Settings', 'vw-bakery-blocks' ),
		'panel' => 'vw_bakery_blocks_panel_id',
		'priority' => 20,
	));

	//theme Layouts
	$wp_customize->add_section( 'vw_bakery_blocks_animation_wow', array(
    	'title'      => esc_html__( 'Animation', 'vw-bakery-blocks' ),
		'panel' => 'vw_bakery_blocks_homepage_panel'
	) );

    //Wow Animation
	$wp_customize->add_setting( 'vw_bakery_blocks_animation',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_bakery_blocks_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_bakery_blocks_Toggle_Switch_Custom_Control( $wp_customize, 'vw_bakery_blocks_animation',array(
        'label' => esc_html__( 'Animation ','vw-bakery-blocks' ),
        'description' => __('Here you can disable overall site animation effect','vw-bakery-blocks'),
        'section' => 'vw_bakery_blocks_animation_wow'
    )));
    
}

add_action( 'customize_register', 'vw_bakery_blocks_customize_register' );
