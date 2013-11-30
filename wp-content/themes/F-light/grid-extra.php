<div class="grid-extra">
    <?php get_search_form(); ?>
    <ul class="user-panel">
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
    </ul>
    <!--
    <div class="rss">
        <a href="<?php echo esc_url( home_url( '/' ) ) . 'feed'; ?>" target="_blank">RSS</a>
    </div>
    -->
    <div class="category">
        <div class="cat-title">Categories</div>
        <ul class="cat-list">
            <?php wp_list_categories('show_count=1&orderby=count&title_li=&'); ?>
        </ul>        
    </div>
    <div class="tag-cloud">
        <div class="tag-cloud-title">Tags</div>
        <?php wp_tag_cloud('smallest=10&largest=24&unit=px&number=0'); ?>
    </div>
    <div class="archive">
        <div class="archive-title">Archives</div>
        <ul class="archive-list">
            <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
        </ul>
    </div>
    <ul class="bookmark">
        <?php wp_list_bookmarks('title_before=<div class="bookmark-title">&title_after=</div>'); ?>
    </ul>
</div>