<?php while(have_posts()): the_post(); ?>
<article class="post">
    <div class="post-hd clearfix">
        <div class="post-date">
            <div class="post-day"><?php the_date("d"); ?></div>
            <div class="post-yearmonth"><?php echo get_the_date("Y-m"); ?></div>
        </div>
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="post-meta">
        <span class="post-cate"><?php the_category(","); ?></span>
        <?php if (get_the_tags()): ?>
        <span class="post-tag"><?php the_tags(""); ?></span>
        <?php endif ?>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>
<div class="prev-next">
    <span class="prev"><?php previous_post_link('<<%link'); ?></span>
    <span class="next"><?php next_post_link('%link>>'); ?></span>
</div>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php get_template_part('pagination'); ?>