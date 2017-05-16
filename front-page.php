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
						<span class="welcome">E</span>
						<span class="welcome">D</span>
						<span class="welcome">W</span>
						<span class="welcome">A</span>
						<span class="welcome">R</span>
						<span class="welcome">D</span>
					</div>
					<div>
						<span class="welcome">L</span>
						<span class="welcome">A</span>
						<span class="welcome">N</span>
						<span class="welcome">T</span>
						<span class="welcome">O</span>
					</div>
					<div class="hero-paragraph-container">
						<p>Web Developer</p>
					</div>
  				</div><!--header-animation-->
				<div class="menu-wrapper">
					<div class="hamburger-menu">
						<div class="bar"></div>	
					</div><!--hamburger-menu-->
					<div class="menu-container">
						<p>Menu</p>
					</div><!--menu-container-->
				</div><!--menu-wrapper-->
				<ul class="nav-list">
					<li>Work</li>
 					<li>About</li>
 					<li>Services</li>
 					<li>Contact</li>
 				</ul>
				<div class="hero-background"></div>
    		</section>
			<section class="work-section">
				<h2 class="section-header fadein">Work</h2>
				<div class="header-bar"></div>
				<ul class="main-carousel">
					<?php
						$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => -1));
					?>
                	<?php 
                    	while ( $loop -> have_posts() ) : $loop -> the_post(); 
                	?> 
					<li class="carousel-cell">
						<?php the_post_thumbnail('full'); ?>
						<p class="project-title"><?php the_title(); ?></p>
					</li>
					<?php 
                    endwhile; 
                ?>
				</ul>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
