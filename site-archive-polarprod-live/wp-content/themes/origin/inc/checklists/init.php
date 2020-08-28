<?php
  /*
  * Creating a function to create our CPT
  */
   
  function checklists_post_type() {
   
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Checklists', 'Post Type General Name', 'origin' ),
      'singular_name'       => _x( 'Checklist', 'Post Type Singular Name', 'origin' ),
      'menu_name'           => __( 'Checklists', 'origin' ), 
      'parent_item_colon'   => __( 'Parent Checklist', 'origin' ),
      'all_items'           => __( 'All Checklists', 'origin' ),
      'view_item'           => __( 'View Checklist', 'origin' ),
      'add_new_item'        => __( 'Add New Checklist', 'origin' ),
      'add_new'             => __( 'Add New', 'origin' ),
      'edit_item'           => __( 'Edit Checklist', 'origin' ),
      'update_item'         => __( 'Update Checklist', 'origin' ),
      'search_items'        => __( 'Search Checklist', 'origin' ),
      'not_found'           => __( 'Not Found', 'origin' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'origin' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'Checklists', 'origin' ),
      'description'         => __( 'Checklist news and reviews', 'origin' ),
      'labels'              => $labels,
      // Features this CPT supports in Post Editor
      'supports'            => array( 'title', 'editor', 'revisions', 'custom-fields', ),
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
      'menu_icon'           => 'dashicons-list-view',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'checklists', $args );
  }
   
  add_action( 'init', 'checklists_post_type', 0 );

  function change_new_checklist_title_text( $title ){
   $screen = get_current_screen();

   if  ( 'checklists' == $screen->post_type ) {
        $title = "Enter their name";
   }

   return $title;
  }

  add_filter( 'enter_title_here', 'change_new_checklist_title_text' );
