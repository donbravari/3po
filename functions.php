<?php

//TITULO
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Inicio', 'textdomain' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}
remove_action('wp_head', '_wp_render_title_tag', 1);


//scripts
function trespo_scripts(){
  
  wp_enqueue_style('trespo_animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), true, false);
  wp_enqueue_style('trespo_owlcss', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), true, false);
  wp_enqueue_style('trespo_owl_theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), true, false);
  wp_enqueue_style('trespo_style', get_template_directory_uri().'/assets/css/style.css', array(), false, false);

  wp_enqueue_script( 'trespo-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), false, true);
  wp_enqueue_script( 'trespo-owljs', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), false, true);
  wp_enqueue_script( 'trespo-functions', get_template_directory_uri() . '/assets/js/trespo.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'trespo_scripts');

?>