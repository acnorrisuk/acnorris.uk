<!doctype html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri();?>/manifest.json">
        <link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700" rel="stylesheet">

    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="site-content">

            <header class="masthead">

                <div class="masthead__group">

                    <h1 class="masthead__logo"><a class="plain-link" href="<?php echo esc_url(site_url('/')); ?>">Adam Norris</a></h1>

                    <nav class="masthead__nav">
                        <ul class="list-reset list-inline">
                            <li><a class="plain-link" href="about">About</a></li>
                            <li><a class="plain-link" href="blog">Blog</a></li>
                        </ul>
                    </nav>   
                
                </div>
                
                <hr>

            </header>

            <main class="main">