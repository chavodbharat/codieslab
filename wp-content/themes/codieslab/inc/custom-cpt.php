<?php
/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Services', 'Post Type General Name', 'codieslab' ),
            'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'codieslab' ),
            'menu_name'           => __( 'Services', 'codieslab' ),
            'parent_item_colon'   => __( 'Parent Services', 'codieslab' ),
            'all_items'           => __( 'All Services', 'codieslab' ),
            'view_item'           => __( 'View Services', 'codieslab' ),
            'add_new_item'        => __( 'Add New Services', 'codieslab' ),
            'add_new'             => __( 'Add New', 'codieslab' ),
            'edit_item'           => __( 'Edit Services', 'codieslab' ),
            'update_item'         => __( 'Update Services', 'codieslab' ),
            'search_items'        => __( 'Search Services', 'codieslab' ),
            'not_found'           => __( 'Not Found', 'codieslab' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'codieslab' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'Services', 'codieslab' ),
            'description'         => __( 'Services news and reviews', 'codieslab' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
         //   'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'services', $args );

        /**
         * Case study CPT casestudy Registration 
         */
         // Set UI labels for Custom Post Type
         $labels = array(
            'name'                => _x( 'casestudy', 'Post Type General Name', 'codieslab' ),
            'singular_name'       => _x( 'casestudy', 'Post Type Singular Name', 'codieslab' ),
            'menu_name'           => __( 'casestudy', 'codieslab' ),
            'parent_item_colon'   => __( 'Parent casestudy', 'codieslab' ),
            'all_items'           => __( 'All casestudy', 'codieslab' ),
            'view_item'           => __( 'View casestudy', 'codieslab' ),
            'add_new_item'        => __( 'Add New casestudy', 'codieslab' ),
            'add_new'             => __( 'Add New', 'codieslab' ),
            'edit_item'           => __( 'Edit casestudy', 'codieslab' ),
            'update_item'         => __( 'Update casestudy', 'codieslab' ),
            'search_items'        => __( 'Search casestudy', 'codieslab' ),
            'not_found'           => __( 'Not Found', 'codieslab' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'codieslab' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'casestudy', 'codieslab' ),
            'description'         => __( 'casestudy news and reviews', 'codieslab' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
         //   'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'casestudy', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );

?>