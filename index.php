<?php get_header(); ?>

<div class="articles">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <?php get_template_part('template-parts/article'); ?>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>