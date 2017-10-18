<div class="secondary">

    <?php get_search_form(); ?>

    <h2 class="archive-title">Categories </h2>

    <div class="post-archive">

        <ul class="post-archive__list">
            <?php $catse = wp_list_categories(array(
            'show_count' => true,
            'title_li' => ''
            )); ?>
        </ul>

     </div>

     <h2 class="archive-title">Archive</h2>

     <div class="post-archive">

     <ul class="post-archive__list">
        <?php $years = wp_get_archives(array(
        'type' => 'yearly',
        'show_post_count' => true,
        )); ?>
    </ul>

     </div>


</div>