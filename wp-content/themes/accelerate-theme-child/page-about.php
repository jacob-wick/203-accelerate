<?php
/*
Template Name: About Page
Template Post Type: services
*/
/**
 * The About Page. Displays services
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

	<div id="primary" class="site-content">
		<div class="main-content about" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$headline = get_field( 'bottom_content_headline' );
				$blurb = get_field( 'bottom_content_blurb' );
				$service_headline_1 = get_field( 'service_headline_1' );
				$service_description_1 = get_field ( 'service_description_1' );
				$service_image_1 = get_field ( 'service_image_1' );
				$service_headline_2 = get_field( 'service_headline_2' );
				$service_description_2 = get_field ( 'service_description_2' );
				$service_image_2 = get_field ( 'service_image_2' );
				$service_headline_3 = get_field( 'service_headline_3' );
				$service_description_3 = get_field ( 'service_description_3' );
				$service_image_3 = get_field ( 'service_image_3' );
				$service_headline_4 = get_field( 'service_headline_4' );
				$service_description_4 = get_field ( 'service_description_4' );
				$service_image_4 = get_field ( 'service_image_4' );
				$size = "full";

			?>
				<?php the_content(); ?>
		</div>

		<section class="bottom-content">
			<h4><?php echo $headline ?></h4>
			<p><?php echo $blurb ?></p>
		</section>

		<ul class="services">
			<li class="individual-service odd">
				<figure>
					<?php echo wp_get_attachment_image($service_image_1, $size); ?>
				</figure>
				<div class="service-description odd">
					<h4><?php echo $service_headline_1 ?></h4>
					<p><?php echo $service_description_1 ?></p>
				</div>
			</li>
			<li class="individual-service even">
				<figure>
					<?php echo wp_get_attachment_image($service_image_2, $size); ?>
				</figure>
				<div class="service-description even">
					<h4><?php echo $service_headline_2 ?></h4>
					<p><?php echo $service_description_2 ?></p>
				</div>
			</li>
			<li class="individual-service odd">
				<figure>
					<?php echo wp_get_attachment_image($service_image_3, $size); ?>
				</figure>
				<div class="service-description odd">
					<h4><?php echo $service_headline_3 ?></h4>
					<p><?php echo $service_description_3 ?></p>
				</div>
			</li>
			<li class="individual-service even">
				<figure>
					<?php echo wp_get_attachment_image($service_image_4, $size); ?>
				</figure>
				<div class="service-description even">
					<h4><?php echo $service_headline_4 ?></h4>
					<p><?php echo $service_description_4 ?></p>
				</div>
			</li>			
		</ul>

			<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="about-bottom">
			<h3>Interested in working with us?</h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</a></div>
		</div>
	</nav>

<?php get_footer(); ?>
