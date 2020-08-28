<?php
  /*
  * Creating a function to create our CPT
  */
   
  function jobs_post_type() {
   
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Jobs', 'Post Type General Name', 'origin' ),
      'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'origin' ),
      'menu_name'           => __( 'Jobs', 'origin' ), 
      'parent_item_colon'   => __( 'Parent Job', 'origin' ),
      'all_items'           => __( 'All Jobs', 'origin' ),
      'view_item'           => __( 'View Job', 'origin' ),
      'add_new_item'        => __( 'Add New Job', 'origin' ),
      'add_new'             => __( 'Add New', 'origin' ),
      'edit_item'           => __( 'Edit Job', 'origin' ),
      'update_item'         => __( 'Update Job', 'origin' ),
      'search_items'        => __( 'Search Job', 'origin' ),
      'not_found'           => __( 'Not Found', 'origin' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'origin' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'Jobs', 'origin' ),
      'description'         => __( 'Jobs', 'origin' ),
      'labels'              => $labels,
      // Features this CPT supports in Post Editor
      'supports'            => array( 'title', 'revisions', 'custom-fields', ),
      // You can associate this CPT with a taxonomy or custom taxonomy. 
      'taxonomies'          => array( 'genres' ),
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
      'menu_icon'           => 'dashicons-sticky',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'jobs', $args );
  }
   
  add_action( 'init', 'jobs_post_type', 0 );

  function change_new_job_title_text( $title ){
   $screen = get_current_screen();

   if  ( 'jobs' == $screen->post_type ) {
      $title = "Enter job title";
   }

   return $title;
  }

  add_filter( 'enter_title_here', 'change_new_job_title_text' );