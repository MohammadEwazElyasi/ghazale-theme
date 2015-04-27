<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sh_ghazale
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sh_ghazale' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div id="search-container" class="search-box-wrapper clear">
                <div class="search-box clear">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="search-toggle">
                <i class="fa fa-search"></i>
                <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'sh-ghazale' ); ?></a>
            </div>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( '', 'sh_ghazale' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

        </nav><!-- #site-navigation -->

        <div class="site-branding" style="background-image: url(<?php header_image(); ?>)">
            <div class="logo-align">
                <div class="logo-circle">
                    <?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                </div>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            </div>

        </div><!-- .site-branding -->
        <div class="site-social-top">
            <div class="social-icon-box">
                <?php sh_ghazale_social_menu(); ?>
            </div>
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
