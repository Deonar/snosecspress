<?php

/**
 * start-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package start-wp
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('start_wp_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function start_wp_setup()
	{

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'start-wp'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'start_wp_setup');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function start_wp_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'start-wp' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'start-wp' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'start_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function start_wp_scripts()
{
	// load fonts 
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:wght@400;700&display=swap', array());

	// Swiper
	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/src/libs/swiper/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/src/libs/swiper/swiper.min.js', array(), array());

	wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.min.css', array(), time());
	wp_enqueue_style('start-wp-style', get_stylesheet_uri(), array(), _S_VERSION);

	// Scripts
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'start_wp_scripts');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Основные настройки сайта',
		'menu_title'    => 'Основные настройки сайта',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}
