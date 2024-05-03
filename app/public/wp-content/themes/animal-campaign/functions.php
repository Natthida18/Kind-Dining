<?php
/**
 * Animal Campaign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Animal_Campaign
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function animal_campaign_setup() {
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'main_menu', 'animal-campaign' ),
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
	);

	add_image_size( 'partner-logo', '100', '100', false );
	add_image_size( 'logo-small', '235', '235', true );
	add_image_size( 'wildlife-team', '350', '350', true );
	add_image_size( 'page-template', '540', '527', true );
}

add_action( 'after_setup_theme', 'animal_campaign_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function animal_campaign_widgets_init() {
	register_sidebar(
		array(
			'name' => 'Main Footer',
			'id'   => 'footer-1',
		)
	);
}
add_action( 'widgets_init', 'animal_campaign_widgets_init' );

require get_theme_file_path( '/inc/join-route.php' );
/**
 * Enqueue scripts and styles.
 */
function animal_campaign_scripts() {
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/index.js', array( 'jquery' ), _S_VERSION, true );

	wp_localize_script(
		'main-js',
		'kindDining',
		array(
			'root_url' => get_site_url(),
			'nonce'    => wp_create_nonce( 'wp_rest' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'animal_campaign_scripts' );


function animal_campaign_style() {
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), null, 'all' );
	wp_enqueue_style( 'custom-google-font', 'https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null, 'all' );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'bar-chart-style', get_template_directory_uri() . '/css/bar-chart.css', array(), _S_VERSION );
	wp_enqueue_style( 'site-footer-style', get_template_directory_uri() . '/css/site-footer.css', array(), _S_VERSION );
	wp_enqueue_style( 'navigation-menu-style', get_template_directory_uri() . '/css/navigation-menu.css', array(), _S_VERSION );
	wp_enqueue_style( 'page-thankyou-style', get_template_directory_uri() . '/css/page-thankyou.css', array(), _S_VERSION );
	wp_enqueue_style( 'page-single-animal-style', get_template_directory_uri() . '/css/page-single-animal.css', array(), _S_VERSION );
	wp_enqueue_style( 'page-question-style', get_template_directory_uri() . '/css/page-question.css', array(), _S_VERSION );
	wp_enqueue_style( 'page-famous-person-style', get_template_directory_uri() . '/css/page-famous-person.css', array(), _S_VERSION );
	wp_enqueue_style( 'modal-style', get_template_directory_uri() . '/css/modal.css', array(), _S_VERSION );
	wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/css/home.css', array(), _S_VERSION );
	wp_enqueue_style( 'partner-logos-style', get_template_directory_uri() . '/css/partner.css', array(), _S_VERSION );
	wp_enqueue_style( 'wildlife-team-style', get_template_directory_uri() . '/css/wildlife-team.css', array(), _S_VERSION );
	wp_enqueue_style( 'page-style', get_template_directory_uri() . '/css/page-template.css', array(), _S_VERSION );
	wp_enqueue_style( 'animal-campaign-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION );
}

add_action( 'wp_enqueue_scripts', 'animal_campaign_style' );
