<?php get_header(); ?>

<div class="wrap pad articles">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
    <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>


<!--<a class="article" href="<?php the_permalink(); ?>">
        <article class="post">
    <svg style="display: none;">
       <symbol id="time-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z"/>
       </symbol>   
       <symbol id="code-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
           <path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/>
        </symbol>    
    </svg>
  
   <header>
 
            <h2 class="post__title"><?//php the_title(); ?></h2>

        
        <div class="post__meta">
            <p class="post__date">
               <svg class="post__icon"><use xlink:href="#time-icon" /></svg>
               <span><?//php echo get_the_date();?></span>
            </p>
            <div class="post__categories">
               <svg class="post__icon"><use xlink:href="#code-icon" /></svg>
               <span><?//php echo get_the_category( ', ' ); ?></span>
            </div>
        </div>
    </header>
    

        <div class="post__excerpt"><?//php the_excerpt();?></div>


</article>
    </a>-->