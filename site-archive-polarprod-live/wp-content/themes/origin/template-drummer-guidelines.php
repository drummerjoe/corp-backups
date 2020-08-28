<?php
  /* Template Name: Drummer Guidelines */
  get_header();

  $dynamic_app_store_url  = get_field('dynamic_app_store_url', 'options');
?>

<header class='bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/drum-beat-header_crop.png");'>
  <div class='pad-section bg-overlay'>
    <div class='container text-center position-relative'>
      <p class='lead'></p>
      <h1>Drummer Guidelines</h1>
    </div>
  </div>
</header>


<section class='pad-section-lg'>
  <div class='container container-lg'>

    <h2 class='h3'>When interacting with businesses:</h2>

    <p><span class="text-strong">Be passionate.</span> Drum for the businesses that get you excited, and learn as much as you
    can about what makes them unique, including reading the notes they
    provide. Remember, you are responsible for sharing their story to the world.</p>

    <p><span class="text-strong">Be empathetic.</span> When approaching a business to join Drum understand that they are busy, hard-working individuals just like you. Find the appropriate time and opportunity to present Drum.</p>

    <p><span class="text-strong">Provide feedback.</span> Help your businesses succeed by sharing strategies or types of promotions that are working well. The more they know, the better you do!</p>

    <h2 class='h3'>When interacting with buyers:</h2>

    <p><span class="text-strong">Be respectful.</span> Being pushy or spammy is annoying and hurts your personal brand. In
    contrast, being honest and transparent builds their confidence and trust in
    you.</p>

    <p><span class="text-strong">Be thoughtful.</span> Tailor your offers to Buyers - this establishes a personal connection and makes it more likely they will find an offer they want to redeem.</p>

  </div>
</section>

<section class='pad-section bg-primary'>
  <div class='container container-lg text-center'>
    <div class='mb-5 text-center'>
      <h2>Start Drumming Today</h2>

      <p></p>
    </div>

    <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-light'>Download App</a>

    <div class='pad-section-invert-bottom mt-5'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/drummer-guidelines-phone.png">
    </div>
  </div>
</section>

<?php
get_footer();
