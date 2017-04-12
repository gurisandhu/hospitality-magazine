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

    // wp_enqueue_script( 'hospitality-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), true, 'all');

    // wp_enqueue_script( 'flexslider-modernizr', get_stylesheet_directory_uri()  . '/flexslider/js/modernizr.js', array(), true, 'all');

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
      'page_title'          =>  'Contacts',
      'menu_title'          => 'Contacts',
      'menu_slug'           =>  'contacts-information',
      'capability'          =>  'edit_posts',
      'icon_url'            =>  'dashicons-businessman',
      'redirect'            =>  false,
      'show_in_nav_menus'   => true,
      'position'            =>  6
    ));
  add_filter('menu_order', 'custom_menu_order', 3);
}

// *************************
// Video Posts
// *************************
  add_action( 'init', 'create_video_posts');

  function create_video_posts() {
    register_post_type( 'video_posts',

      array(
        'labels'    => array(
            'name'                  =>  'Video Posts', 'post type general name',
            'singular_name'         =>  'Video Post', 'post type singular name',
            'add_new'               =>  'Add Video Post',
            'add_new_item'          =>  'Add New Video Post',
            'edit'                  =>  'Edit',
            'edit_item'             =>  'Edit Video Post',
            'all_items'             =>  'All Video Posts',
            'new_item'              =>  'New Video Post',
            'view'                  =>  'View',
            'view_item'             =>  'View Video Post',
            'search_items'          =>  'Search Video Post',
            'not_found'             =>  'No Video Post Found',
            'not_found_in_trash'    =>  'No Video Post found in Trash',
            'parent'                =>  'Parent Story'
        ),
            // 'public'            =>  true,
            'menu_position'     =>  4,
            // 'supports'          =>  array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies'        =>  array( 'create_video_post_taxonomies', 'post_tag'),
            'menu_icon'         =>  'dashicons-video-alt3',
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            // 'has_archive'       => true,
            // 'hierarchical'      => true,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),

        // 'taxonomies'            => array('hire_taxonomies'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        // 'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        )
      );

  }

  add_action( 'init', 'create_video_post_taxonomies', 1);

function create_video_post_taxonomies() {
    register_taxonomy(
            'video_posts_category',
            'video_posts',
            array(
                'labels'   => array(
                    'name'  => 'Video categories',
                    'add_new_item' =>   'Add New Video Category',
                    'edit_item'    =>  'Edit Video Category',
                    'new_item_name' =>  'New Video Category',
                    'new_item'              =>  'New Video Category',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Video Category',
                    'search_items'          =>  'Search Video Categories',
                    'not_found'             =>  'No Video Categories Found',
                    'not_found_in_trash'    =>  'No Video Categories found in Trash',
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );

 }

 add_action( 'init', 'create_tag_taxonomies', 2 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Video Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Video Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Video Tags' ),
    'popular_items' => __( 'Popular Video Tags' ),
    'all_items' => __( 'All Video Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Video Tag' ), 
    'update_item' => __( 'Update Video Tag' ),
    'add_new_item' => __( 'Add New Video Tag' ),
    'new_item_name' => __( 'New Video Tag Name' ),
    'separate_items_with_commas' => __( 'Separate Video tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove Video tags' ),
    'choose_from_most_used' => __( 'Choose from the most used Video tags' ),
    'menu_name' => __( 'Video Tags' ),
  ); 

  register_taxonomy('tag','video_posts',array(
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'video-tag' ),
    'show_in_quick_edit'    => true,
    'hierarchical'              => false, 
    'query_var'                 => 'tag',
    'public'                    => true,
    'show_admin_column'         => true,
    '_builtin'                  => true,
    'show_tagcloud'              => true,
  ));
}




// *************************
// Add current-menu-item in custom taxonomy category
// *************************
// Get menus to play nicely with the submenu script

function mrw_tax_archive_current( $items ) {
    foreach ( $items as $item ) {
        if ( 'taxonomy' !== $item->type )
            continue;

        global $post;

        if( !$post )
            continue;

        $taxonomy = $item->object;
        $taxonomy_term = $item->object_id;
        if (
            ! is_tax( $taxonomy, $taxonomy_term )
            AND ! has_term( $taxonomy_term, $taxonomy, $post->ID )
        )
            continue;

        // Make item current
        $item->current = true;
        $item->classes[] = 'current-menu-item';

        // Loop through ancestors and give them 'parent' or 'ancestor' class
        $active_anc_item_ids = mrw_get_item_ancestors( $item );
        foreach ( $items as $key => $parent_item ) {
            $classes = (array) $parent_item->classes;

            // If menu item is the parent
            if ( $parent_item->db_id == $item->menu_item_parent ) {
                $classes[] = 'current-menu-parent';
                $items[ $key ]->current_item_parent = true;
            }

            // If menu item is an ancestor
            if ( in_array( intval( $parent_item->db_id ), $active_anc_item_ids ) ) {
                $classes[] = 'current-menu-ancestor';
                $items[ $key ]->current_item_ancestor = true;
            }

            $items[ $key ]->classes = array_unique( $classes );
        }
    }

    return $items;
}
add_filter('wp_nav_menu_objects','mrw_tax_archive_current');

function mrw_get_item_ancestors( $item ) {
    $anc_id = absint( $item->db_id );

    $active_anc_item_ids = array();
    while (
        $anc_id = get_post_meta( $anc_id, '_menu_item_menu_item_parent', true )
        AND ! in_array( $anc_id, $active_anc_item_ids )
    )
        $active_anc_item_ids[] = $anc_id;

    return $active_anc_item_ids;
}


 ?>