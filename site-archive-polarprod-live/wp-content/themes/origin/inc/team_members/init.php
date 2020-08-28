<?php
  /*
  * Creating a function to create our CPT
  */
   
  function team_members_post_type() {
   
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Team Members', 'Post Type General Name', 'origin' ),
      'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'origin' ),
      'menu_name'           => __( 'Team Members', 'origin' ), 
      'parent_item_colon'   => __( 'Parent Team Member', 'origin' ),
      'all_items'           => __( 'All Team Members', 'origin' ),
      'view_item'           => __( 'View Team Member', 'origin' ),
      'add_new_item'        => __( 'Add New Team Member', 'origin' ),
      'add_new'             => __( 'Add New', 'origin' ),
      'edit_item'           => __( 'Edit Team Member', 'origin' ),
      'update_item'         => __( 'Update Team Member', 'origin' ),
      'search_items'        => __( 'Search Team Member', 'origin' ),
      'not_found'           => __( 'Not Found', 'origin' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'origin' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'Team Members', 'origin' ),
      'description'         => __( 'Team Member news and reviews', 'origin' ),
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
      'menu_icon'           => 'dashicons-nametag',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'team_members', $args );
  }
   
  add_action( 'init', 'team_members_post_type', 0 );

  function change_new_team_member_title_text( $title ){
   $screen = get_current_screen();

   if  ( 'team_members' == $screen->post_type ) {
        $title = "Enter their name";
   }

   return $title;
  }

  add_filter( 'enter_title_here', 'change_new_team_member_title_text' );