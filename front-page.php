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
				<div class="header-animation">
					<div>
					<span class="welcome">W</span>
					<span class="welcome">E</span>
					<span class="welcome">L</span>
					<span class="welcome">C</span>
					<span class="welcome">O</span>
					<span class="welcome">M</span>
					<span class="welcome">E<span>
					</div>
					<span class="edward">I'm Edward</span>
  				</div><!--header-animation-->
				<div class="hero-paragraph-container">
					<p>Your Technical Partner for Web Success</p>
				</div>
				<div class="hero-gradient"></div>
				<video autoplay class="video-background" loop>
  					<source src="<?php echo get_template_directory_uri(); ?>/images/corporate-background.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				<ul class="nav-list">
					<li>About /</li>
					<li>Portfolio /</li>
					<li>Services /</li>
					<li>Contact</li>
				</ul>
    		</section>
			<section class="about-section">
				<h2 class="section-heading">About Me</h2>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
