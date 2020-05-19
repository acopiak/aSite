<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aSite
 */

?>

<section class="content--none not-found">
	<header class="page__header">
		<h1 class="page__title">
			<?php esc_html_e('Nothing Found', 'asite'); ?>
		</h1>
	</header><!-- .page__header -->

	<div class="error__container">
		<?php if (is_home() && current_user_can('publish_posts')) : ?>
			<?php printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'asite'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			); ?>
		<?php elseif (is_search()) : ?>
			<p>
				<?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'asite'); ?>
			</p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p>
				<?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'asite'); ?>
			</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .error__container -->
</section><!-- .content--none -->