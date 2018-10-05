<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <header> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaia-mother
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gaia-mother' ); ?></a>

	<header class="header">
		<div class="header__container">
            <h1 class="header__logo-container">
								<img title="Gaia Enterprises" class="header__logo" src="<?php echo get_theme_file_uri('assets/img/gaia_logo.png') ?>" alt="Gaia Enterprises">
            </h1>
            <p class="header__tagline">Tagline goes here.</p>
						<nav id="header__menu" class="header__menu">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gaia-mother' ); ?></button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'main_menu',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav>
		</div><!-- #site-navigation -->
	</header>


	<div id="content" class="site-content">
