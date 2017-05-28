<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="fixed-header">
				<ul class="home-list">
					<li><a href="#Work">Work</a></li>
					<li><a href="#About">About</a></li>
					<li><a href="#Expertise">Expertise</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
			<section class="hero-container" data-aos="zoom-in-up" delay="100">
				<div class="hero-background">
						<div class="typing-container">
							<span class="element"></span>
							<span class="element2"></span>
						</div><!--typing-container-->
						<div class="menu-main-wrapper">
							<div class="menu-container">
								<div class="menu-wrapper">
									<div class="hamburger-menu">
										<div class="bar"></div><!--empty-bar-->
									</div><!--hamburger-menu-->
									<div class="menu-container">
										<p>Menu</p>
									</div><!--menu-container-->
									<ul class="nav-list">
										<li><a href="#Work">Work</a></li>
										<li><a href="#About">About</a></li>
										<li><a href="#Expertise">Expertise</a></li>
										<li><a href="#Contact">Contact</a></li>
									</ul>
								</div><!--menu-wrapper-->
							</div><!--menu-container-->
						</div>
				</div><!--hero-background-->
    		</section>
			<section class="work-section" id="Work">
				<h2 class="section-header">Work</h2>
				<ul class="project-list" data-aos="slide-up">
					<?php
						$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => 6));
					?>
                	<?php 
                    	while ( $loop -> have_posts() ) : $loop -> the_post(); 
                	?> 
					<li class="project-item">
						<a href="<?php echo CFS()->get('project_link'); ?>" class="project-link">Link</a>
						<div class="project-image">
							<?php the_post_thumbnail('full'); ?>
						</div><!--project-image-->
						<p class="project-title"><?php the_title(); ?></p>
						<div class="project-hover">
								<?php echo the_content(); ?>
						</div>
					</li>
					<?php 
                    endwhile; 
                ?>
				</ul>
			</section>
			<div class="main-button-container">
				<a href="<?php echo get_post_type_archive_link( 'projects' ); ?>" class="main-button portfolio-button">View Portfolio</a>
			</div>
			<h2 class="section-header" id="About">Who Am I</h2>
			<section class="about-section">
				<div class="about-background" data-aos="slide-up">
					<p class="about-text" data-aos="fade-right" delay="3000">Duis id quam at lorem pretium interdum. Aenean velit ex, iaculis at 
						fermentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus. Suspendisse et massa felis. Sed dapibus 
						pulvinar iaculis. Vestibulum venenatis lectus a urna ultrices, in efficitur 
						rhoncus condimentum. Vivamus ut volutpat nisl. 
						In hac habitasse platea dictumst. Vestibulum aliquam ipsum sed luctus volutpat.
					</p>
				</div>
				<h4 class="desktop-about-text" data-aos="fade-down">mentum eu, maximus at est. Etiam mollis, odio et euismod commodo, 
						augue odio tempus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus. Suspendisse et massa felis. Sed dapibus 
						pulvinar iaculis. Vestibulum venenatis lectus a urna ultrices, in efficitur 
						rhoncus condimentum. Vivamus ut volutpatus dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus. Suspendisse et massa felis. Sed dapibus 
						pulvinar iaculis. Vestibulum venenatis us dolor, non interdum magna ligula a orci. Quisque sed 
						mi sit amet elit venenatis luctus. </h4>
			</section>
				<h2 class="section-header fadein expertise-header" data-aos="fade-right">Expertise</h2>
			<section class="expertise-section" id="Expertise">
				<div class="full-logo-container">
					<div class="logo-container" data-aos="flip-left" data-aos-once="true">
						<i class="fa fa-paint-brush" aria-hidden="true"></i>
						<h2>The Design</h2>
							<p>
								I love working alongside my clients and spend time to give them a
								custom design that truly reflects their brand. Before the developing begins,
								I give my clients a beautiful, responsive sketch of their site and work closely to
								fit all their needs accordingly. If you have any current websites that include 
								a sleek design or lively animations, feel free to let me know and I will do my best
								to implement those features.
							</p>
					</div>
					<div class="logo-container" data-aos="flip-right" data-aos-once="true">
						<i class="fa fa-wordpress" aria-hidden="true"></i>
						<h2>WordPress</h2>
						<p>
							WordPress is the most popular of content management systems, with a beautiful,
							easy to use design. With WordPress I will create you a personalized theme that will
							have consistency of design along all pages and give you the ability to change content
							easily from scratch. Alongside customizability, I can offer interactivity to bring your website to life with
							animations, hover effects & more.

						</p>
					</div>
					<div class="logo-container" data-aos="flip-left" data-aos-once="true">
						<i class="fa fa-code" aria-hidden="true"></i>
						<h2>The Code</h2>
						<p>
							I have a passion for developing and I love coding from scratch and I will put all my technical
							skills and devotion into your website. The type of code I will write your website in is
							HTML5, CSS3, PHP and Javascript. As a developer I always try to write organized, maintainable
							code that will be optimized for browser speed success.
						</p>
					</div>
				</div><!--full-logo-container-->
				<div class="language-container">
					<ul class="language-list">
						<li>
							<p class="tlt" data-in-effect="flipInY">HTML5</p>
							<img src="<?php echo get_template_directory_uri();?>/images/html.png"/>
						</li>
						<li >
							<p>CSS</p>
							<img src="<?php echo get_template_directory_uri();?>/images/css.jpg"/>
						</li>
						<li>
							<p>Sass</p>
							<img src="<?php echo get_template_directory_uri();?>/images/sass.png"/>
						</li>
						<li>
							<p>PHP</p>
							<img src="<?php echo get_template_directory_uri();?>/images/php.png"/>
						</li>
						<li>
							<p>Javascript</p>
							<img src="<?php echo get_template_directory_uri();?>/images/javascript.png"/>
						</li>
						<li>
							<p>jQuery</p>
							<img src="<?php echo get_template_directory_uri();?>/images/jquery.gif"/>
						</li>
						<li>
							<p>Angular</p>
							<img src="<?php echo get_template_directory_uri();?>/images/angular.svg"/>
						</li>
						<li>
							<p>TypeScript</p>
							<img src="<?php echo get_template_directory_uri();?>/images/typescript.png"/>
						</li>
					</ul>
				</div><!--language-container-->
			</section>
			<section class="contact-section" id="Contact">
				<h2 class="section-header">Contact</h2>
				<div class="contact-icon-content-wrapper">
					<div class="contact-content-container">
						<h2 class="contact-heading">Start a project</h2>
						<p>Ready to start? If so , click the GET STARTED button and start 
							our journey to web development success. I would love to hear and answer and questions
							about my services, feel free & dont be shy !
						</p>
						<div class="contact-button-container">
							<a href="contact" class="main-button contact-button">Get Started</a>
						</div><!--contact-button-container-->
					</div><!--contact-content-container-->
				</div><!--contact-content-wrapper-->
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
