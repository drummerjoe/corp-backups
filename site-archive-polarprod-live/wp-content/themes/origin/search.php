<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package origin
 */

get_header();
?>

	<section id="primary" class="content-area pad-section-md">
	  <main id="main" class="site-main">
	 	<section class='pad-section-lg'>
		  <div class='container'>
			<div class='row'>
			  <div class='col-sm-8'>
		<?php if ( have_posts() ) : ?>
<!-- 			<div class="container">
				<header class="page-header">
					<h2 class="page-title">
						<?php
						/* translators: %s: search query. */
// 						printf( esc_html__( 'Search Results: %s', 'origin' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h2>
				</header><!-- .page-header -->
<!-- 			</div> -->
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results: %s', 'origin' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
// 								get_template_part( 'template-parts/content', 'search' );
						get_template_part( 'template-parts/preview', get_post_type() );

					endwhile;

					the_posts_navigation();

					else :
					?>
					<h2 class="page-title">
						<?php
						printf( esc_html__( 'Search Results: %s', 'origin' ), '<span>Nothing Found :(</span>' );
						?>
					</h2>
					<?php

// 						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
					</div>
					<div class='col-sm-4'>
					  <aside class='sticky-top'>
						<div class='mb-4'>
						  <?php get_sidebar(); ?>
						</div>
					  </aside>
					</div>
				</div>
			</div>
	  	</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
