<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package origin
 */	

  $drummer_landing_page_url  = get_field('drummer_landing_page_url', 'options');
  $business_landing_page_url = get_field('business_landing_page_url', 'options');
  $buyer_landing_page_url    = get_field('buyer_landing_page_url', 'options');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Drum- The On-demand salesforce for any size business." />
	<meta property="og:description" content="&nbsp;" />
	<meta property="og:url" content="https://blog.drum.io/" />
	<meta property="og:site_name" content="Drum Blog" />
	<meta property="og:image" content="https://blog.drum.io/wp-content/uploads/2019/10/drummer-share-profile.png" />
	<meta property="og:image:width" content="740" />
	<meta property="og:image:height" content="382" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Drum- The On-demand salesforce for any size business." />
	<meta name="twitter:description" content="&nbsp;" />
	<meta name="twitter:image" content="https://blog.drum.io/wp-content/uploads/2019/10/drummer-share-profile.png" />
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-transition bg-light shadow">

		<a class="navbar-brand" href="https://drum.io">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/drum-logo.png" class="hide-mobile">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/drum-logo-circle.png" class="navbar-brand-mobile hide">
		</a>

		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  <i class='fa fa-bars fa-lg'></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		    <li class="nav-item ">
		      <a class="nav-link" href="<?php echo $drummer_landing_page_url; ?>">Earn Money</a>
		    </li>
		    <li class="nav-item ">
		      <a class="nav-link" href="<?php echo $buyer_landing_page_url; ?>">Get Offers</a>
		    </li>
			<li class="nav-item d-md-none">
		      <a class="nav-link" href="<?php echo $business_landing_page_url; ?>">Drum for Business</a>
		    </li>
		  </ul>
		  <ul class="navbar-nav mt-2 mt-lg-0 d-none d-md-block">
			<li class="nav-item">
				<a class="btn btn-primary-nav" href="<?php echo $business_landing_page_url; ?>">Drum for Business</a>
			</li>
		  </ul>
		</div>

		</nav>
		<header class="bg-color">
			<div class='pad-bg-section'>
			<div class='container text-center position-relative'>
				<p class='lead'></p>
				<h1>Drum Beat</h1>
			</div>
			</div>
		</header>

	<div>
