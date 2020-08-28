<?php
  /* Template Name: Blog Feed */
  get_header();
?>

<!-- <header class='bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/drum-beat-header_crop.png");'>
  <div class='pad-section bg-overlay'>
    <div class='container text-center position-relative'>
      <p class='lead'></p>
      <h1>Drum Beat</h1>
    </div>
  </div>
</header> -->


<!-- <hr class='special'> -->

<section class='pad-section-lg'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-8'>
        <?php

        $args = array(
            // 'posts_per_page'   => -1,
            'order'=> 'DESC',
        );
        
        $query = new WP_Query( $args );

        ?>
        <?php if ( $query->have_posts() ) : ?>

          <?php
            /* Start the Loop */
            while ( $query->have_posts() ) :
              $query->the_post();

              /*
               * Include the Post-Type-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Type name) and that will be used instead.
               */
              get_template_part( 'template-parts/preview', get_post_type() );

            endwhile;

            // the_posts_navigation();

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>
      </div>
      <div class='col-sm-4'>
        <aside class='sticky-top'>
          <div class='mb-4'>
            <?php get_sidebar(); ?>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
