<?php
add_action('wp_enqueue_scripts', 'chidhood_scripts');

 function chidhood_scripts() {
     wp_enqueue_style('childhood-style', get_stylesheet_uri());
     wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
 }
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filtere_nav_menu_link_attributes', 10, 3);
function filtere_nav_menu_link_attributes($atts, $item ,$args) {
    if($args->menu ==='Main'){
        $atts['class'] = 'header__nav-item';
       
        if($item->current){
           $atts['class'] .= ' header__nav-item-active';  
        }

        if($item->ID === 161 && (in_category( 3 ) || in_category( 4 ))){
            $atts['class'] .= ' header__nav-item-active'; 
        }
    };

    return $atts;
}
?>