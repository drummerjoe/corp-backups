<?php
  /* Template Name: Business Landing Page */
  get_header();
?>

<header class='bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/business-header.png");'>
  <div class='pad-section bg-overlay height-70vh'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-10'>
          <div class='mb-5'>
            <p class='lead'>Businesses</p>
            <h1>Acquire Customers</h1>

              <p class="txt-header-lg">Tap into the power of the only on demand sales force. Our community of Drummers drive customers to your business.</p>
          </div>

            <a href="https://business.drum.io/register" class='btn btn-light mb-3'>Create your free profile</a>

            <p class="mb-5">Already have an account? <a href="https://business.drum.io/login" class="text-strong text-white">Sign In</a></p>
          <br>
          <a href="https://www.youtube.com/embed/8_nf5l0aHl4" target="_blank" class='btn btn-outline-light'>Play Video</a>

          <div class="modal fade" id="headerModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content header-modal p-sm-2 p-md-3">
                <div class="modal-header">
                  <h3 class="text-center" id="ModalLabel">
                      Drum for Business coming soon
                    
                  </h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-primary" aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Our Drum engineers are putting the finishing touches on the app. Please provide your email for early access.</p>

                    <form action="https://drumup.us20.list-manage.com/subscribe/post" method="POST">
                      <input type="hidden" name="u" value="35e04b8107b3a61ba969cdc96">
                      <input type="hidden" name="id" value=94e8174deb>
                      <div class="form-group">

                        <input class="form-control" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <button type="submit" class="formEmailButton btn btn-primary" name="submit" value="Subscribe">Submit</button>
                    </form>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</header>


<hr class='special'>

<section class='pad-section'>
  <div class='container text-center'>

<div class='mb-5 text-center container container-md'>
  <h2>How it Works</h2>

  <p>
    Simply create an offer with a commission you are willing to pay for a customer. Drummers then promote the offers to your desired target market.

        When a customer comes in with your Drum offer, you can it and the Drummer earns a commission.
  </p>
</div>

<div class='row mb-5'>
    <div class='col-sm-4'>
      <div class='icon-lg'>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_9.svg">
      </div>
      <h3>Aquire New Customers</h3>
      <p>
        View a live feed of offer recommendations from Drummers.
      </p>
    </div>
    <div class='col-sm-4'>
      <div class='icon-lg'>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_19.svg">
      </div>
      <h3>Grow your Business</h3>
      <p>
        Save your favorite offers and businesses to your Drumroll for easy access and redemption.
      </p>
    </div>
    <div class='col-sm-4'>
      <div class='icon-lg'>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_24.svg">
      </div>
      <h3>Track Results</h3>
      <p>
        Share great offers with friends and earn money when they redeem.
      </p>
    </div>
</div>


    <div class="text-center">
  <a href="https://business.drum.io/register" class='btn btn-primary'>Create a Free Profile</a>
</div>

  </div>
</section>

<section class='pad-section-sm bg-light'>
  <div class='container'>

<div class='mb-5 text-center container container-md'>
  <h2>Business Features</h2>

  <p>
    Drum has made getting people talking about your business and acquiring customers easy, flexible, and trackable.
  </p>
</div>

<div id='nav-tab' role='tablist'>
  <div class='row mb-5'>
    <div class='col-sm-4'>
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4 active" href="#simple-signup">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_23.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Simple Signup</h3>
              <p>No cost to join. Start creating offers in minutes.</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#create-business-profile">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_46.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Create Business Profile</h3>
              <p>Use your business profile to tell buyers and Drummers what you're all about.</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#publish-offers">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_6.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Publish Offers</h3>
              <p>Publish savings, referral and loyalty offers for Drummer to promote.</p>
            </a>
          </li>
      </ul>
    </div>
    <div class='col-sm-4 text-center hide-mobile'>
      <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="simple-signup" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-signup.png'>
          </div>
          <div class="tab-pane fade " id="create-business-profile" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-create.png'>
          </div>
          <div class="tab-pane fade " id="publish-offers" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-offers.png'>
          </div>
          <div class="tab-pane fade " id="only-pay-for-performance" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-performance.png'>
          </div>
          <div class="tab-pane fade " id="record-redemptions" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-redemptions.png'>
          </div>
          <div class="tab-pane fade " id="track-performance" role="tabpanel" aria-labelledby="nav-home-tab">
            <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-track.png'>
          </div>
      </div>
    </div>
    <div class='col-sm-4'>
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#only-pay-for-performance">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_48.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Only pay for performance</h3>
              <p>You choose the price you are willing to pay for a customer. Only pay the commission when a redemption is recorded.</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#record-redemptions">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_5.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Record Redemptions</h3>
              <p>Use the iOS and Android Drum QR scanner app to record your customer's Drum offer redemptions.</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#track-performance">
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_24.svg' class='icon-sm'>
              <h3 class='pt-2 h4'>Track Performance</h3>
              <p>Track redemptions of your offers and view the performance of your top Drummers.</p>
            </a>
          </li>
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    $('a[data-toggle="tab"]').removeClass('active');
  });
</script>


    <div class="text-center">
  <a href="https://business.drum.io/register" class='btn btn-primary'>Create a Free Profile</a>
</div>

  </div>
</section>

<section class='pad-section'>
  <div class='container text-center'>

<div class='mb-5 text-center container container-lg'>
  <h2>Every Type of Business</h2>

  <p>
    Drum is perfect for any size or type of business. Whether you are a personal trainer just starting up or a fortune 500 company looking to expand your sales reach, Drum is right for your business.
  </p>
</div>

<div class='overflow-x-wrapper mb-5'>
  <ul class='list-inline'>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_34.svg">
            </div>
            <h3 class='h4'>
              Beauty Spa
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_43.svg">
            </div>
            <h3 class='h4'>
              Personal Services
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_36.svg">
            </div>
            <h3 class='h4'>
              Retail
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_41.svg">
            </div>
            <h3 class='h4'>
              Food & Drink
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_42.svg">
            </div>
            <h3 class='h4'>
              Automotive
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_37.svg">
            </div>
            <h3 class='h4'>
              Health & Fitness
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_44.svg">
            </div>
            <h3 class='h4'>
              Travel
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_43.svg">
            </div>
            <h3 class='h4'>
              Business Service
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_40.svg">
            </div>
            <h3 class='h4'>
              Home Service
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_39.svg">
            </div>
            <h3 class='h4'>
              Things to do
            </h3>
          </div>
        </div>
      </li>
      <li class='list-inline-item'>
        <div class='card w150-fixed h150-fixed mb-3'>
          <div class='card-body'>
            <div class='icon-sm center'>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_45.svg">
            </div>
            <h3 class='h4'>
              Utilities
            </h3>
          </div>
        </div>
      </li>
  </ul>
</div>


    <div class="text-center">
      <a href="https://business.drum.io/register" class='btn btn-primary'>Create a Free Profile</a>
    </div>

  </div>
</section>

<hr class='special'>

<section class='pad-section bg-light'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-7'>
        <img src="<?php echo get_template_directory_uri(); ?>/images/business-laptop-2.png">
      </div>
      <div class='col-sm-5'>
        <div class='mb-5'>
          <h2>What does it cost?</h2>
          <p>
            The Drum cost is 100% up to you. For each customer redemption you determine what the cost should be.
          </p>

          <p>
            The drummers on the network will see the commission they will earn for promoting your business or offer. Drummers earn 40% of the cost per redemption as their commission. An additional 15% is divided among the drummers who signed the buyer and business.
          </p>

          <p>
            Our mission is help businesses grow while empowering people with the means to make a living promoting businesses they believe in.
          </p>
        </div>

        <div class="text-center">
          <a href="https://business.drum.io/register" class='btn btn-primary'>Create a Free Profile</a>
        </div>

      </div>
    </div>

  </div>
</section>

<section class='pad-section bg-primary'>
  <div class='container container-lg text-center'>
<div class='mb-5 text-center'>
  <h2>Drum up business today!</h2>

  <p>
    
  </p>
</div>


    <div class="text-center">
  <a href="https://business.drum.io/register" class='btn btn-light'>Create a Free Profile</a>
</div>


    <div class='pad-section-invert-bottom mt-5'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/business-phone.png">
    </div>
  </div>
</section>

<?php
get_footer();
