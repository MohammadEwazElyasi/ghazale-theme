<?php
/**
 * sh_ghazale functions and definitions
 *
 * @package sh_ghazale
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

if ( ! function_exists( 'sh_ghazale_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sh_ghazale_setup() {

    $font_url = 'http://fonts.googleapis.com/css?family=Raleway:700,800,400,300';
    add_editor_style( array( 'inc/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sh_ghazale, use a find and replace
	 * to change 'sh_ghazale' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sh_ghazale', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sh_ghazale' ),
        'social' => __('Social Menu' , 'sh_ghazale'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

    /*
	 * Enable logo upload in customizer.
	 */
    // Create a custom image size for Site Logo.
    add_image_size( 'large-thumb', 1060, 300, true);
    add_image_size('index-thumb',780,200, true);
    $args = array(
        'header-text' => array(
            'site-title',
            'site-description',
        ),
    );
    add_theme_support( 'site-logo', $args );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'sh_ghazale_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // sh_ghazale_setup
add_action( 'after_setup_theme', 'sh_ghazale_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sh_ghazale_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sh_ghazale' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'sh_ghazale' ),
        'id'            => 'sidebar-2',
        'description'   => 'Widgets in this area appears in the footer of the site',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

}
add_action( 'widgets_init', 'sh_ghazale_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sh_ghazale_scripts() {
	wp_enqueue_style( 'sh_ghazale-style', get_stylesheet_uri() );

    wp_enqueue_style('sh_ghazale_google_fonts','http://fonts.googleapis.com/css?family=Raleway:700,800,400,300');

    wp_enqueue_style('sh_ghazale_fontawesome','http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    if (is_page_template('page-templates/page-no-sidebar.php')) {
        wp_enqueue_style( 'sh_ghazale-layout-style' , get_template_directory_uri() . '/layouts/no-sidebar.css');
    } else {
        wp_enqueue_style( 'sh-ghazale-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');
    }

	wp_enqueue_script( 'sh_ghazale-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'sh_ghazale-masonry', get_template_directory_uri() . '/js/masonry-footer-widgets.js', array('masonry'), '20150412', true );

    wp_enqueue_script( 'sh_ghazale-search-toggle', get_template_directory_uri() . '/js/search-toggle.js', array('jquery'), '20150412', true );

    wp_enqueue_script( 'sh_ghazale-scrollit', get_template_directory_uri() . '/js/scrollIt.min.js', array('jquery'), '20150412', true );

    wp_enqueue_script( 'sh_ghazale-scroll-content', get_template_directory_uri() . '/js/scroll-content.js', array('jquery'), '20150412', true );

	wp_enqueue_script( 'sh_ghazale-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sh_ghazale_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Gets icons from font awesome
 */
