<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aSite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php if (is_singular()) : ?>
			<h1 class="entry__title">
				<?php the_title(); ?>
			</h1>
		<?php else : ?>
			<h1 class="entry__title">
				<a href="<?php esc_url(get_permalink()) ?>" rel="bookmark"></a>
			</h1>
		<?php endif; ?>

		<?php if ('post' === get_post_type()) : ?>
			<div class="entry__meta">
				<?php asite_posted_on(); ?>
				<?php asite_posted_by(); ?>
			</div><!-- .entry__meta -->
		<?php endif; ?>
	</header><!-- .entry__header -->

	<?php asite_post_thumbnail(); ?>

	<div class="entry__content">
		<?php the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'asite'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		); ?>

		<?php wp_link_pages(
			array(
				'before' => '<div class="page__links">' . esc_html__('Pages:', 'asite'),
				'after'  => '</div>',
			)
		); ?>
	</div><!-- .entry__content -->

	<footer class="entry__footer">
		<?php asite_entry_footer(); ?>
	</footer><!-- .entry__footer -->
</article><!-- #post-<?php the_ID(); ?> -->