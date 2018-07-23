<?php get_header(); ?>


    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
        <h1 class="post__title"><?php the_title(); ?></h1>
            <p class="post__date"><?php echo get_the_date();?></p>
            <p class="post__categories"><?php the_category(', '); ?></p>
         <div class="post__content"><?php the_content();?></div>
    </article>

     <div class="post__links">
        <div class="post__previous">
            <?php previous_post_link('&larr; %link'); ?>
        </div>
        <div class="post__next">
            <?php next_post_link('%link &rarr;'); ?>
        </div>
    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>