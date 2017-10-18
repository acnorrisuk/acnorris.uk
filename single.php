<?php get_header(); ?>

<div class="wrap wrap--large pad">

    <div class="post-wrap">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
         <a class="back-to-blog" href="<?php echo esc_url(site_url('/')); ?>">&larr; Back to Blog</a>
    <article class="post">
        <h1 class="post__title"><?php the_title(); ?></h1>
        <div class="post__meta">
            <span><?php echo get_the_date();?> on</span>
            <span><?php the_category(', '); ?></span>
        </div>
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

    </div>

</div>

<?php get_footer(); ?>