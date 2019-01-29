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
<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#202020">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#202020">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skullmasher-io' ); ?></a>
<?php if ( is_front_page() ) : ?>
<header id="top" class="page-header page-header--masthead" role="banner">
<?php $description = get_bloginfo( 'description', 'display' ); ?>
<?php elseif ( is_home() ) : ?>
<header id="top" class="page-header" role="banner">
<?php $description_blog = 'Blogmasher'; ?>
<?php else : ?>
<header id="top" class="page-header page-header--single-page" role="banner">
<?php endif; ?>
  <nav class="wrapper site-nav" role="navigation">
    <a class="site-nav__home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo.svg')?><span class="site-nav__site-name"><?php bloginfo( 'name' ); ?></span></a>
<?php wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'menu primary-menu unstyled',
  'container' => false,
  'depth' => 1
)); ?>
  </nav>
<?php if ( $description || is_customize_preview() ) : ?>
  <div class="wrapper site-branding">
    <h1 class="site-description"><?php echo $description; ?></h1>
  </div>
<?php elseif( $description_blog ): ?>
  <div class="blog-description">
    <h1 class="blog-description__title"><?php echo $description_blog; ?></h1>
    <h2 class="blog-description__lodr h4-like">Tutoriels informatiques et actualités geek</h2>
  </div>
<?php endif; ?>
</header>
<canvas id="canvas" class="canvas"></canvas>
<div id="content" class="site-content">
