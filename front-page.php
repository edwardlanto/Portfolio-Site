<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="hero-container" data-aos="zoom-in-up" delay="100">
				<div class="hero-background">
					<div class="header-animation">
					<div class="typing-container">
						<span class="element"></span>
						<span class="element2"></span>
					</div>
						<div class="menu-container">
							<div class="menu-wrapper">
								<div class="hamburger-menu">
									<div class="bar"></div><!--empty-bar-->
								</div><!--hamburger-menu-->
								<div class="menu-container">
									<p>Menu</p>
								</div><!--menu-container-->
								<ul class="nav-list">
									<li>Work</li>
									<li>About</li>
									<li>Services</li>
									<li>Contact</li>
								</ul>
							</div><!--menu-wrapper-->
						</div><!--menu-container-->
					</div><!--header-animation-->
					<ul class="social-media-container">
				<li>
					<a href="#" class="icon-button twitter">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						<span></span>
					</a>
				</li>
				</li>
					<a href="#" class="icon-button facebook">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<span></span>
					</a>
				</li>
				<li>
					<a href="#" class="icon-button google-plus envelope-icon">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span></span>
					</a>
				</li>
				<a href="#" class="icon-button pinterest github">
					<i class="fa fa-github-square" aria-hidden="true"></i>
					<span></span>
				</a>
			</ul>
				</div><!--hero-background-->
    		</section>
			<section class="work-section">
				<h2 class="section-header" data-aos="fade-left" once="false">Work</h2>
				<ul class="project-list" data-aos="fade-right" once="false">
					<?php
						$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => 4));
					?>
                	<?php 
                    	while ( $loop -> have_posts() ) : $loop -> the_post(); 
                	?> 
					<li class="project-item">
						<a href="#" class="single-project-button">View Project</a>
						<div class="project-gradient"></div>
						<div class="project-image">
							<?php the_post_thumbnail('full'); ?>
						</div><!--project-image-->
						<p class="project-title"><?php the_title(); ?>
						</p>
						<div class="project-hover">
							<p class="project-content">Vestibulum aliquam ipsum sed luctus volutpat. 
							Praesent dignissim lobortis leo, sit amet tristique 
							mauris ultrices eu. Sed
							</p>
						</div>
					</li>
					<?php 
                    endwhile; 
                ?>
				</ul>
				<a href="#" class="portfolio-button">View Portfolio</a>
			</section>
			<section class="about-section">
				<h2 class="section-header" data-aos="fade-left">Who Am I</h2>
				<div class="about-background" data-aos="slide-up">
					<p class="about-text" data-aos="fade-right" delay="10000">Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
						fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus. Suspendisse et massa felis. Sed dapibus 
						pulvinar iaculis. Vestibulum venenatis lectus a urna ultrices, in efficitur 
						arcu tristique. Aliquam faucibus rhoncus condimentum. Vivamus ut volutpat nisl. 
						In hac habitasse platea dictumst. Vestibulum aliquam ipsum sed luctus volutpat. 
						Praesent dignissim lobortis leo, sit amet tristique mauris ultrices eu. Sed 
						est diam, tristique sit amet rhoncus vitae, mollis at odio.
						<div class="text-gradient" data-aos="fade-right" delay="1000"></div>
					</p>
				</div>			
			</section>
			<section class="expertise-section">
				<h2 class="section-header fadein expertise-header" data-aos="fade-right">Expertise</h2>
				<div class="full-logo-container">
					<div class="logo-container" data-aos="flip-left">
						<i class="fa fa-paint-brush" aria-hidden="true"></i>
						<h2>Design</h2>
						<p>Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
						fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus.</p>
					</div>
					<div class="logo-container" data-aos="flip-right">
						<i class="fa fa-wordpress" aria-hidden="true"></i>
						<h2>Design</h2>
						<p>Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
						fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus.</p>
					</div>
					<div class="logo-container" data-aos="flip-left" delay="20000">
						<i class="fa fa-code" aria-hidden="true"></i>
						<h2>Design</h2>
						<p>Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
						fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus.</p>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
