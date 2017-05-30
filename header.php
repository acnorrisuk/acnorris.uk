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
     kkk
    <body <?php body_class(); ?>>
           <header class="masthead">
           
               <div class="wrap masthead__content">

                   <div>
                       <p class="site-logo">Adam Norris</p>
                       <p class="site-tagline">Front-End Developer</p>
                   </div>

                   <nav class="main-navigation" aria-label="main navigation">
                        <?php wp_nav_menu(array(
                            'menu' => 'main_menu',
                            'container' => false,
                            'menu_class' => 'list-reset main-menu'
                        ));
                        ?>
                    </nav>

                </div>
           
           </header>

        <main>