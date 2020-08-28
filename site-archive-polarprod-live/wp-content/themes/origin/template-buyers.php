<?php
  /* Template Name: Buyers Landing Page */
  get_header();

  $dynamic_app_store_url  = get_field('dynamic_app_store_url', 'options');
?>

<header class='bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/buyer-header.png");'>
  <div class='pad-section bg-overlay height-70vh'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-10'>
          <div class='mb-5'>
            <p class='lead'>Buyers</p>
            <h1>Get Offers</h1>

              <p class="txt-header-lg">Drum is your personal concierge to great offers and curated experiences... brought to you by Drummers.</p>
          </div>

            <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-light mb-3' data-toggle="modal" data-target="#headerModal">Download App</a>

          <br>
          <a href="https://www.youtube.com/embed/8_nf5l0aHl4" target="_blank" class='btn btn-outline-light'>Play Video</a>

          <div class="modal fade" id="headerModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content header-modal p-sm-2 p-md-3">
                <div class="modal-header">
                  <h3 class="text-center" id="ModalLabel">
                      Buyer App coming soon
                    
                  </h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-primary" aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Our Drum engineers are putting the finishing touches on the app. Please provide your email for early access.</p>

                    <form action="https://drumup.us20.list-manage.com/subscribe/post" method="POST">
                      <input type="hidden" name="u" value="35e04b8107b3a61ba969cdc96">
                      <input type="hidden" name="id" value=a9b74d45ab>
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
  <div class='container container-lg text-center'>

    <div class='mb-5'>
      <div class='border-special'>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2gmCt4FrZNY?rel=0" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    <div class="text-center">
      <a href="#" class='btn btn-primary' data-toggle="modal" data-target="#headerModal">Download App</a>
    </div>

  </div>
</section>

<section class='pad-section bg-light pt-3'>
  <div class='container text-center'>

    <div class='mb-5 text-center container container-md'>
      <h2>How it Works</h2>

      <p>
        Discover a whole new world of offers from people you can trust called Drummers.
      </p>
    </div>


    <div class='row mb-5'>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_21.svg">
          </div>
          <h3>Sign up</h3>
          <p>
            Download and sign up in seconds to get exclusive access to offers and businesses in your area.
          </p>
        </div>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_6.svg">
          </div>
          <h3>Get Offers</h3>
          <p>
            Get a live feed of offers recommendations from Drummers who support businesses they believe in. Save your offers and redeem at businesses.
          </p>
        </div>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_5.svg">
          </div>
          <h3>Redeem</h3>
          <p>
            Present your Drum offers at businesses to redeem and give referral kudos to the Drummers.
          </p>
        </div>
    </div>


    <div class="text-center">
      <a href="#" class='btn btn-primary' data-toggle="modal" data-target="#headerModal">Download App</a>
    </div>

  </div>
</section>

<section class='pad-section pt-3'>
  <div class='container'>

    <div class='mb-5 text-center container container-md'>
      <h2>Features You'll Love</h2>

      <p>
        Collect great offers on things you'll love, brought to you by Drummers - people whose opinions you can trust.
      </p>
    </div>

    <div id='nav-tab' role='tablist'>
      <div class='row mb-5'>
        <div class='col-sm-4'>
          <ul class="nav nav-tabs">
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 active" href="#live-offer-feed">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_6.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Live Offer Feed</h3>
                  <p>View a live feed of offer recommendations from Drummers.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#explore">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_24.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Explore</h3>
                  <p>Filter and browse recommendations from Drummers by category, keyword, and hashtags.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#follow-drummers">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_8.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Follow Drummers</h3>
                  <p>Follow Drummers who curate, review, and surface the best business and offers in town.</p>
                </a>
              </li>
          </ul>
        </div>
        <div class='col-sm-4 text-center hide-mobile'>
          <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="live-offer-feed" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-feed.png'>
              </div>
              <div class="tab-pane fade " id="explore" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-explore.png'>
              </div>
              <div class="tab-pane fade " id="follow-drummers" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-follow.png'>
              </div>
              <div class="tab-pane fade " id="save-favorites" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-save.png'>
              </div>
              <div class="tab-pane fade " id="redeem-offers" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-redeem.png'>
              </div>
              <div class="tab-pane fade " id="share-and-earn" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-earn.png'>
              </div>
          </div>
        </div>
        <div class='col-sm-4'>
          <ul class="nav nav-tabs">
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#save-favorites">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_47.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Save favorites</h3>
                  <p>Save your favorite offers for easy access and redemption.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#redeem-offers">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_5.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Redeem offers</h3>
                  <p>Present your Drum offer or referral at each business to record the redemption.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#share-and-earn">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_19.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Share and earn</h3>
                  <p>Share great offers with friends and earn money when they redeem.</p>
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
      <a href="#" class='btn btn-primary' data-toggle="modal" data-target="#headerModal">Download App</a>
    </div>

  </div>
</section>

<hr class='special'>

<section class='pad-section bg-primary'>
  <div class='container container-lg text-center'>

    <div class='mb-5 text-center'>
      <h2>Download Drum Today!</h2>

      <p>
        Download our app and start getting offers. Get a live feed of offer recommendations from Drummers who support businesses they believe in.
      </p>
    </div>


        <div class="text-center">
      <a href="#" class='btn btn-light' data-toggle="modal" data-target="#headerModal">Download App</a>
    </div>


    <div class='pad-section-invert-bottom mt-5'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/buyer-phone-footer.png">
    </div>
  </div>
</section>

<?php
get_footer();
