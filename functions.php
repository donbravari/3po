<?php
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Inicio', 'textdomain' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}
remove_action('wp_head', '_wp_render_title_tag', 1);

function trespo_scripts(){
    wp_equeue_style('trespo_style', get_stylesheet_directory_uri().'/assets/css/style.css'. array(), false, false);
    wp_equeue_style('trespo_animate', get_stylesheet_directory_uri().'/assets/css/animate.min.css'. array(), true, false);
    wp_equeue_style('trespo_owl', get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css'. array(), true, true);
    wp_equeue_style('trespo_owl_theme', get_stylesheet_directory_uri().'/assets/css/owl.theme.default.min.css'. array(), true, true);
}
add_action('wp_enqueue_scripts', 'trespo_scripts');

?>