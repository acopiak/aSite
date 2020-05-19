<?php

/**
 * The template for displaying archive pages
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
				<header class="page__header">
					<h1 class="page__title">
						<?php the_archive_title(); ?>
					</h1>
					<p class="page__description">
						<?php the_archive_description(); ?>
					</p>
				</header><!-- .page__header -->

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
