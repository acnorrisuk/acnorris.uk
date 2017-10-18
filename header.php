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
            
                <div class="wrap wrap--large masthead__content">
                    <a class="home-link" href="<?php echo esc_url(site_url('/')); ?>">
                        <p class="masthead__logo"><?php bloginfo('name');?></p>
                        <p class="masthead__tagline"><?php bloginfo('description');?></p>
                    </a>
                </div>
            
            </header>

        <main>