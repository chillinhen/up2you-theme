<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php
            if (wp_title('', false)) {
                echo ' :';
            }
            ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
        <script>
// conditionizr.com
// configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <?php get_template_part('svg/inline', 'icons.svg'); ?>
        <!-- wrapper -->
        <div id="page">

            <!-- header -->
            <header class="header clear" role="banner">
                <div class="top fixed">
                    <div class="wrapper">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                            </a>
                        </div>
                        <!-- /logo -->
                        <!-- nav -->
                        <nav id="main-nav" class="nav" role="navigation">
                            <?php html5blank_nav(); ?>
                        </nav>
                        <!-- /nav -->

                        <div id="meta-nav">
                            <?php wp_nav_menu(array('theme_location' => 'meta-links', 'menu_class' => 'meta-menu', 'container' => '', 'fallback_cb' => '')); ?>
                        </div>
                        <div class="navbar-toggle btn">
                            <span class="icon">
                                <svg><use xlink:href="#menu"></use></svg>
                            </span>
                            <span>Menu</span>
                        </div>
                    </div>
                </div>

                <?php if (is_home() || is_front_page()) : ?>
                    <?php get_template_part('partials/banner', 'home'); ?>
                <?php elseif (is_page('kontakt')) : ?>
                <?php get_template_part('partials/banner', 'contact'); ?>                  
                <?php else: ?>
                    <?php get_template_part('partials/banner', 'other'); ?>
                <?php endif; ?>
            </header>
            <!-- /header -->
