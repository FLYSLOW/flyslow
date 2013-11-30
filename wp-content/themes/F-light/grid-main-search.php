<?php if (have_posts()): ?>
<div>关于的"<?php the_search_query(); ?>"搜索结果：</div>
<?php while(have_posts()): the_post(); ?>
<article class="post">
    <div class="post-hd clearfix">
        <div class="post-date">
            <div class="post-day"><?php the_date("d"); ?></div>
            <div class="post-yearmonth"><?php echo get_the_date("Y-m"); ?></div>
        </div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="post-meta">
        <span class="post-cate"><?php the_category(","); ?></span>
        <?php if (get_the_tags()): ?>
        <span class="post-tag"><?php the_tags(""); ?></span>
        <?php endif ?>
    </div>
    <div class="post-content">
        <?php the_content("Read More ..."); ?>
    </div>
</article>
<?php endwhile; ?>
<?php get_template_part('pagination'); ?>
<?php else: ?>
<div>无搜素结果！</div>
<?php endif ?>