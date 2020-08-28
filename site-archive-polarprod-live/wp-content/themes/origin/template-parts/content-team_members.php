<?php

  $job_title       = get_field('job_title');
  $bio             = get_field('bio');
  $headshot        = get_field('headshot');

?>

<h1><?php the_title(); ?></h1>

<?php echo $job_title; ?>
<?php echo $bio; ?>
<?php echo $headshot['url']; ?>
<?php the_permalink(); ?>

<?php if( have_rows('social_profiles') ): 

  while( have_rows('social_profiles') ): the_row(); 
    
    $facebook_url  = get_sub_field('facebook_url');
    $twitter_url   = get_sub_field('twitter_url');
    $instagram_url = get_sub_field('instagram_url');
    $linkedin_url  = get_sub_field('linkedin_url');

    ?>

    <ul>
      <?php if ($facebook_url != '') { ?>
        <li><?php echo $facebook_url; ?></li>
      <?php } ?>

      <?php if ($twitter_url != '') { ?>
        <li><?php echo $twitter_url; ?></li>
      <?php } ?>
      
      <?php if ($instagram_url != '') { ?>
        <li><?php echo $instagram_url; ?></li>
      <?php } ?>
      
      <?php if ($linkedin_url != '') { ?>
        <li><?php echo $linkedin_url; ?></li>
      <?php } ?>
    </ul>

  <?php endwhile; ?>
  
<?php endif; ?>
