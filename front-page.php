<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-container">
				<video autoplay class="video-background">
  					<source src="<?php echo get_template_directory_uri(); ?>/images/Heaven.mp4" type="video/mp4">
  					<source src="<?php echo get_template_directory_uri(); ?>/images/Heaven.ogv" type="video/ogg">
					Your browser does not support the video tag.
				</video>
    		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
