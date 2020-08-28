<?php

  $date             = get_field('date');
  $venue            = get_field('venue');
  $description      = get_field('description');
  $registration_url = get_field('registration_url');

?>

<h2><?php the_title(); ?></h2>

<?php echo $date; ?>
<?php echo $venue; ?>
<?php echo $description; ?>
<?php echo $registration_url; ?>
<?php the_permalink(); ?>
