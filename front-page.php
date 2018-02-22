<?php

get_header(); ?>

<div class="pad home-grid">
    <header class="masthead">

        <!-- <div>
            <a class="home-link" href="<?php echo esc_url(site_url('/')); ?>">
                <p class="masthead__logo"><?php bloginfo('name');?></p>
                <p class="masthead__tagline"><?php bloginfo('description');?></p>
            </a>
        </div> -->
        <nav class="main-navigation">
            <ul>
                <li><a href="/acnorrisuk"><span aria-hidden="true">&#8627;</span> Home</a></li>
                <li><a href="blog"><span aria-hidden="true">&#8627;</span> Blog</a></li>
                <li><a href="about"><span aria-hidden="true">&#8627;</span> About</a></li>
            </ul>
        </nav>

    </header>
    <div class="primary">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p class="lead">I am a front-end developer currently working for a digital agency based in Leeds, UK.</p>
    </div>
</div>

<?php get_footer(); ?>