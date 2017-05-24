<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class = "primary-secondary-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="menu-section">
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
				</div><!--menu-section-->
			<section class="gallery-hero">
				<h1 class="tlt gallery-header" data-in-effect="flipInY">Portfolio</h1>
				<p class="tlt2 gallery-paragraph" data-in-effect="fadeInLeft">“I strive for two things in design: simplicity and clarity. 
					Great design is born of those two things.” <span class="author">-Lindon Leader</span></p>
			</section>
			<ul class="project-list">
				<?php
					$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => -1));
				?>
                <?php 
                    while ( $loop -> have_posts() ) : $loop -> the_post(); 
                ?> 
				<li class="archive-project-item">
					<a href="http://localhost:8888/portfolio/wp-content/uploads/2017/05/<?php echo CFS()->get('image_slug'); ?>.png" data-fancybox class="grouped_elements" rel="group1">
						<?php the_post_thumbnail('full'); ?>
					</a><!--project-image-->
					<h3 class="project-title">
						<?php the_title(); ?>
					</h3>
					<?php the_content(); ?>
					<a href="<?php echo CFS()->get('project_link'); ?>" class="archive-project-link">Check It Out</a>
					
				</li>
				<?php 
                endwhile; 
                ?>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>