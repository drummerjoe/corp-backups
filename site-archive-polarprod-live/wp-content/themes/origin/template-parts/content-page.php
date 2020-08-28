<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package origin
 */
	
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class='pad-section-md'>
	  <div class='container'>
	    <header class='bg-cover' style='background-image: url("<?php echo $thumbnail_url; ?>");'>
	      <div class='pad-section bg-overlay'>
	        <div class='container text-center position-relative'>
	          <p class='lead'></p>
	          <h1><?php echo the_title(); ?></h1>
	        </div>
	      </div>
	    </header>
	  </div>
	</section>

	<hr class='special'>

	<section class='pad-section-md'>
	  <div class='container'>
	    <?php the_content(); ?>
	  </div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
