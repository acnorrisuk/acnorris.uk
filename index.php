<?php get_header(); ?>

<div class="wrap pad">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        the_title();
        the_content();

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>