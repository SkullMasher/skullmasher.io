<?php
/**
 * skullmasher.io functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skullmasher.io
 */

if ( ! function_exists( 'skullmasher_io_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function skullmasher_io_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   */
  load_theme_textdomain( 'skullmasher-io', get_template_directory() . '/languages' );

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
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'skullmasher-io' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'skullmasher_io_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif;
add_action( 'after_setup_theme', 'skullmasher_io_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skullmasher_io_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'skullmasher_io_content_width', 640 );
}
add_action( 'after_setup_theme', 'skullmasher_io_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skullmasher_io_widgets_init() {
  register_sidebar( array(
    'id'            => 'homepage',
    'name'          => esc_html__( 'Homepage', 'skullmasher-io' ),
    'description'   => esc_html__( 'Homepage sidebar.', 'skullmasher-io' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'id'            => 'blog',
    'name'          => esc_html__( 'Blog', 'skullmasher-io' ),
    'description'   => esc_html__( 'Blog sidebar.', 'skullmasher-io' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'id'            => 'keypages',
    'name'          => esc_html__( 'Footer key pages', 'skullmasher-io' ),
    'description'   => esc_html__( 'Footer key pages list.', 'skullmasher-io' ),
    'before_widget' => '<div class="widget widget-keypages">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="is-hidden">',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'id'            => 'quote',
    'name'          => esc_html__( 'Footer quote', 'skullmasher-io' ),
    'description'   => esc_html__( 'Footer quote.', 'skullmasher-io' ),
    'before_widget' => '<div class="widget widget-quote">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="is-hidden">',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'id'            => 'colophon',
    'name'          => esc_html__( 'Footer colophon', 'skullmasher-io' ),
    'description'   => esc_html__( 'Footer colophon.', 'skullmasher-io' ),
    'before_widget' => '<div class="widget widget-colophon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="is-hidden">',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'skullmasher_io_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skullmasher_io_scripts() {
  wp_enqueue_style( 'skullmasher-io-style', get_stylesheet_uri() );

  wp_enqueue_script( 'skullmasher-io-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'skullmasher-io-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'skullmasher_io_scripts' );

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
