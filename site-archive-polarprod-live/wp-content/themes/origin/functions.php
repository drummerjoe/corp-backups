<?php
/**
 * origin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package origin
 */

if ( ! function_exists( 'origin_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function origin_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on origin, use a find and replace
		 * to change 'origin' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'origin', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'origin' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'origin_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'origin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function origin_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'origin_content_width', 640 );
}
add_action( 'after_setup_theme', 'origin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function origin_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'origin' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'origin' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'origin_widgets_init' );


// include custom jQuery
function include_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'include_jquery');

/**
 * Enqueue scripts and styles.
 */
function origin_scripts() {
	wp_enqueue_style( 'origin-style', get_stylesheet_uri() );

	wp_enqueue_script( 'origin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'origin-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'general-site-js', get_template_directory_uri() . '/js/general.js', array(), '20151215', true );
	
	wp_enqueue_script( 'download-js', get_template_directory_uri() . '/js/download.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'origin_scripts' );

function new_excerpt_more($more) {
  return '... <em>(continued)</em>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function my_search_form( $form ) {
	$form = '
	<h3>Search</h3>
	<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	  <div class="input-group mb-3">
	    <div class="input-group-prepend">
	      <span class="input-group-text" id="basic-addon1">
	        <i class="fa fa-search"></i>
	      </span>
	    </div>
	    <input type="text" class="form-control" placeholder="search" aria-label="search" name="s" aria-describedby="basic-addon1" value="' . get_search_query() . '">
	    <input type="submit" class="btn btn-sm btn-primary" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	  </div>
	</form>
	<br/>';

  return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** Remove Comments */
// require get_template_directory() . '/inc/remove_comments.php';

/** Custom Post Types */
// require get_template_directory() . '/inc/events/init.php';
// require get_template_directory() . '/inc/team_members/init.php';
// require get_template_directory() . '/inc/checklists/init.php';
// require get_template_directory() . '/inc/jobs/init.php';
// require get_template_directory() . '/inc/faqs/init.php';

function mo_comment_fields_custom_order( $fields ) {
	$fields=array(
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'A CUSTOM COMMENT LABEL', 'noun', 'textdomain' ) . '</label> ' .
			'<textarea id="comment" name="comment" cols="30" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                     '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . ' /></p>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                     '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' /></p>',
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                     '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
    );
	return $fields;
}

add_filter( 'comment_form', 'mo_comment_fields_custom_order');