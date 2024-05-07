<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Campaign
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'animal-campaign' ); ?></a>

	<header id="masthead" class="site-head container">
		<div class="site-branding">
			<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<a class="menu-toggle" onclick="menuToggle()">
				<i class="fa-solid fa-bars"></i>			
			</a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main_menu',
					'menu_id'        => 'navigation-menu',
					'menu_class'     => 'main-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->