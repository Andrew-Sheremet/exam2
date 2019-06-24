<?php 
add_action( 'wp_enqueue_scripts','theme_styles' );
add_action( 'wp_enqueue_scripts','theme_scripts' );
add_action( 'after_setup_theme','theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'top Menu' );
}


function theme_styles(){
    wp_enqueue_style( 'styles',get_stylesheet_uri());
    wp_enqueue_style('style',get_template_directory_uri() . '/assets/style.css');
    wp_enqueue_style( 'slick',get_template_directory_uri().'/assets/slick.css');
    wp_enqueue_style( 'slick-theme',get_template_directory_uri().'/assets/slick-theme.css');
    wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/assets/bootstrap.min.css');

}
function theme_scripts() {
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script',get_template_directory_uri() . '/assets/script.js', array('jquery'),null,true );
	wp_enqueue_script( 'slick',get_template_directory_uri() . '/assets/slick.min.js', array('jquery'),null,true );
  
}    

?>