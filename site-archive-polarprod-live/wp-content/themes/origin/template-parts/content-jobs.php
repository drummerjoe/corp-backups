<?php

  $job_title                  = get_field('title');
  $description                = get_field('description');
  $application_url            = get_field('application_url');
  $disable_sidebar     = get_field('disable_sidebar');
  $categories                 = get_field('categories');

?>

<div class='row'>
  <div class='col-sm-8 <?php if ($disable_sidebar) { ?>offset-sm-2<?php } ?>'>
    <h1><?php echo $job_title; ?></h1>

    <?php echo $description; ?>
    <a href="<?php echo $application_url; ?>" target='_blank' class='btn btn-primary'>Apply now</a>
  </div>
  <?php if ($disable_sidebar) { ?>
  <?php } else { ?>
    <div class='col-sm-4'>
      
      <?php get_sidebar(); ?>
      
    </div>
  <?php } ?>
</div>

<?php if( $categories ): ?>

  <ul>

    <?php foreach( $categories as $category ): ?>

      <a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>

    <?php endforeach; ?>

  </ul>

<?php endif; ?>
