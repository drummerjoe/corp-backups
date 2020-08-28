<?php
  /* Template Name: Kitchen Sink */
  get_header();
?>

<section class='pad-section-lg'>
  <div class='container container-md text-center'>
    <img src="<?php echo get_template_directory_uri(); ?>/images/404-image.png" class='mb-5 height-50vh'>

    <h1 class='text-primary text-jumbo mb-0'>404</h1>
    <p class='lead'>The mystical page you're looking for cannot be found.</p>

    <a href="<?php echo get_template_directory_uri(); ?>" class='btn btn-primary-outline'>Return Home</a>
  </div>
</section>

<?php
get_footer();
