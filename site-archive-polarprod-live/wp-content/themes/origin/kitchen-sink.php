<?php
  /* Template Name: Kitchen Sink */
  get_header();
?>

<?php

  $arr = array('checklists', 'team_members', 'faqs', 'jobs', 'events', 'post' );
  foreach ($arr as &$value) { ?>

  <?php
    query_posts(array(
      'posts_per_page' => 3,
      'post_type' => array(
        $value, // - a post type.
      ),
    ));
  ?>

  <section class='pad-section'>
    <div class='container'>

      <h2 class='text-capitalize text-jumbo'>
        <?php echo $value; ?>
      </h2>

      <h3>Preview</h3>

      <?php
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/preview', get_post_type() );

        endwhile;
      ?>

      <h3 class='mt-5'>Cards</h3>

      <div class='row'>

        <?php
          /* Start the Loop */
          while ( have_posts() ) :
            the_post();

            echo "<div class='col-sm-4'>";
            get_template_part( 'template-parts/card', get_post_type() );
            echo "</div>";

          endwhile;
        ?>
      </div>
    </div>
  </section>

  <section class='pad-section'>
    <div class='container'>

      <h3>Full Content</h3>

      <?php
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

          echo '<hr>';

        endwhile;
      ?>
    </div>
  </section>

<?php } ?>

