<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package origin
 */

  $drummer_landing_page_url  = get_field('drummer_landing_page_url', 'options');
  $business_landing_page_url = get_field('business_landing_page_url', 'options');
  $buyer_landing_page_url    = get_field('buyer_landing_page_url', 'options');
  $drummer_guidelines_url    = get_field('drummer_guidelines_url', 'options');
  $home_url               	 = get_field('home_url', 'options');
  $careers_url               = get_field('careers_url', 'options');
  $support_url               = get_field('support_url', 'options');
  $blog_url                  = get_field('blog_url', 'options');
  $terms_of_service_url      = get_field('terms_of_service_url', 'options');
  $privacy_policy_url        = get_field('privacy_policy_url', 'options');
  $apple_app_store_url       = get_field('apple_app_store_url', 'options');
  $android_store_url         = get_field('android_store_url', 'options');
  $facebook_url              = get_field('facebook_url', 'options');
  $twitter_url               = get_field('twitter_url', 'options');
  $linkedin_url              = get_field('linkedin_url', 'options');
  $drummer_tips_url          = get_field('drummer_tips_url', 'options');
  $instagram_url             = get_field('instagram_url', 'options');
?>

	</div><!-- #content -->

	
  <footer class='bg-dark'>
    <div class='pad-section'>
      <div class='container-fluid'>
        <div class='row'>
          <div class='col-sm-6 col-md-4 px-4 px-md-5'>
            <div class="logo-footer mb-3">
              <img src="<?php echo get_template_directory_uri(); ?>/images/drum-logo-footer.png" class='mb-4'>
            </div>
            <div class='mb-4'>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="mb-0 mb-md-4">
                    <a href="<?php echo $home_url ; ?>" class="text-white text-strong text-uppercase">Home</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $drummer_landing_page_url; ?>' class="text-white text-strong text-uppercase">Drummers</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $buyer_landing_page_url; ?>' class="text-white text-strong text-uppercase">Buyers</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $business_landing_page_url; ?>' class="text-white text-strong text-uppercase">Businesses</a>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $drummer_guidelines_url; ?>' class="text-white text-strong text-uppercase">Drummer Tips</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $careers_url; ?>' class="text-white text-strong text-uppercase">Careers</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $blog_url; ?>' class="text-white text-strong text-uppercase">Blog</a>
                  </div>
                  <div class="mb-0 mb-md-4">
                    <a href='<?php echo $support_url; ?>' target="_blank" class="text-white text-strong text-uppercase">Support</a>
                  </div>
                </div>
              </div>
              <hr class="hr-footer my-5">
              <div class="footer-social">
                <li class='list-inline-item'>
                  <a href='<?php echo $facebook_url; ?>' target="_blank" class='text-white'>
                    <i class='fa fa-facebook fa-lg'></i>
                  </a>
                </li>
                <li class='list-inline-item'>
                  <a href='<?php echo $twitter_url; ?>' target="_blank" class='text-white'>
                    <i class='fa fa-twitter fa-lg'></i>
                  </a>
                </li>
                <li class='list-inline-item'>
                  <a href='<?php echo $instagram_url; ?>' target="_blank" class='text-white'>
                    <i class='fa fa-instagram fa-lg'></i>
                  </a>
                </li>
                <li class='list-inline-item'>
                  <a href='<?php echo $linkedin_url; ?>' target="_blank" class='text-white'>
                    <i class='fa fa-linkedin fa-lg'></i>
                  </a>
                </li>
              </div>
            </div>
          </div>
			<div class="modal" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content modal-download">
                <div class="modal-header modal-download-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <h5 class="modal-title modal-download-title" id="headerDownloadModal"></h5>
                  <a class="btn btn-download-drummer" href="" id="btnAppDrummer" target="_blank">
                    Drummers
                    <br /><span class="btn-subname">Promote & Earn Money</span>
                  </a>
                  <a class="btn btn-download-buyer" href="" id="btnAppBuyer" target="_blank">
                    Buyers
                    <br /><span class="btn-subname">Discover & Save</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
<!--           <div class="modal fade" id="headerModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="id" value="a9b74d45ab">
                    <div class="form-group">

                      <input class="form-control" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">

                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <button type="submit" class="formEmailButton btn btn-primary" name="submit" value="Subscribe">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
          <div class='col-sm-6 col-md-4 px-4 px-md-5'>
            <div class='mb-5'>
              <h3 class="text-primary" id="footer-link">Our Beliefs</h3>
              <ul class='list-unstyled'>
                <li class="mb-2">You don't need a boss to earn a living.</li>
                <li class="mb-2">You control your destiny.</li>
                <li class="mb-2">Businesses are people too.</li>
                <li class="mb-2">Sharing is rewarding.</li>
                <li class="mb-2">Honesty and good customer service is paramount.</li>
                <li class="mb-2">Everyone marches to their own beat.</li>
              </ul>
            </div>
          </div>
          <div class='col-sm-6 col-lg-4 px-4 px-md-5'>
            <a href='<?php echo $drummer_landing_page_url; ?>' class="btn btn-outline-light btn-sm w-100 mb-3">
              Become a Drummer
            </a>
            <a href='<?php echo $business_landing_page_url; ?>' class="btn btn-outline-light btn-sm w-100 mb-3">
              Create my business account
            </a>
            <a href='<?php echo $buyer_landing_page_url; ?>' class="btn btn-outline-light btn-sm w-100 mb-5">
              Give me the offers
            </a>
            <div class="col-12 p-0 text-center text-md-right">
              <p id="titleDownloadApp">Drummer & Buyer Apps available on</p>
            </div>
            <div class="col-12 p-0 mb-3 d-flex justify-content-between">
              <a href="<?php echo $android_store_url; ?>" data-toggle="modal" data-target="#downloadModal" onClick="getLinkDownload('ANDROID')" id="btnDownloadAndroid" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/android_App_store_icon.png"></a>
              <a class="ml-3" href="<?php echo $apple_app_store_url; ?>" data-toggle="modal" data-target="#downloadModal" onClick="getLinkDownload('IOS')" id="btnDownloadIOS" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iOS_App_Store_Icon.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='container-fluid footer px-4 px-md-5'>
      <div class='row'>
        <div class='col-sm-6'>
          <p>&copy; Drum Technologies Inc. All rights reserved.</p>
        </div>
        <div class='col-sm-6'>
          <ul class='list-inline text-right'>
            <li class='list-inline-item'>
              <a href='<?php echo $terms_of_service_url; ?>' class='text-white'>Terms of Service</a>
            </li>
            <li class='list-inline-item'>
              <a href='<?php echo $privacy_policy_url; ?>' class='text-white'>Privacy</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
