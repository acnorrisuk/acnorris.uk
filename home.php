<?php get_header(); ?>

<div class="wrap pad">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
    <article class="post">
        <div class="post__meta">
            <span><?php echo get_the_date();?> on</span>
            <span><?php the_category(', '); ?></span>
        </div>
        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>

    <?php endwhile; endif; ?>

    <?php the_posts_pagination( array( 'mid_size'  => 3 ) ); ?>

</div>

<?php get_footer(); ?>