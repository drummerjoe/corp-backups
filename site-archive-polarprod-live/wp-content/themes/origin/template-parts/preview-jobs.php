<?php

  $job_title                  = get_field('title');
  $description                = get_field('description');
  $application_url            = get_field('application_url');
  $categories                 = get_field('categories');

?>

<h2><?php echo $job_title; ?></h2>

<?php echo $description; ?>
<?php the_permalink(); ?>

<?php if( $categories ): ?>

  <ul>

    <?php foreach( $categories as $category ): ?>

      <a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>

    <?php endforeach; ?>

  </ul>

<?php endif; ?>
