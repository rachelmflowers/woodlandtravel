<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <?php // icons & favicons ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-57x57.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-60x60.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-72x72.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-76x76.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-114x114.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-120x120.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-144x144.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-152x152.png?v=Jyn5vm26qp">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-180x180.png?v=Jyn5vm26qp">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-32x32.png?v=Jyn5vm26qp" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/android-chrome-192x192.png?v=Jyn5vm26qp" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-96x96.png?v=Jyn5vm26qp" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-16x16.png?v=Jyn5vm26qp" sizes="16x16">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json?v=Jyn5vm26qp">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon.ico?v=Jyn5vm26qp">
        <meta name="msapplication-TileColor" content="#00b05a">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-144x144.png?v=Jyn5vm26qp">
        <meta name="theme-color" content="#ffffff">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // typekit fonts ?>
        <script>
            (function(d) {
            var config = {
                kitId: 'vee8vzl',
                scriptTimeout: 3000
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
        </script>

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>

    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

        <div id="container">

            <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

                <div id="inner-header" class="wrap cf">
                    <a id="airstream-logo" href="/inventory/airstream-travel-trailers/"><img src="<?=get_template_directory_uri();?>/library/images/airstream-logo.png" alt="Airstream of Michigan" /></a>
                    <a id="logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?=get_template_directory_uri();?>/library/images/woodland-logo.png" alt="Woodland Travel Center" /></a>

                    <div id="navs-search">
                        <nav id="constant-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <?php wp_nav_menu(array(
                                     'container' => false,                           // remove nav container
                                     'container_class' => 'menu',                 // class of container (should you choose to use it)
                                     'menu' => __( 'The Constant Navigation', 'bonestheme' ),  // nav name
                                     'menu_class' => 'nav',               // adding custom nav class
                                     'theme_location' => 'constant-nav',                 // where it's located in the theme
                                     'before' => '',                                 // before the menu
                                       'after' => '',                                  // after the menu
                                       'link_before' => '',                            // before each link
                                       'link_after' => '',                             // after each link
                                       'depth' => 0,                                   // limit the depth of the nav
                                     'fallback_cb' => ''                             // fallback function (if there is one)
                            )); ?>

                        </nav>

                        <?php get_search_form() ?>

                        <nav id="primary-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <?php wp_nav_menu(array(
                                     'container' => false,                           // remove nav container
                                     'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                                     'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                                     'menu_class' => 'nav top-nav cf',               // adding custom nav class
                                     'theme_location' => 'main-nav',                 // where it's located in the theme
                                     'before' => '',                                 // before the menu
                                       'after' => '',                                  // after the menu
                                       'link_before' => '',                            // before each link
                                       'link_after' => '',                             // after each link
                                       'depth' => 0,                                   // limit the depth of the nav
                                     'fallback_cb' => ''                             // fallback function (if there is one)
                            )); ?>

                        </nav>

                    </div>

                </div>

            </header>
