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
					</li>
					<?php 
                    endwhile; 
                ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>