<?php
/**
 * Template Name: Main Home Page
 */
?>
<div class="main-header">
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

        <div class="site-branding-main" style="background-image: url(<?php header_image(); ?>)">
            <nav id="site-navigation" class="main-navigation main-page-nav" role="navigation">
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
            <div class="site-social-top">
                <div class="social-icon-box">
                    <?php sh_ghazale_social_menu(); ?>
                </div>
            </div>

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <div class="logo-align">
                <div class="logo-circle">
                    <?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                </div>

            </div>
            <div class="arrow-down">
                <nav>
                    <i class="fa fa-arrow-circle-o-down active" data-scroll-nav='0'></i>
                </nav>
            </div>

        </div><!-- .site-branding -->


    </header><!-- #masthead -->
    <div id="content" class="site-content-main">
    </div>
    </div>
</div>
<section data-scroll-index='0'>
<div class="textbox-container">

    <div class="main-textbox-1"><?php

        echo '<img src="' . get_theme_mod('icon1', get_template_directory_uri() .'/images/icon1.png'). '">';

        echo '<h3>' . get_theme_mod('title1','Default Title') .'</h3>';

        echo get_theme_mod( 'text1', 'default_value' );

        echo '<a href ="' . get_theme_mod('button1', 'http://') .'"><input type="button" value="See More"/></a>';

        ?></div><div class="main-textbox-2"><?php

        echo '<img src="' . get_theme_mod('icon2', get_template_directory_uri() .'/images/icon2.png'). '">';

        echo '<h3>' . get_theme_mod('title2','Default Title') .'</h3>';

        echo get_theme_mod( 'text2', 'default_value' );

        echo '<a href ="' . get_theme_mod('button2', 'http://') .'"><input type="button" value="See More"/></a>';

        ?></div><div class="main-textbox-3"><?php

        echo '<img src="' . get_theme_mod('icon3', get_template_directory_uri() .'/images/icon3.png'). '">';

        echo '<h3>' . get_theme_mod('title3','Default Title') .'</h3>';

        echo get_theme_mod( 'text3', 'default_value' );

        echo '<a href ="' . get_theme_mod('button3', 'http://') .'"><input type="button" value="See More"/></a>';

        ?></div>

</div>
</section>
<?php get_footer(); ?>
