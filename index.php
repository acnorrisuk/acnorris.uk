<?php get_header(); ?>

<div class="pad wrap wrap--large has-sidebar">

    <div class="primary posts">

    <?php if(is_search()): ?>

        <h2 class="pagetitle">Articles including "<?php echo $s ?>"</h2>

    <?php elseif(is_category()): ?>

        <h2 class="pagetitle"><?php echo 'Posted In: ' . single_cat_title( '', false ); ?></h2>

    <?php endif; ?>
    
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

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>