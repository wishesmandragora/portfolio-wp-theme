<?php
function portfolio_customize_register($wp_customize) {  
$wp_customize->add_panel('slideshows', array(
    'title'          => 'Slideshow',
    'priority'       => 25,
));
$wp_customize->add_section( 'slides_1', array(
    'title'          => 'Slide Image #1',
    'panel'          => 'slideshows',
    'priority'       => 25,
) );
$wp_customize->add_section( 'slides_2', array(
    'title'          => 'Slide Image #2',
    'panel'          => 'slideshows',
    'priority'       => 25,
) );
$wp_customize->add_section( 'slides_3', array(
    'title'          => 'Slide Image #3',
    'panel'          => 'slideshows',
    'priority'       => 25,
) );
//First Slideshow Section
$wp_customize->add_setting( 'first_slide', array(
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_slide', array(
    'label'   => 'First Slide Image',
    'description' => __('Here you can change the first slideshow image.'),
    'section' => 'slides_1',
    'settings'   => 'first_slide',
) ) );
$wp_customize->add_setting( 'text_1', array(
    'capability' => 'edit_theme_options',
    'default' => 'Portfolio Website',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_1', array(
    'type' => 'text',
    'section' => 'slides_1', 
    'label' => __( 'Custom Text' ),
    'description' => __( 'This is a custom text box.' ),
) );
$wp_customize->add_setting( 'text_input1', array(
	'capability' => 'edit_theme_options',
    'default' => 'Go To Appearance -> Customize in order to change the default text of this paragraph.',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_input1', array(
    'type' => 'text',
    'section' => 'slides_1', 
    'label' => __( 'Custom Text Paragraph' ),
    'description' => __( 'This is a custom text box for paragraph.' ),
) );
//Second Slideshow Section
$wp_customize->add_setting( 'second_slide', array(
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_slide', array(
    'label'   => 'Second Slide Image',
    'description' => __('Here you can change the second slideshow image.'),
    'section' => 'slides_2',
    'settings'   => 'second_slide',
) ) );
$wp_customize->add_setting( 'text_2', array(
    'capability' => 'edit_theme_options',
    'default' => 'Built For Your Purposes',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_2', array(
    'type' => 'text',
    'section' => 'slides_2', 
    'label' => __( 'Custom Text' ),
    'description' => __( 'This is a custom text box.' ),
) );
$wp_customize->add_setting( 'text_input2', array(
	'capability' => 'edit_theme_options',
    'default' => 'Go To Appearance -> Customize in order to change the default text of this paragraph.',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_input2', array(
    'type' => 'text',
    'section' => 'slides_2', 
    'label' => __( 'Custom Text Paragraph' ),
    'description' => __( 'This is a custom text box for paragraph.' ),
) );
//Third Slideshow Section
$wp_customize->add_setting( 'third_slide', array(
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'third_slide', array(
    'label'   => 'Third Slide Image',
    'description' => __('Here you can change the three slideshow image.'),
    'section' => 'slides_3',
    'settings'   => 'third_slide',
) ) );
$wp_customize->add_setting( 'text_3', array(
    'capability' => 'edit_theme_options',
    'default' => 'Highly Customizable',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_3', array(
    'type' => 'text',
    'section' => 'slides_3',
    'label' => __( 'Custom Text' ),
    'description' => __( 'This is a custom text box.' ),
) );
$wp_customize->add_setting( 'text_input3', array(
	'capability' => 'edit_theme_options',
    'default' => 'Go To Appearance -> Customize in order to change the default text of this paragraph.',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'text_input3', array(
    'type' => 'text',
    'section' => 'slides_3', 
    'label' => __( 'Custom Text Paragraph' ),
    'description' => __( 'This is a custom text box for paragraph.' ),
) );
}
add_action( 'customize_register', 'portfolio_customize_register' );
?>