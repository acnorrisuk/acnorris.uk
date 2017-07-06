<!doctype html>
<html class="no-js" lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
            <header class="masthead">
            
                <div class="wrap masthead__content">
                    <img class="masthead__profile" src="<?php echo get_template_directory_uri();?>/img/adam-norris-profile-bw.jpg" alt="Adam Norris">
                    <h1 class="masthead__logo"><a href="<?php echo esc_url(site_url('/')); ?>"><?php bloginfo('name');?></a></h1>
                    <p class="masthead__tagline"><?php bloginfo('description');?></p>
                </div>
            
            </header>

        <main>