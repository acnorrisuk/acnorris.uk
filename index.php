<?php get_header(); ?>

<div>

    <?php if( is_home() ) : ?>
    
    <h1 class="page-title screen-reader-text">Blog</h1>
    
    <?php elseif(is_search() ): ?>
    
    <h1 class="page-title"><?php echo $s ?></h1>
    
    <?php elseif(is_category() ): ?>
    
    <h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>
    
    <?php elseif(is_archive() ): ?>
    
    <h1 class="page-title"><?php echo str_replace('Year: ','', get_the_archive_title()); ?></h1>
    
    <?php else : ?>
    
    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <?php endif; ?>
    
    <div class="posts">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
    <article class="post">
        <h2 class="post__title"><a class="plain-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post__date"><?php echo get_the_date();?></p>
        <p class="post__categories"><?php the_category(','); ?></p>
        <!-- <div class="post__excerpt">
            <?php //the_excerpt(); ?>
        </div> -->
    </article>

    <?php endwhile; endif; ?>

    </div>

    <?php the_posts_pagination( array( 'mid_size'  => 3 ) ); ?>

    <?//php get_sidebar(); ?>

</div>

<?php get_footer(); ?>