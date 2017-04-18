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

     wp_enqueue_script( 'hospitality-wistia', 'https://fast.wistia.net/assets/external/E-v1.js', array(), true, 'all');
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
        'public'            =>  true,
        'menu_position'     =>  4,
        'taxonomies'        =>  array('post_tag'),
        'menu_icon'         =>  'dashicons-video-alt3',
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        // 'has_archive'       => true,
        // 'hierarchical'      => true,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
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

add_action( 'init', 'create_video_post_taxonomies');

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


// *************************
// Customise Category Name
// *************************

add_filter( 'get_the_archive_title', function ( $title ) {
        $title = single_cat_title( '', false );
    return $title;
});


// *************************
// Pagination
// *************************
function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul class="pagination">' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-angle-double-left"></i>') );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link('<i class="fa fa-angle-double-right"></i>') );

    echo '</ul>' . "\n";

}

?>