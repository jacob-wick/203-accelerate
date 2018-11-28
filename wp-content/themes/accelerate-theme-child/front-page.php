<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>
				
			<ul class="homepage_featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
						$image_1 = get_field("image_1");
						$size = "medium";
					?>

				<li class="individual_featured-work">
					<a href="<?php the_permalink(); ?>">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>

						<h2><?php the_title(); ?></a></h2>
					</a>
				</li>
				
				<?php endwhile; //end of the loop. ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section> <!--featured-work -->


	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
						<?php endwhile; //end of the loop. ?>
					<?php wp_reset_query(); ?>
			</div><!-- .blog-post -->
 
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area front" role="complementary">
			<h4>Recent Tweet</h4>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>

			<div class="read-more-link">
				<a href="#"><span>Follow Us &#x203a; </span></a>
			</div>
		</div>
	<?php endif ?>


		</div><!-- .site-content -->
	</section><!-- .recent-posts -->	

<?php get_footer(); ?>
