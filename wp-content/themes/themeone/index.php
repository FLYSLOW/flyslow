<!-- header start -->
<?php get_header(); ?>

<!-- header end -->

<div id="page">
    <div id="side">
        <div id="site-name">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php bloginfo( 'description' ); ?>
        </div>
        <nav class="main">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="current">Home</a>
            <a href="http://flyslow.net">Archives</a>
            <a href="http://flyslow.net">Others</a>
            <a href="<?php echo esc_url( home_url( '/' ) ) . 'about'; ?>">About</a>
        </nav>
    </div>
    <div id="main">
        <div class="grid-wrap clearfix">
            <div class="grid-main">
                <div class="main-wrap">
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
                </div>
            </div>
            <div class="grid-extra"></div>
        </div>
    </div>
</div>

<!-- footer start -->
<?php get_footer(); ?>
<!-- footer end -->