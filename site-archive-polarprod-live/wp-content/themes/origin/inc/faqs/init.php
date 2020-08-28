<?php
  /*
  * Creating a function to create our CPT
  */
   
  function faqs_post_type() {
   
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Frequently Asked Questions', 'Post Type General Name', 'origin' ),
      'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'origin' ),
      'menu_name'           => __( 'FAQs', 'origin' ), 
      'parent_item_colon'   => __( 'Parent FAQ', 'origin' ),
      'all_items'           => __( 'All FAQs', 'origin' ),
      'view_item'           => __( 'View FAQ', 'origin' ),
      'add_new_item'        => __( 'Add New FAQ', 'origin' ),
      'add_new'             => __( 'Add New', 'origin' ),
      'edit_item'           => __( 'Edit FAQ', 'origin' ),
      'update_item'         => __( 'Update FAQ', 'origin' ),
      'search_items'        => __( 'Search FAQ', 'origin' ),
      'not_found'           => __( 'Not Found', 'origin' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'origin' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'faqs', 'origin' ),
      'description'         => __( 'FAQs', 'origin' ),
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
      'menu_icon'           => 'dashicons-buddicons-pm',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'faqs', $args );
  }
   
  add_action( 'init', 'faqs_post_type', 0 );

  function change_new_faq_text( $title ){
   $screen = get_current_screen();

   if  ( 'faqs' == $screen->post_type ) {
      $title = "Enter the frequently asked question";
   }

   return $title;
  }

  add_filter( 'enter_title_here', 'change_new_faq_text' );
