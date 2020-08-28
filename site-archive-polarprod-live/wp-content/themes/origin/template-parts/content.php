<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package origin
 */

  $disable_sidebar = get_field('disable_sidebar');
  $related_posts   = get_field('related_posts');
  $thumbnail_url   = get_the_post_thumbnail_url();

?>

<!-- <section class='pad-section-md'> -->
<!--   <div class='container'> -->
<!--     <header class='bg-cover' style='background-image: url("<?php echo $thumbnail_url; ?>");'>
      <div class='pad-section bg-overlay'>
        <div class='container text-center position-relative'>
          <p class='lead'></p>
        </div>
      </div>
    </header> -->
<!--   </div> -->
<!-- </section> -->

<!-- <hr class='special'> -->

<section class='pad-section-md'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-8'>
		<h2><?php echo the_title(); ?></h2>
        <p><em>Posted on <?php echo get_the_date(); ?></em></p>
		<?php if ( $thumbnail_url ) : ?>
          <figure class="wp-block-image">
            <img src="<?php echo $thumbnail_url; ?>" alt="" class="wp-image-9">
          </figure>
        <?php endif ?>
		  
        <?php the_content(); ?>
		<?php
			$permalink = get_permalink();
			printf(
				   '<ul class="share-social">'
				 . '<li class="share-text">SHARE</li>'
				 . '<li class="share-item"><a style="color:white;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=%s"><i class="fa fa-facebook fa-lg"></i></a></li>'
				 . '<li class="share-item"><a style="color:white;" target="_blank" href="https://twitter.com/share?url=%s"><i class="fa fa-twitter fa-lg"></i></a></li>'
				 . '<li class="share-item"><a style="color:white;" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=%s"><i class="fa fa-linkedin fa-lg"></i></a></li>'
				 . '</ul>'
			   , $permalink, $permalink, $permalink);
			  // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
      </div>
      <div class='col-sm-4'>
      	<?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
