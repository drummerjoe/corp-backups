<?php

  $categories                 = get_field('categories');

?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php 
  // check if the flexible content field has rows of data
  if( have_rows('item_group') ):

       // loop through the rows of data
      while ( have_rows('item_group') ) : the_row(); ?>

        <section class='mb-3'>
          <?php
            $type           = get_sub_field('type');
            $description    = get_sub_field('description');
            $label          = get_sub_field('label');
            $label_as_param = str_replace(' ','_', $label);
            $name           = strtolower($label_as_param);
            $options        = get_sub_field('options');
          ?>

          <h3 class='mb-2'><?php echo $label; ?></h3>

          <?php if( $description ) { ?>
            <?php echo $description; ?>
          <?php } ?>

          <?php if( $options ): ?>
            <?php foreach( $options as $option ): ?>

              <?php
                $task_name          = $option['label'];
                $task_name_as_param = str_replace(' ','_', $task_name);
                $task_name_as_name  = strtolower($task_name_as_param);
              ?>

              <?php if ($type == 'check_boxes') { ?>

                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="<?php echo $task_name_as_name; ?>">
                  <label class="custom-control-label" for="<?php echo $task_name_as_name; ?>">
                    <?php echo $task_name; ?>
                  </label>
                </div>

              <?php } else { ?>
                
                <div class="custom-control custom-radio">
                  <input type="radio" id="<?php echo $task_name_as_name; ?>" name="<?php echo $name; ?>" class="custom-control-input">
                  <label class="custom-control-label" for="<?php echo $task_name_as_name; ?>">
                    <?php echo $task_name; ?>
                  </label>
                </div>

              <?php } ?>

            <?php endforeach; ?>
          <?php endif; ?>
        </section>

      <?php endwhile;

  else :

      // no layouts found

  endif;
?>