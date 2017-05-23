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
			<section class="gallery-hero">
				<h1 class="tlt gallery-header" data-in-effect="flipInY">Portfolio</h1>
				<p class="tlt2 gallery-paragraph" data-in-effect="fadeInLeft">“I strive for two things in design: simplicity and clarity. 
					Great design is born of those two things.” <span class="author">-Lindon Leader</span></p>
			</section>
			<ul class="project-list" data-aos="fade-right" once="false">
				<?php
					$loop = new WP_query(array('post_type' => 'projects', 'posts_per_page' => 4));
				?>
                <?php 
                    while ( $loop -> have_posts() ) : $loop -> the_post(); 
                ?> 
				<li class="archive-project-item">
					<a href="http://localhost:8888/portfolio/wp-content/uploads/2017/05/<?php echo CFS()->get('image_slug'); ?>.png" data-fancybox class="fancybox">
						<?php the_post_thumbnail('full'); ?>
					</a><!--project-image-->
					<p class="project-title">
						<?php the_title(); ?>
					</p>
					<p><?php the_content(); ?></p>
				</li>
				<?php 
                endwhile; 
                ?>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>