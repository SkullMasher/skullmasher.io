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
<header id="top" class="page-header page-header--masthead" role="banner">
<?php $description = get_bloginfo( 'description', 'display' ); ?>
<?php elseif ( is_home() ) : ?>
<header id="top" class="page-header" role="banner">
<?php $description_blog = 'Blogmasher !'; ?>
<?php else : ?>
<header id="top" class="page-header" role="banner">
<?php endif; ?>
  <nav class="o-wrapper site-nav" role="navigation">
    <a class="site-nav__home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo.svg')?><span class="site-nav__site-name"><?php bloginfo( 'name' ); ?></span></a>
<?php wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'menu primary-menu unstyled',
  'container' => false,
  'depth' => 1
)); ?>
  </nav>
<?php if ( $description || is_customize_preview() ) : ?>
  <div class="o-wrapper site-branding">
    <h1 class="site-description"><?php echo $description; ?></h1>
  </div>
<?php else: ?>
  <div class="blog-description">
    <h1 class="blog-description__title"><?php echo $description_blog; ?></h1>
    <h2 class="blog-description__lodr">Hello There c'est Skull'</h2>
  </div>
<?php endif; ?>
</header>
<div id="content" class="site-content">
