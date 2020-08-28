<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package origin
 */

	get_header();

  $drummer_landing_page_url  = get_field('drummer_landing_page_url', 'options');
  $business_landing_page_url = get_field('business_landing_page_url', 'options');
  $buyer_landing_page_url    = get_field('buyer_landing_page_url', 'options');

?>

<header>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-md-6 bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/header-home-1.png");'>
        <div class='bg-overlay margin-negative-md'>
          <div class='container-md'>
            <div class='pad-section pad-xl position-relative'>
              <div class='mb-5'>
                <p class='lead'>Drummers</p>
                <h1>Earn Money</h1>

                <p class="txt-header-lg">Drum enables anyone to earn money promoting businesses they believe in.</p>
              </div>
              <a href='<?php echo $drummer_landing_page_url; ?>' class='btn btn-light'>Earn Money</a>
            </div>
          </div>
        </div>
      </div>

      <div class='col-md-6 bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/home-header-2.jpg");'>
        <div class='bg-overlay margin-negative-md'>
          <div class='container-md'>
            <div class='pad-section pad-xl position-relative'>
              <div class='mb-5'>
                <p class='lead'>Buyers</p>
                <h1>Get Offers</h1>

                <p class="txt-header-lg">Buyers can save money and engage new brands from a mobile app filled with deals and promotions.</p>
              </div>
              <a href='<?php echo $buyer_landing_page_url; ?>' class='btn btn-light'>Get Offers</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<hr class='special'>

<section class='pad-section bg-light pb-0'>
  <div class='container container-lg text-center'>

    <div class='mb-5 text-center'>
      <h2>What is Drum?</h2>

      <p>
        
      </p>
    </div>

    <div class='mb-5'>
      <div class='border-special'>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JsCTD6ytr4Q?rel=0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </div>
</section>

<section class='pad-section'>
  <div class='container container-lg'>

    <div class='mb-5 text-center container container-md'>
      <h2>How it Works</h2>

      <p>
        A revolutionary new platform where buyers discover and save, businesses expand their reach, and promotors spread the word and earn money.
      </p>
    </div>


    <div class='timeline-wrapper'>
      <div class='row pad-section-sm'>
        <div class='col-sm-6'>
          <div class='pad timeline-milestone timeline-milestone-top'>
            <h2 class='h3 text-yellow'>Businesses publish offers to Drum</h2>
            <p>
              Any business can stand up an on demand salesforce of Drummers to help them earn customers.
            </p>

            <a href='<?php echo $business_landing_page_url; ?>' class='btn btn-primary btn-sm'>Promote Your Business</a>
          </div>
        </div>
        <div class='col-sm-6'>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home_1.png">
        </div>
      </div>

      <div class='row pad-section-sm'>
        <div class='col-sm-6 order-2 order-md-1'>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home_2.png">
        </div>
        <div class='col-sm-6 order-1 order-md-2'>
          <div class='pad timeline-milestone timeline-milestone-alt'>
            <h2 class='h3 text-primary'>Drummers earn money promoting offers</h2>
            <p>
              Our trusted brand ambassadors called Drummers then promote those offers and earn commissions when those offers are redeemed.
            </p>

            <a href='<?php echo $drummer_landing_page_url; ?>' class='btn btn-primary btn-sm'>Earn Money</a>
          </div>
        </div>
      </div>

      <div class='row pad-section-sm'>
        <div class='col-sm-6'>
          <div class='pad timeline-milestone timeline-milestone-bottom'>
            <h2 class='h3 text-orange'>Buyers redeem offers</h2>
            <p>
              Drummers become your personal concierge to great offers and curated experiences.
            </p>

            <a href='<?php echo $buyer_landing_page_url; ?>' class='btn btn-primary btn-sm'>Get Offers</a>
          </div>
        </div>
        <div class='col-sm-6'>
          <img src="<?php echo get_template_directory_uri(); ?>/images/redeem_offer.png">
        </div>
      </div>
    </div>
  </div>
</section>

<section class='pad-section bg-primary'>
  <div class='container container-lg text-center'>

    <div class='mb-5 text-center'>
      <h2>Discover Drum Today!</h2>

      <p>
        
      </p>
    </div>

    <a href="<?php echo $business_landing_page_url; ?>" class="btn btn-light mx-3 mb-4 mb-md-0 h4">Business<br>
      <span class="text-small">Acquire Customers</span>
    </a>

    <a href="<?php echo $drummer_landing_page_url; ?>" class="btn btn-light mx-3 mb-4 mb-md-0 h4">Drummers<br>
      <span class="text-small">Promote & Earn Money</span>
    </a>

    <a href="<?php echo $buyer_landing_page_url; ?>" class="btn btn-light mx-3 mb-4 mb-md-0 h4">Buyers<br>
      <span class="text-small">Discover & Save</span>
    </a>

    <div class='pad-section-invert-bottom mt-5'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/phone-home.png">
    </div>
  </div>
</section>

<?php
get_footer();
