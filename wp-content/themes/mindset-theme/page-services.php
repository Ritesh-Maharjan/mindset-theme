<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">


	<?php while (have_posts()):
		the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>

				<?php

				$args = array(
					'post_type' => 'fwd-service',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC',
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) {
					// <!-- creating our navigation -->
					while ($query->have_posts()) {
						$query->the_post();
						?>

						<a href="#<?php echo esc_attr(get_the_ID()); ?>">
							<?php the_title(); ?>
						</a>

						<?php
					}
					wp_reset_postdata();
				}


				// ALL OUR SERVICES POST
			
				$terms = get_terms(
					array(
						'taxonomy' => 'fwd-service',
					)
				);

				if ($terms && !is_wp_error($terms)) {

					foreach ($terms as $term) {
						$args = array(
							'post_type' => 'fwd-service',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'ASC',
							'tax_query' => array(
								array(
									'taxonomy' => 'fwd-service',
									'field' => 'slug',
									'terms' => $term
								),
							),
						);
						$query = new WP_Query($args);


						echo '<section class="work-section"><h2>' . esc_html__($term->name, 'fwd') . '</h2>';
						// creating our services
			
						while ($query->have_posts()) {
							$query->the_post();
							?>
							<article id="<?php echo get_the_ID() ?>">
								<h2>
									<?php the_title(); ?>
								</h2>
								<?php

								// ACF form validation
								if (function_exists('get_field')) {
									if (get_field('service_description')) {
										echo the_field('service_description');
									}
								}
								?>
								<?php the_excerpt(); ?>
							</article>
							<?php
						}
						wp_reset_postdata();
						// Add your WP_Query() code here
						// Use $term->slug in your tax_query
						// Use $term->name to organize the posts
					}
				}

				?>

			</div>

		</article>

	<?php endwhile; ?>




</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
