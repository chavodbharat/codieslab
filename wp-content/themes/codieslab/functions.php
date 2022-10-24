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
 * Custom Shortcode Lists.
 */
require get_template_directory() . '/inc/shortcode.php';

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

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( get_stylesheet_directory() ) );

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // Update path
    $path = MY_PLUGIN_DIR_PATH. '/acf-json';
    // Return path
    return $path;
    
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

/*
 * Register the path to load the ACF json files so that they are version controlled.
 * @param $paths The default relative path to the folder where ACF saves the files.
 * @return string The new relative path to the folder where we are saving the files.
*/ 

function my_acf_json_load_point( $paths ) {
   // Remove original path
   unset( $paths[0] );// Append our new path
   $paths[] = MY_PLUGIN_DIR_PATH. '/acf-json';   
   return $paths;
}


function register_codieslab_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_codieslab_header_menu' );

function register_codieslab_header_popupmenu() {
  register_nav_menu('header-popupmenu',__( 'Header Popup Menu' ));
}
add_action( 'init', 'register_codieslab_header_popupmenu' );

function register_codieslab_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_codieslab_footer_menu' );

function register_codieslab_footer_bottom_menu() {
  register_nav_menu('footer-bottom-menu',__( 'Footer Bottom Menu' ));
}
add_action( 'init', 'register_codieslab_footer_bottom_menu' );


/**
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH);

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'single_post_template_override');
  
/**
* Single template function which will choose our template
*/
function single_post_template_override($single) {
	
	global $wp_query, $post;
	
	if ( $post->post_type == 'post' ) {

		return SINGLE_PATH . '/single-post.php';
		 
	}elseif( $post->post_type == 'casestudy' ){

		return SINGLE_PATH . '/single-casestudy.php';
		
	}else{
  		return $single;
	}	  
}

function check_number($number){
    if($number % 2 == 0){
        return "pinkHighlight"; 
    }
    else{
        return "whiteHighlight";
    }
}
function createidslug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}
class WPSE_headermenu_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='dowpDown'>
                                 <div class='dropCont'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>
        				</div>
        				<div class='dropFoot'>
                            <p><img src='./img/help-icon.svg' alt='' class='mCS_img_loaded'> <strong>Not finding</strong> what you are looking for ?</p>
                            <a href='./contact.html' class='btn btn-navContact'>Contact us</a>
                        </div>
                    </div>\n";
    }

    function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	    global $wp_query, $wpdb;
	    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

	    $class_names = $value = '';

	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $classes[] = 'menu-item-' . $item->ID;

	    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	    $class_names = ' class="' . esc_attr( $class_names ) . '"';

	    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';	  

	    // $has_children = $wpdb->get_var("SELECT COUNT(meta_id)
     //                        FROM wp_postmeta
     //                        WHERE meta_key='_menu_item_menu_item_parent'
     //                        AND meta_value='".$item->ID."'");

	    $output .= $indent . '<li' . $id . $value . $class_names .'>';

	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	    $item_output = $args->before;
	    $item_output .= '<a'. $attributes .'>';
	    if ($depth == 1 ) {
	    	$item_output .= $args->link_before .'<h5>'. apply_filters( 'the_title', $item->title, $item->ID ) .'</h5><p>' . apply_filters( 'the_title', $item->description, $item->ID ).'</p>' . $args->link_after;
	    }else{

	   		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	    }
	    $item_output .= '</a>';
	    $item_output .= $args->after;

	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	  }

}
class WPSE_footer_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    function end_el (&$output, $data_object, $depth = 0, $args = null) {
		if ($depth == 0) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</div>\n";			
		}
	}
    function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	    global $wp_query, $wpdb;
	    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

	    $class_names = $value = '';

	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $classes[] = 'menu-item-' . $item->ID;

	    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	    $class_names = ' class="' . esc_attr( $class_names ) . '"';

	    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';	  

	   // $output .= $indent . '<li' . $id . $value . $class_names .'>';
	   
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';


	    if ($depth == 0) {

	    	$output .= $indent .'<div class="part-md-4">';
		  	
		  	$item_output = $args->before;
		    $item_output .= '<h5>'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after.'</h5>';
		    $item_output .= $args->after;		   
	    	
	    }else{
	    	
	    	$output .= $indent . '<li' . $id . $value . $class_names .'>';

		  	$item_output = $args->before;
		    $item_output .= '<a'. $attributes .'>';
		   
		    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		  
		    $item_output .= '</a>';
		    $item_output .= $args->after;
	    }
	  
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
