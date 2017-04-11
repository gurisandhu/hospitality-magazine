<?php 


// *************************
// Trims the text
// *************************
function trimText($string, $repl, $limit){
    if(strlen($string) > $limit){
        return substr($string, 0, $limit) . $repl;
    }
    else{
        return $string;
    }
}

// *************************
// Deque parent Style Sheet
// *************************


add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 200 );
function remove_default_stylesheet() {
    
    wp_dequeue_style( 'parent-style' );
    wp_deregister_style( 'parent-style' );

    wp_register_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', false, '3.3.0' ); 
    wp_enqueue_style( 'child-style' );

}
// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************

function my_styles_scripts(){
    wp_enqueue_style('hospitality-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.7.0');

    wp_enqueue_style('hospitality-font-hind', 'https://fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700');

    wp_enqueue_style('hospitality-font-Lobster', 'https://fonts.googleapis.com/css?family=Lobster');

    wp_enqueue_style( 'flexslider-style' , get_stylesheet_directory_uri() . '/flexslider/css/flexslider.css', array(), '2.0.0', false, 'all');

    wp_enqueue_script( 'hospitality-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), true, 'all');

    wp_enqueue_script( 'flexslider-modernizr', get_stylesheet_directory_uri()  . '/flexslider/js/modernizr.js', array(), true, 'all');

    wp_enqueue_script( 'hospitality-script', get_stylesheet_directory_uri()  . '/compressed/script.js', array(), '2.0.0', true, 'all');

    wp_enqueue_script( 'hospitality-adthis', 'https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58dc3a2c46c34fc1', array(), true, 'all');
}
add_action('template_redirect', 'my_styles_scripts');
//end of styles scripts

// *************************
// Display Main Navigation in admin section
// *************************

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Show tumbnails (feature images)
// add_theme_support('post-thumbnails');


// *************************
// Contact info
// *************************

if (function_exists('acf_add_options_page')){
  $contact_info             = acf_add_options_page(array(
      'page_title'          =>  'Misc. Info',
      'menu_title'          => 'Misc. Info',
      'menu_slug'           =>  'misc-info-settings',
      'capability'          =>  'edit_posts',
      'icon_url'            =>  'dashicons-share',
      'redirect'            =>  false,
      'show_in_nav_menus'   => true,
      'position'            =>  20
    ));
  add_filter('menu_order', 'custom_menu_order', 3);
}


 ?>