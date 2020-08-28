<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package origin
 */

  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  	return;
  }

  $description = get_bloginfo('description');
  $logo        = get_field('logo', 'options');

?>

<aside id="secondary" class="widget-area sticky-top">
	
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  
</aside><!-- #secondary -->
