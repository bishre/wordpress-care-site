<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            </a>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            // Display the WordPress navigation menu
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container' => false,
            ));
            ?>
        </nav><!-- #site-navigation -->
        <div class="language-switcher">
            <?php pll_the_languages(array('dropdown'=> 0, 'show_flags' => 0, 'show_names' => 1)); ?>
        </div>
        <div>
            <a class="button" href="#">Buy tickets</a>
        </div>
    </header><!-- #masthead -->
    <div id="content" class="site-content">
