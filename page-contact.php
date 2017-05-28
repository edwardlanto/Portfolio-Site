<?php
/**
 *Template Name: Contact Page
 * Description: Page template without sidebar
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="contact-hero">
				<h1 class="tlt3" data-in-effect="wobble" data-aos="fade-right">Hello</h1>
				<h3 data-aos="zoom-out-down" data-aos-delay="1500">Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
				fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
				augue
				</h3>
				<div class="button-container">
					<a href="#Contact">Contact</a>
				</div>
			</section>
			<section class="contact-form" id="Contact">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
