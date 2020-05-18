<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aSite
 */

get_header();
?>

<main id="primary" class="site__content">
	<div class="content__container">
		<?php if (have_posts()) : ?>
			<section class="content--primary">
				<?php if (is_home() && !is_front_page()) : ?>
					<header>
						<h1 class="page__title screen-reader-text">
							<?php single_post_title(); ?>
						</h1>
					</header>
				<?php endif; ?>

				/* Start the Loop */
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', get_post_type()); ?>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
			</section>

			<section class="content--secondary">
				<?php get_sidebar(); ?>
			</section>
		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>
	</div>


</main><!-- #main -->

<?php
get_footer();
