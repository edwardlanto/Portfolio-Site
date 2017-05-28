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
				<ul class="contact-social-media-container">
					<li>
						<a href="https://www.linkedin.com/in/edward-lanto-54172513a/" class="icon-button twitter">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
							<span></span>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/edward.lanto" class="icon-button facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<span></span>
						</a>
					</li>
					<li>
						<a href="mailto:edwardlanto@hotmail.com" class="icon-button google-plus envelope-icon">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<span></span>
						</a>
					</li>
					<li>
						<a href="https://github.com/edwardlanto" class="icon-button pinterest github">
							<i class="fa fa-github-square" aria-hidden="true"></i>
							<span></span>
						</a>
					</li>			
				</ul>
				<h1 class="tlt3" data-in-effect="wobble" data-aos="fade-right">Hello</h1>
				<h3 data-aos="fade-up" class="tlt4">Interested in working with me? Or just want to say ‘Hello’? 
				Please use the contact form below or send us an email to edwardlanto@hotmail.com I will be in contact with you as soon as we can.
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
