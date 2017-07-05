<!doctype html>
<html class="no-js" lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-54325837-1', 'auto');
    ga('send', 'pageview');

    </script>
            <header class="masthead">
            
                <div class="wrap masthead__content">
                    <img class="masthead__profile" src="<?php echo get_template_directory_uri();?>/img/adam-norris-profile-bw.jpg" alt="Adam Norris">
                    <h1 class="masthead__logo"><a href="<?php echo esc_url(site_url('/')); ?>">Adam Norris</a></h1>
                    <p class="masthead__tagline">Front-End Developer</p>
                </div>
            
            </header>

        <main>