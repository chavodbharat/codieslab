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
            'name'                => _x( 'Case Study', 'Post Type General Name', 'codieslab' ),
            'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'codieslab' ),
            'menu_name'           => __( 'Case Study', 'codieslab' ),
            'parent_item_colon'   => __( 'Parent Case Study', 'codieslab' ),
            'all_items'           => __( 'All Case Study', 'codieslab' ),
            'view_item'           => __( 'View Case Study', 'codieslab' ),
            'add_new_item'        => __( 'Add New Case Study', 'codieslab' ),
            'add_new'             => __( 'Add New', 'codieslab' ),
            'edit_item'           => __( 'Edit Case Study', 'codieslab' ),
            'update_item'         => __( 'Update Case Study', 'codieslab' ),
            'search_items'        => __( 'Search Case Study', 'codieslab' ),
            'not_found'           => __( 'Not Found', 'codieslab' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'codieslab' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'Case Study', 'codieslab' ),
            'description'         => __( 'Case Study news and reviews', 'codieslab' ),
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

         // Add new taxonomy, make it hierarchical (like categories)
        $labels1 = array(
            'name' => _x('Case Study Type', 'taxonomy general name', 'codieslab'),
            'singular_name' => _x('Case Study Type', 'taxonomy singular name', 'codieslab'),
            'search_items' => __('Search Case Study Type', 'codieslab'),
            'all_items' => __('All Case Study Type', 'codieslab'),
            'parent_item' => __('Parent Case Study Type', 'codieslab'),
            'parent_item_colon' => __('Parent Case Study Type:', 'codieslab'),
            'edit_item' => __('Edit Case Study Type', 'codieslab'),
            'update_item' => __('Update Case Study Type', 'codieslab'),
            'add_new_item' => __('Add New Case Study Type', 'codieslab'),
            'new_item_name' => __('New Case Study Type Name', 'codieslab'),
            'menu_name' => __('Case Study Type', 'codieslab'),
        );

        $args1 = array(
            'hierarchical' => true,
            'labels' => $labels1,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'casestudy_type'),
        );

    register_taxonomy('casestudy_type', array('casestudy'), $args1);
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );

?>