<?php
/**
 * The template for displaying case studies
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

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<ul class="archive_case-studies">
				<?php while ( have_posts() ) : the_post();

					$services = get_field('services');
					$client = get_field('client');
					$site_link = get_field('site_link');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
					$size = "full";

				?> 

				<li class="individual_case-studies">
					<div class="blurb_case-studies">
						<h2><?php the_title(); ?></a></h2>
						<h4><?php echo $services ?></h4>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more-link">View Project</a>
					</div>
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					</a>
				</li>

			<?php endwhile; //end of the loop. ?>

			</ul>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
