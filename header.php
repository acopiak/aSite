<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aSite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'asite'); ?></a>

		<header id="masthead" class="site__header">
			<div class="header__container">
				<div class="header__branding">
					<?php the_custom_logo(); ?>
					<?php if (is_front_page() && is_home()) :
					?>
						<h1 class="site__title">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
					<?php
					else :
					?>
						<p class="site__title">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</p>
					<?php
					endif;
					$asite_description = get_bloginfo('description', 'display');
					if ($asite_description || is_customize_preview()) :
					?>
						<p class="site__description">
							<?php echo $asite_description; ?>
						</p>
					<?php endif; ?>
				</div><!-- .header__branding -->

				<nav id="site-navigation" class="header__navigation--primary">
					<button class="menu__toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php esc_html_e('Primary Menu', 'asite'); ?>
					</button>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->