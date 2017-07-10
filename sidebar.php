<div class="secondary">

    <?php get_search_form(); ?>

    <h2>Categories </h2>

    <div class="post-categories">

        <?php $cats = get_categories();
        foreach($cats as $cat) : ?>

            <h3 class="post-category">
                <a href="<?php echo get_category_link( $cat->cat_ID );?>">
                    <?php echo $cat->name; ?> <span>(<?php echo $cat->count;?>)</span>
                </a>
            </h3>

        <?php endforeach; ?>

     </div>
</div>