<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700|Merriweather:400,400italic,700,700italic|Bitter:400,400italic,700" rel="stylesheet" type="text/css">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-20056838-1', 'auto');
        ga('send', 'pageview');
    </script>

    <?php lawcha_wp_head(); ?>
</head>

<body <?php body_class(); ?> class="font-normal text-base text-foreground bg-background">

<a class="screen-reader-text" href="#content"><?php echo 'Skip to content'; ?></a>

<div class="header contentBlock desktop:flex desktop:justify-between items-end text-xs no-underline">
    <header id="top" class="desktop:max-w-xs">
        <div class="brand">
            <h1 class="site-title bg-primary p-normal pt-largest">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?= get_template_directory_uri() ?>/images/brand.png" alt="<?php bloginfo('name'); ?>" />
                    <span class="screen-reader-text">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
            </h1>
            <h2 class="screen-reader-text"><?php echo get_bloginfo('description', 'display'); ?></h2>
        </div>
    </header>

    <div class="header-nav desktop:flex-grow relative">
        <div class="nav-panel p-normal hidden desktop:block relative">
            <?php wp_nav_menu(array('main' => 'Primary Menu')); ?>
        </div>
        <input type="checkbox" id="nav-toggle" class="toggle-check desktop:hidden">
        <label for="nav-toggle" id="nav-toggle-label" class="toggle-label desktop:hidden">Navigation</label>
        <div class="nav-panel-mobile toggle-panel desktop:hidden">
            <?php wp_nav_menu(array('main' => 'Primary Menu')); ?>
        </div>
    </div>
</div>

<div id="content" class="content">
