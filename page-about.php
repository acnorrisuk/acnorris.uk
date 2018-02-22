<?php

get_header(); ?>

<div class="pad main-grid">
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
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="primary">
        <h2>Who am I?</h2>
        <p>My name is Adam Norris and I am a front-end developer currently working for a digital agency based in Leeds, UK.</p>
        <h2>My Interests</h2>
        <p>I work mostly as a front-end developer but my skills extend into into design, SEO and web analysis. We mostly build static sites and custom Wordpress themes for clients requiring a CMS. I am particularly interested in site optimisation, security and accessibility.</p>
        <h2>My Skills</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis repudiandae, neque sed!</p>
        <ul class="list-columns">
        <li>Front-End Development</li>
        <li>Custom Wordpress Theming</li>
        <li>Web Design</li>
        <li>UX Research</li>
        <li>Analytics Reporting</li>
        <li>Technical SEO</li>
        <li>QA Auditing</li>
        <li>Blog Writing</li>
        <li>HTML Emails</li>
        </ul>

        <h2>Find Me</h2>
        <p>You can find me on the various social channels below or alternatively, contact me at <a href="mailto:acnorrisuk@gmail.com">acnorrisuk@gmail.com</a></p>
    </div>
</div>

<?php get_footer(); ?>