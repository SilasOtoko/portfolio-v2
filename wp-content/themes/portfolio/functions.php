<?php

add_theme_support( 'post-thumbnails');

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hedgeknight_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hedgeknight_starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hedgeknight_starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hedgeknight_starter_widgets_init' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'register_theme_menus');

function hk_theme_styles(){

  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
  wp_enqueue_style( 'font', "https://fonts.googleapis.com/css?family=Cabin:400,500,600");

}
add_action( 'wp_enqueue_scripts', 'hk_theme_styles' );

function hk_theme_js(){

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

}
add_action('wp_enqueue_scripts', 'hk_theme_js' );

?>
