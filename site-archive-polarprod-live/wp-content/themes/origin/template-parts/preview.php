<?php
  
  $author_id     = get_the_author_meta('ID');
  $avatar        = get_avatar_url($author_id);
  $date          = get_the_date();
  $author_name   = get_author_name();
  $thumbnail_url = get_the_post_thumbnail_url();
?>

<div class='card mb-5'>
	<?php if ( $thumbnail_url ) : ?>
		<a href='<?php the_permalink(); ?>'>
			<img src="<?php echo $thumbnail_url; ?>">
		</a>
	<?php endif ?>
	<div class='card-body'>
    <a href='<?php the_permalink(); ?>'>
      <h2 class='h3 text-dark'><?php the_title(); ?></h2>
    </a>

    <p><em>Published <?php echo $date; ?></em></p>
    
    <?php the_excerpt(); ?>

    <hr>

    <a href='<?php the_permalink(); ?>#comments' class='btn btn-outline-dark btn-sm float-right'>
      <i class='fa fa-comment mr-1'></i>
		<?php 
			printf(get_comments_number());
		?>
		Comments
    </a>

    <a href='<?php the_permalink(); ?>' class='btn btn-outline-dark btn-sm'>
      View Post
    </a>

  </div>
</div>
