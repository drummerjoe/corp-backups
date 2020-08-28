<?php

  $date             = get_field('date');
  $venue            = get_field('venue');
  $description      = get_field('description');
  $registration_url = get_field('registration_url');

?>

<h1><?php the_title(); ?></h1>

<?php echo $date; ?>
<?php echo $description; ?>
<?php echo $registration_url; ?>
<?php the_permalink(); ?>