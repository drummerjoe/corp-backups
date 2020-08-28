<?php

  $answer     = get_field('answer');
  $categories = get_field('categories');

?>

<h2><?php the_title(); ?></h2>

<?php echo $answer; ?>
<?php the_permalink(); ?>

<?php if( $categories ): ?>

  <ul>

    <?php foreach( $categories as $category ): ?>

      <a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>

    <?php endforeach; ?>

  </ul>

<?php endif; ?>
