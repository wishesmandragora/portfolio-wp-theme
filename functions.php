<?php
//Includes
include_once get_theme_file_path( 'functions/class-kirki-installer-section.php' );
include('functions/customizer.php');
include('functions/customize-home.php');
include('functions/ajax.php');

//Register CSS
function portfolio_css() {
    wp_register_style('gfont', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
    wp_enqueue_style('gfont');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main');
    wp_register_style('custom', get_template_directory_uri() . '/custom.css');
    wp_enqueue_style('custom');
    if(is_front_page()) {
        wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');
        wp_enqueue_style('swiper');
    }
    wp_register_style('dark', get_template_directory_uri() . '/assets/css/dark.css');
    wp_enqueue_style('dark');
    wp_register_style('font-icon', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('font-icon');
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('animate');
    wp_register_style('magnfic-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('magnfic-popup');
    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('responsive');
}
add_action('wp_enqueue_scripts', 'portfolio_css');

//Register Javascript
function portfolio_js() {
    if(!is_admin()) {
    wp_deregister_script('jquery'); 
    } 
    wp_register_script('custom-jquery', get_template_directory_uri() . '/assets/js/jquery.js', 'jquery', false, true);
    wp_enqueue_script('custom-jquery');
    wp_register_script('custom-plugins', get_template_directory_uri() . '/assets/js/plugins.js', 'jquery', false, true);
    wp_enqueue_script('custom-plugins');
    wp_register_script('custom-functions', get_template_directory_uri() . '/assets/js/functions.js', 'jquery', false, true);
    wp_enqueue_script('custom-functions');
}
add_action('wp_enqueue_scripts', 'portfolio_js');

//Add Theme Support
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );

//Add image sizes
add_image_size('portfolio', 250,250);


//Add logo to menu
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 400,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'standard-logo', $html );
    $html = str_replace( 'custom-logo', false, $html );

    return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );


//Register Menus
register_nav_menus(
    array(
        'main-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


//Register Sidebars
function portfolio_sidebars() {
    register_sidebar(
        array(
            'name' => 'Footer #1',
            'id' => 'footer-1',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4>',
            'after-title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer #2',
            'id' => 'footer-2',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4">',
            'after-title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer #3',
            'id' => 'footer-3',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4">',
            'after-title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer #4',
            'id' => 'footer-4',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4>',
            'after-title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Sidebar #1',
            'id' => 'sidebar-1',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4>',
            'after-title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Sidebar #2',
            'id' => 'sidebar-2',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4><div class="tagcloud">',
            'after-title' => '</div></h4>'
        )
    );
}
add_action('widgets_init', 'portfolio_sidebars');

//Register Portfolio Custom Post Type
function portfolio_posttype() {

    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'show_in_rest' => true,
            'rest_base' => 'portfolio'
        )
    );
}
add_action('init', 'portfolio_posttype');

//Register Custom Taxonomy Skills
function portfolio_skill_taxonomy() {
    // Labels part for the GUI
      $labels = array(
        'name' => _x( 'Skills', 'taxonomy general name' ),
        'singular_name' => _x( 'Skill', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Skills' ),
        'popular_items' => __( 'Popular Skills' ),
        'all_items' => __( 'All Skills' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Skill' ), 
        'update_item' => __( 'Update Skill' ),
        'add_new_item' => __( 'Add New Skill' ),
        'new_item_name' => __( 'New Skill Name' ),
        'separate_items_with_commas' => __( 'Separate skills with commas' ),
        'add_or_remove_items' => __( 'Add or remove skills' ),
        'choose_from_most_used' => __( 'Choose from the most used skills' ),
        'menu_name' => __( 'Skills' ),
      ); 
    // Now register the non-hierarchical taxonomy like tag
      register_taxonomy('skills','portfolio',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'skill' ),
      ));
    }
    
    add_action( 'init', 'portfolio_skill_taxonomy', 0 );


//REST APi
function getDataFromApi() {
	$json = file_get_contents('https://jsonplaceholder.typicode.com/posts');
	$data =  json_decode($json);

	foreach($data as $post) {
		if(is_page($post->title)) return;
		wp_insert_post(
			[
			'post_title'   => $post->title,
			'post_content' => $post->body
			]);
	}

}
//getDataFromApi();
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>