<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aSite
 */

get_header();
?>

<main id="primary" class="site__content">

	<section class="error__container not-found">
		<header class="page__header">
			<h1 class="page__title">
				<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'asite'); ?>
			</h1>
		</header><!-- .page__header -->

		<div class="error__content">
			<div class="error--primary">
				<p>
					<?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'asite'); ?>
				</p>
			</div><!-- .error__container -->

			<div class="error--secondary">
				<!-- @TODO- Make a 'searchform.php'. -->
				<div class="widget widget--search">
					<?php get_search_form(); ?>
				</div>

				<!-- @TODO- Not like this. -->
				<div class="widget widget--categories">
					<h2 class="widget__title">
						<?php esc_html_e('Most Used Categories', 'asite'); ?>
					</h2>
					<div class="widget__content">
						<ul>
							<?php wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							); ?>
						</ul>
					</div>
				</div><!-- .widget -->

				<!-- @TODO- All widgets should end dup like these. -->
				<? the_widget('WP_Widget_Recent_Posts'); ?>
				<?php the_widget('WP_Widget_Tag_Cloud'); ?>
			</div><!-- .error__container -->
		</div><!-- .error__content -->


	</section><!-- .error__container -->

</main><!-- #main -->

<?php
get_footer();
