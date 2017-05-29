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
        <?php if( is_single() ) : ?>
            <h1 class="post__title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        
        <div class="post__meta">
            <p class="post__date">
               <svg class="post__icon"><use xlink:href="#time-icon" /></svg>
               <span><?php echo get_the_date();?></span>
            </p>
            <div class="post__categories">
               <svg class="post__icon"><use xlink:href="#code-icon" /></svg>
               <span><?php the_category( ', ' ); ?></span>
            </div>
        </div>
    </header>
    
    <?php if( is_single() ) : ?>
        <div class="post__content"><?php the_content();?></div>
        <footer class="post__links">
           <div class="post__previous">
               <?php previous_post_link('&larr; %link'); ?>
           </div>
           <div class="post__next">
               <?php next_post_link('%link &rarr;'); ?>
           </div>
        </footer>
    <?php else : ?>
        <div class="post__excerpt"><?php the_excerpt();?></div>
    <?php endif; ?>
    
</article>