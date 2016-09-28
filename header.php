<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skullmasher.io
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skullmasher-io' ); ?></a>
<?php if ( is_front_page() ) : ?>
  <header id="top" class="o-wrapper page-header page-header--masthead" role="banner">
<?php elseif ( is_home() ) : ?>
  <header id="top" class="o-wrapper page-header" role="banner">
<?php else : ?>
  <header id="top" class="o-wrapper page-header" role="banner">
<?php endif; ?>
    <nav class="site-nav flex-container" role="navigation">
      <a class="site-nav__home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'menu flex-container primary-menu unstyled',
        'container' => false,
        'depth' => 1
      )); ?>
    </nav>
    <div class="site-branding">
    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
      <h1 class="site-description"><?php echo $description; ?></h1>
    <?php endif; ?>
    </div>
  </header>

  <div id="content" class="site-content">
