<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aSite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<h1 class="entry__title">
			<?php the_title(); ?>
		</h1>
	</header><!-- .entry__header -->

	<?php asite_post_thumbnail(); ?>

	<div class="entry__content">
		<?php the_content(); ?>

		<?php wp_link_pages(
			array(
				'before' => '<div class="page__links">' . esc_html__('Pages:', 'asite'),
				'after'  => '</div>',
			)
		); ?>
	</div><!-- .entry__content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry__footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'asite'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit__link">',
				'</span>'
			);
			?>
		</footer><!-- .entry__footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->