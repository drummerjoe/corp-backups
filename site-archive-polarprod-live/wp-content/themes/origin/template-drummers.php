<?php
  /* Template Name: Drummers Landing Page */
  get_header();

  $dynamic_app_store_url  = get_field('dynamic_app_store_url', 'options');
?>

<header class='bg-cover' style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/header-drummer.png");'>
  <div class='pad-section bg-overlay height-70vh'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-10'>
          <div class='mb-5'>
            <p class='lead'>Drummers</p>
            <h1>Earn Money</h1>

            <p class="txt-header-lg">
              Drum enables anyone to earn money promoting businesses they believe in.
            </p>
          </div>

          <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-light mb-3'>Download App</a>

          <br>
          <a href="https://www.youtube.com/embed/8_nf5l0aHl4" target="_blank" class='btn btn-outline-light'>
            Play Video
          </a>

          <div class="modal fade" id="headerModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content header-modal p-sm-2 p-md-3">
                <div class="modal-header">
                  <h3 class="text-center" id="ModalLabel">Drummer App coming soon!</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-primary" aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Our Drum engineers are putting the finishing touches on the app. Please provide your email for early access.</p>

                    <form action="https://drumup.us20.list-manage.com/subscribe/post" method="POST">
                      <input type="hidden" name="u" value="35e04b8107b3a61ba969cdc96">
                      <input type="hidden" name="id" value=ce063984d1>
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

    <div class='mb-5 text-center'>
      <h2>Be Your Own Boss</h2>

      <p>
        See how with Drum.
      </p>
    </div>

    <div class='mb-5'>
      <div class='border-special'>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N889r0YAqSc?rel=0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-primary'>Download App</a>
    </div>

  </div>
</section>

<section class='pad-section bg-light'>
  <div class='container text-center'>
    <div class='mb-5 text-center container container-md'>
      <h2>How it Works</h2>

      <p>
        Earn commisions 24/7 by sharing offers, signing businesses, and building your network of Drummers.
      </p>
    </div>

    <div class='row mb-5'>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_4.svg">
          </div>
          <h3>Promote & Earn</h3>
          <p>
            Seeking friendly, outgoing salespeople. Create your profile and promote in seconds. There is ZERO cost. We pay YOU!
          </p>
        </div>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_3.svg">
          </div>
          <h3>Track Performance</h3>
          <p>
            Track your personal performance as well as the performance of your Drum network.
          </p>
        </div>
        <div class='col-sm-4'>
          <div class='icon-lg'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_2.svg">
          </div>
          <h3>Get Paid</h3>
          <p>
            Promote businesses you love. Share offeres with friends, family, and strangers. Promote what you like, how you like, when you like.
          </p>
        </div>
    </div>


    <div class="text-center">
      <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-primary'>Download App</a>
    </div>

  </div>
</section>

<section class='pad-section'>
  <div class='container'>
    
    <div class='mb-5 text-center container container-md'>
      <h2>Ways to Make Money</h2>

      <p>
        Our earnings structure is rewarding and easy to understand.
      </p>
    </div>

    <div class='row mb-5'>
        <div class='col-8 col-sm-6 col-md-4 col-lg-3 mx-auto mx-sm-0 mb-4 mb-md-4 mb-lg-0'>
          <div class='card h-100'>
            <div class='card-header bg-dark'>
              <h3 class='h4 mb-0'>Promote Offers</h3>
            </div>
            <img src='<?php echo get_template_directory_uri(); ?>/images/drummer-500-off.png'>
            <div class='card-body'>
              When a Buyer redeems an offer you shared, you earn the displayed commission.
            </div>
          </div>
        </div>
        <div class='col-8 col-sm-6 col-md-4 col-lg-3 mx-auto mx-sm-0 mb-4 mb-md-4 mb-lg-0'>
          <div class='card h-100'>
            <div class='card-header bg-dark'>
              <h3 class='h4 mb-0'>Sign Up Businesses</h3>
            </div>
            <img src='<?php echo get_template_directory_uri(); ?>/images/drummers-5-percent.png'>
            <div class='card-body'>
              For each business you activate, Drum pays you a 5% bonus for ALL redemptions at the business for 24 months.
            </div>
          </div>
        </div>
        <div class='col-8 col-sm-6 col-md-4 col-lg-3 mx-auto mx-sm-0 mb-4 mb-md-4 mb-lg-0'>
          <div class='card h-100'>
            <div class='card-header bg-dark'>
              <h3 class='h4 mb-0'>Sign Up Drummers</h3>
            </div>
            <img src='<?php echo get_template_directory_uri(); ?>/images/drummers-15-percent.png'>
            <div class='card-body'>
              For each Drummer you activate, Drum pays you a 15% bonus (or more) on ALL commissions earned by the Drummer for 24 months.
            </div>
          </div>
        </div>
        <div class='col-8 col-sm-6 col-md-4 col-lg-3 mx-auto mx-sm-0 mb-4 mb-md-4 mb-lg-0'>
          <div class='card h-100'>
            <div class='card-header bg-dark'>
              <h3 class='h4 mb-0'>Sign Up Buyers</h3>
            </div>
            <img src='<?php echo get_template_directory_uri(); ?>/images/drummers-3-percent.png'>
            <div class='card-body'>
              For each Buyer you activate on the app, Drum pays you a 3% bonus for ALL offers the Buyer redeems for 24 months.
            </div>
          </div>
        </div>
    </div>


      <div class="col-12 col-md-10 offset-md-1 text-center">
        <p>A Business, Drummer or Buyer is activated when they sign up using your referral code and redeem an offer within 60 days. Learn more at <a href="https://www.drum.io/earnings" class="text-primary">drum.io/earnings</a>.</p>
      </div>

    <div class="text-center">
  <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-primary'>Download App</a>
</div>


  </div>
</section>

<section class='pad-section bg-light'>
  <div class='container'>
    <div class='mb-5 text-center container container-md'>
      <h2>Drummer Features</h2>

      <p>
        Make money sharing offers for business you believe in. Gain freedom and be your own boss.
      </p>
    </div>

    <div id='nav-tab' role='tablist'>
      <div class='row mb-5'>
        <div class='col-sm-4'>
          <ul class="nav nav-tabs">
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 active" href="#browse-offers-businesses">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_24.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Browse offers & businesses</h3>
                  <p>Explore a huge selection of businesses you can promote on Drum.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#save-your-favorites">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_47.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Save your favorites</h3>
                  <p>Save your favorite business and offers on Drum for easy sharing.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4 " href="#promote-offers">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_1.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Promote offers</h3>
                  <p>Share offers via text, email, social, or face-to-face via QR code.</p>
                </a>
              </li>
          </ul>
        </div>
        <div class='col-sm-4 text-center hide-mobile'>
          <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="browse-offers-businesses" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-browse.png'>
              </div>
              <div class="tab-pane fade " id="save-your-favorites" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-fav.png'>
              </div>
              <div class="tab-pane fade " id="promote-offers" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-promote.png'>
              </div>
              <div class="tab-pane fade " id="invite-businesses-buyers-drummers" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-invite.png'>
              </div>
              <div class="tab-pane fade " id="get-paid-commissions" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-paid.png'>
              </div>
              <div class="tab-pane fade " id="track-performance" role="tabpanel" aria-labelledby="nav-home-tab">
                <img src='<?php echo get_template_directory_uri(); ?>/images/features-phone-track-perf.png'>
              </div>
          </div>
        </div>
        <div class='col-sm-4'>
          <ul class="nav nav-tabs">
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#invite-businesses-buyers-drummers">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_47.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Invite businesses, buyers, Drummers</h3>
                  <p>Earn ongoing bonuses for building your network. When they perform and redeem, you earn money.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#get-paid-commissions">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_2.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Get paid commissions</h3>
                  <p>Get paid weekly on all the commissions earned from promoting offers as well as the performance of your network.</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" class="hover-card nav-link text-dark p-4" href="#track-performance">
                  <img src='<?php echo get_template_directory_uri(); ?>/images/icons/icon_3.svg' class='icon-sm'>
                  <h3 class='pt-2 h4'>Track performance</h3>
                  <p>Track your personal promotion performance as well as the performance of your Drum network.</p>
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
      <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-primary'>Download App</a>
    </div>

  </div>
</section>

<hr class='special'>

<section class='pad-section bg-primary'>
  <div class='container container-lg text-center'>
    <div class='mb-5 text-center'>
      <h2>Start Drumming Today</h2>

      <p>
        
      </p>
    </div>


    <div class="text-center">
      <a href="<?php echo $dynamic_app_store_url; ?>" class='btn btn-light'>Download App</a>
    </div>


    <div class='pad-section-invert-bottom mt-5'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/phone-home.png">
    </div>
  </div>
</section>

<?php
get_footer();
