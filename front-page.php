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
				<ul class="project-list">
					<?php
						$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => 4));
					?>
                	<?php 
                    	while ( $loop -> have_posts() ) : $loop -> the_post(); 
                	?> 
					<li class="project-item">
						<div class="project-image">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<p class="project-title"><?php the_title(); ?></p>
						<div class="project-hover">
							<p>Vestibulum aliquam ipsum sed luctus volutpat. 
							Praesent dignissim lobortis leo, sit amet tristique 
							mauris ultrices eu. Sed
							</p>
						</div>
					</li>
					<?php 
                    endwhile; 
                ?>
				</ul>
			</section>
			<section class="about-section">
				<h2 class="section-header fadein">Who Am I</h2>
				<div class="header-bar"></div>
				<div class="about-background">
						<p class="about-text">Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
							fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
							augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
							mi sit amet elit venenatis luctus. Suspendisse et massa felis. Sed dapibus 
							pulvinar iaculis. Vestibulum venenatis lectus a urna ultrices, in efficitur 
							arcu tristique. Aliquam faucibus rhoncus condimentum. Vivamus ut volutpat nisl. 
							In hac habitasse platea dictumst. Vestibulum aliquam ipsum sed luctus volutpat. 
							Praesent dignissim lobortis leo, sit amet tristique mauris ultrices eu. Sed 
							est diam, tristique sit amet rhoncus vitae, mollis at odio.
							<div class="text-gradient"></div>
						</p>
				</div>			
			</section>
			<section class="expertise-section">
				<h2 class="section-header fadein">Expertise</h2>
				<div class="header-bar"></div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
