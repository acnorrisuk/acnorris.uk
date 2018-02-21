<?php get_header(); ?>

<div class="pad main-grid">

    
    <?php if( is_home() ) : ?>
    
    <h1 class="page-title">Blog</h1>
    
    <?php elseif(is_search() ): ?>
    
    <h1 class="page-title">Posts including "<?php echo $s ?>"</h1>
    
    <?php elseif(is_category() ): ?>
    
    <h1 class="page-title"><?php echo 'Posted In: ' . single_cat_title( '', false ); ?></h1>
    
    <?php elseif(is_archive() ): ?>
    
    <h1 class="page-title"><?php echo 'Posted In: ' . str_replace('Year: ','', get_the_archive_title()); ?></h1>
    
    <?php else : ?>
    
    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <?php endif; ?>
    
    <div class="primary posts">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
    <article class="post">
        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post__meta">
            <span class="post__date"><?php echo get_the_date();?></span>
            <span class="post__categories"><?php the_category(); ?></span>
        </div>
        <div class="post__excerpt">
            <?php the_excerpt(); ?>
        </div>
    </article>

    <?php endwhile; endif; ?>

    <?php the_posts_pagination( array( 'mid_size'  => 3 ) ); ?>

    </div>

    <?//php get_sidebar(); ?>

</div>

<?php get_footer(); ?>