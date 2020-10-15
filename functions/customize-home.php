<?php
if( class_exists('Kirki')) {
//Kirki's Custom CSS Changer Begins Here
Kirki::add_config( 'cta_css', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_panel( 'home', array(
    'priority'    => 35,
    'title'       => esc_html__( 'Homepage Options', 'kirki' ),
) );
Kirki::add_section( 'cta_color', array(
    'title'          => esc_html__( 'Button Color', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 35,
) );
Kirki::add_field( 'cta_css', [
	'type'        => 'color',
	'settings'    => 'color_setting',
	'label'       => __( 'Color Control (hex-only)', 'kirki' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'cta_color',
	'default'     => '#0088CC',
] );

Kirki::add_config( 'icon_css', array(
	'capability'    => 'edit_published_posts',
	'option_type'   => 'theme_mod',
) );
Kirki::add_section( 'icon_color', array(
    'title'          => esc_html__( 'Icon Colors', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 35,
) );
Kirki::add_field( 'icon_css', [
	'type'        => 'color',
	'settings'    => 'color_setting_rgba',
	'label'       => __( 'Color Control (with alpha channel)', 'kirki' ),
	'description' => esc_html__( 'This is a color control - with alpha channel.', 'kirki' ),
	'section'     => 'icon_color',
	'default'     => '#0088CC',
	'choices'     => [
		'alpha' => true,
	],
] );
//Post Grid Options
Kirki::add_config( 'posttype', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_section( 'posttypes', array(
    'title'          => esc_html__( 'Post Container', 'kirki' ),
    'description'    => esc_html__( 'Select which post type you want displayed on the front page.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
Kirki::add_field( 'posttype', [
	'type'        => 'select',
	'settings'    => 'select_setting',
	'label'       => esc_html__( 'Select post type', 'kirki' ),
	'section'     => 'posttypes',
	'default'     => 'option-1',
	'placeholder' => esc_html__( 'Select post type...', 'kirki' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'post' => esc_html__( 'Posts', 'kirki' ),
		'portfolio' => esc_html__( 'Portfolio', 'kirki' ),

	],
] );
Kirki::add_field( 'posttype', [
	'type'     => 'text',
	'settings' => 'text_setting1',
	'label'    => esc_html__( 'Block Text', 'kirki' ),
	'section'  => 'posttypes',
	'default'  => esc_html__( 'Here is the block text you can change', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'posttype', [
	'type'     => 'text',
	'settings' => 'text_setting2',
	'label'    => esc_html__( 'Block Paragraph', 'kirki' ),
	'section'  => 'posttypes',
	'default'  => esc_html__( 'Here is the block paragraph text you can change', 'kirki' ),
	'priority' => 10,
] );

//Repeater
Kirki::add_config( 'block_img', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_section( 'blockimage', array(
    'title'          => esc_html__( 'Image Block', 'kirki' ),
    'description'    => esc_html__( 'Select which post type you want displayed on the front page.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
Kirki::add_field( 'block_img', [
	'type'        => 'image',
	'settings'    => 'image_setting_url',
	'label'       => esc_html__( 'Image Control (URL)', 'kirki' ),
	'description' => esc_html__( 'Upload Your Desired Image.', 'kirki' ),
	'section'     => 'blockimage',
	'default'     => '',
] );
Kirki::add_field( 'block_img', [
	'type'     => 'textfield',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Input Text', 'kirki' ),
	'section'  => 'blockimage',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'block_img', [
	'type'     => 'textarea',
	'settings' => 'textarea_setting',
	'label'    => esc_html__( 'Textarea Control', 'kirki' ),
	'section'  => 'blockimage',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );
}
?>