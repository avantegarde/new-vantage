<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ferus_Core
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>

    <?php wp_head(); ?>

    <?php if ( has_nav_menu('mobile-menu') ) : ?>
        <!-- Mobile Menu Styles -->
        <style>
            header nav.navbar-default #mobile-menu {
                display: none !important;
            }
            @media screen and (max-width:767px) {
                header nav.navbar-default #mobile-menu {
                    display: block !important;
                }

                header nav.navbar-default #primary {
                    display: none !important;
                }
            }
        </style>
    <?php endif; ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118996652-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118996652-1');
        // Google Ads: 735080079
        gtag('config', 'AW-735080079');
    </script>


</head>

<body <?php body_class(); ?>>

<!-- START Facebook Pixel -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- END Facebook Pixel -->

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bright_light'); ?></a>

    <?php if ( is_active_sidebar( 'alert-banner' ) ) : ?>
        <aside id="alert-banner" class="alert alert-danger" role="complementary">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <?php dynamic_sidebar( 'alert-banner' ); ?>
        </aside>
    <?php endif; ?>

    <header id="masthead" class="site-header" role="banner">

        <div class="header-inner">
            <div class="container">
                <h1 id="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri() . '/inc/images/logo.png'; ?>" width="200">
                        <?php if ( is_front_page() ) : ?>
                            <span>Morrison Reist Krauss - Expert Family & Employment Lawyers</span>
                        <?php else : ?>
                            <span><?php bloginfo('name'); ?></span>
                        <?php endif; ?>
                    </a>
                </h1>
                <!-- Toolbar -->
                <?php if ( is_active_sidebar( 'toolbar' ) ) : ?>
                    <aside id="toolbar" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'toolbar' ); ?>
                    </aside>
                <?php endif; ?>
                <div class="menu-wrap">
                    <div class="main-navigation">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbar-main">
                                <?php
                                // Main Menu
                                $defaults = array(
                                    'theme_location' => 'menu-1',
                                    'container' => false,
                                    'menu_class' => 'primary nav navbar-nav',
                                    'menu_id' => 'primary'
                                );
                                wp_nav_menu($defaults);
                                // Mobile Menu
                                $mobileArgs = array(
                                    'theme_location' => 'mobile-menu',
                                    'container' => false,
                                    'menu_class' => 'primary nav navbar-nav',
                                    'menu_id' => 'mobile-menu',
                                    'fallback_cb' => false
                                );
                                wp_nav_menu($mobileArgs);
                                ?>

                            </div>
                        </nav>
                    </div><!-- .main-navigation -->
                </div><!-- .menu-wrap -->
                <!-- <div class="header-search">
                    <form role="search" method="get" class="search" action="<?php echo esc_url(home_url('/')); ?>">
                        <label for="search_text"><i class="fa fa-search"></i></label>
                        <input type="text" class="search-text" id="search_text" placeholder="Site Search" value="" name="s" title="Search...">
                    </form>
                </div> -->
            </div><!-- .container -->
        </div><!-- .header-inner -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
