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
					<span>H</span>
					<span>I,</span>
					<span>I</span>
					<span>M</span>
					<span>E</span>
					<span>D</span>
					<span>W</span>
					<span>A</span>
					<span>R</span>
					<span>D</span>
  				</div><!--header-animation-->
				<div class="hero-paragraph-container">
					<div class="page-hero">
						<h1>Your Technical Partner To Web Success</h1>
					</div>
				</div>
				<div class="hero-gradient"></div>
				<video autoplay class="video-background" loop>
  					<source src="<?php echo get_template_directory_uri(); ?>/images/Night-Traffic.mp4" type="video/mp4">
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
