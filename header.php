<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js min-w-full">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700|Merriweather:400,400italic,700,700italic|Bitter:400,400italic,700">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-NJXGk7R+8gWGBdutmr+/d6XDokLwQhF1U3VA7FhvBDlOq7cNdI69z7NQdnXxcF7k" crossorigin="anonymous">

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

<body <?= body_class("font-normal text-base text-foreground bg-background relative leading-normal overflow-x-hidden") ?>>

<a class="screen-reader-text" href="#content"><?php echo 'Skip to content'; ?></a>

<div class="header contentBlock desktop:flex desktop:justify-between items-end text-xs no-underline">
    <header id="top" class="desktop:max-w-xs">
        <div class="brand">
            <h1 class="site-title bg-primary p-normal desktop:pt-largest text-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="inline-block mt-large desktop:mt-0">
                    <img src="<?= get_template_directory_uri() ?>/images/brand.png" alt="<?php bloginfo('name'); ?>" class="w-full h-auto" />
                    <span class="screen-reader-text">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
            </h1>
            <h2 class="screen-reader-text">
                <?php echo get_bloginfo('description', 'display'); ?>
            </h2>
        </div>
    </header>

    <div class="header-nav fixed pin-t pin-r pin-l max-h-screen bg-background desktop:bg-transparent desktop:flex-grow desktop:relative max-h-screen desktop:max-h-none overflow-y-auto desktop:overflow-y-visible z-50">
        <div class="nav-panel p-normal hidden desktop:block relative">
            <?php wp_nav_menu(array('main' => 'Primary Menu')); ?>
        </div>
        <input type="checkbox" id="nav-toggle" class="toggle-check desktop:hidden">
        <label for="nav-toggle" id="nav-toggle-label" class="toggle-label block w-full desktop:hidden bg-primaryLight text-background text-center font-bold cursor-pointer py-normal block">
            Navigation
        </label>
        <div class="nav-panel-mobile toggle-panel desktop:hidden p-normal text-normal overflow-hidden shadow-lg bg-foreground">
            <?php wp_nav_menu(array('main' => 'Primary Menu')); ?>
        </div>
    </div>
</div>

<div id="content" class="contentBlock contentPanel">
