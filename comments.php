<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aSite
 */

if (post_password_required()) {
	return;
} ?>

<div id="comments" class="comments__container">

	<?php if (have_comments()) : ?>
		<h2 class="comments__title">
			<?php $asite_comment_count = get_comments_number(); ?>
			<?php if ('1' === $asite_comment_count) : ?>
			<?php printf(
					/* translators: 1: title. */
					esc_html__('One thought on &ldquo;%1$s&rdquo;', 'asite'),
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			else :
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $asite_comment_count, 'comments title', 'asite')),
					number_format_i18n($asite_comment_count),
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			endif ?>
		</h2><!-- .comments__title -->

		<!-- @TODO Why two by default (_s)? Left and right? 1/2-->
		<div class="comments__navigation">
			<?php the_comments_navigation(); ?>
		</div><!-- .comments__navigation -->

		<ol class="comments__list">
			<?php wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			); ?>
		</ol><!-- .comments__list -->

		<!-- @TODO Why two by default (_s)? Left and right? 2/2-->
		<div class="comments__navigation">
			<?php the_comments_navigation(); ?>
		</div><!-- .comments__navigation -->

		<!-- @TODO- If you delete the comment '//', second parentheses on exc_html goes red, error? Tried copy. -->
		<?php if (!comments_open()) : ?>
			<!-- If comments are closed and there are comments, let's leave a little note, shall we? -->
			<p class="no-comments">
				<?php esc_html_e('Comments are closed.', 'asite'); ?>
			</p><!-- .no-comments -->
		<?php endif; ?>
	<?php endif; ?>

	<!-- @TODO Make "IF has comments" -->
	<div class="comments__new">
		<?php comment_form(); ?>
	</div><!-- .comments__new -->

</div><!-- #comments -->