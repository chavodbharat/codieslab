<?php
/**
 * codieslab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codieslab
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
function codieslab_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on codieslab, use a find and replace
		* to change 'codieslab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'codieslab', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
			'menu-1' => esc_html__( 'Primary', 'codieslab' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'codieslab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'codieslab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codieslab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'codieslab_content_width', 640 );
}
add_action( 'after_setup_theme', 'codieslab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codieslab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'codieslab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'codieslab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'codieslab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function codieslab_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_enqueue_style( 'codieslab-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_enqueue_style( 'codieslab-responsive', get_template_directory_uri() .'/asserts/css/responsive.css', array(), _S_VERSION, true );

	//wp_style_add_data( 'codieslab-style', 'rtl', 'replace' );
	//wp_enqueue_style( 'codieslab-styletheme', get_template_directory_uri() . '/asserts/css/style.css', array(), _S_VERSION, true );
		wp_register_style(
			'codieslab-responsive',
			get_template_directory_uri() . '/asserts/css/responsive.css',
			array(),
			$version_string
		);
		wp_register_style(
			'codieslab-rootvariable',
			get_template_directory_uri() . '/asserts/css/variable.css',
			array(),
			$version_string
		);

		wp_register_style(
			'codieslab-jqueryUicss',
			get_template_directory_uri() . '/asserts/css/jquery-ui.css',
			array(),
			$version_string
		);
		wp_register_style(
			'codieslab-mCustomScrollbar',
			get_template_directory_uri() . '/asserts/css/jquery.mCustomScrollbar.css',
			array(),
			$version_string
		);

		wp_register_style(
			'codieslab-owlcarousel',
			get_template_directory_uri() . '/asserts/css/owl.carousel.min.css',
			array(),
			$version_string
		);
		wp_register_style(
			'codieslab-owltheme',
			get_template_directory_uri() . '/asserts/css/owl.theme.default.min.css',
			array(),
			$version_string
		);
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'codieslab-responsive' );
	wp_enqueue_style( 'codieslab-rootvariable');
	wp_enqueue_style( 'codieslab-jqueryUicss');
	// Enqueue theme stylesheet.
	
	//wp_enqueue_style( 'codieslab-jqueryUicss', get_template_directory_uri() . '/asserts/css/jquery-ui.css', array(), _S_VERSION, true );

	wp_enqueue_style( 'codieslab-mCustomScrollbar');
	wp_enqueue_style( 'codieslab-owlcarousel' );
	wp_enqueue_style( 'codieslab-owltheme');

	//http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js

	wp_enqueue_script( 'codieslab-jquery','https://code.jquery.com/jquery-3.6.0.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'codieslab-fontawesomejs','https://kit.fontawesome.com/4a295db44c.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'codieslab-jqueryUijs','https://code.jquery.com/ui/1.13.2/jquery-ui.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'codieslab-jsmCustomScrollbar', get_template_directory_uri() . '/asserts/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'codieslab-carouseljs', get_template_directory_uri() . '/asserts/js/owl.carousel.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'codieslab-custom', get_template_directory_uri() . '/asserts/js/custom.js', array(), _S_VERSION, true );
	//wp_enqueue_script( 'codieslab-navigation', get_template_directory_uri() . '/asserts/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'codieslab_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-cpt.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}