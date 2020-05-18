<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aSite
 */

?>

<footer id="colophon" class="site__footer">
	<div class="footer__container">
		<div class="footer__branding">
			<?php the_custom_logo(); ?>
			<p class="site__title"></p>
		</div>
		<div class="footer__navigation--primary">
			<?php dynamic_sidebar(); ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>