<?php
  /*
  * Creating a function to create our CPT
  */
   
  function events_post_type() {
   
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Events', 'Post Type General Name', 'twentyninteen' ),
      'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'twentyninteen' ),
      'menu_name'           => __( 'Events', 'twentyninteen' ), 
      'parent_item_colon'   => __( 'Parent Event', 'twentyninteen' ),
      'all_items'           => __( 'All Events', 'twentyninteen' ),
      'view_item'           => __( 'View Event', 'twentyninteen' ),
      'add_new_item'        => __( 'Add New Event', 'twentyninteen' ),
      'add_new'             => __( 'Add New', 'twentyninteen' ),
      'edit_item'           => __( 'Edit Event', 'twentyninteen' ),
      'update_item'         => __( 'Update Event', 'twentyninteen' ),
      'search_items'        => __( 'Search Event', 'twentyninteen' ),
      'not_found'           => __( 'Not Found', 'twentyninteen' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'twentyninteen' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'events', 'twentyninteen' ),
      'description'         => __( 'Event news and reviews', 'twentyninteen' ),
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
      'menu_icon'           => 'dashicons-tickets-alt',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'events', $args );
  }
   
  add_action( 'init', 'events_post_type', 0 );

  function change_new_event_text( $title ){
   $screen = get_current_screen();

   if  ( 'events' == $screen->post_type ) {
      $title = "Enter event title";
   }

   return $title;
  }

  add_filter( 'enter_title_here', 'change_new_event_text' );
