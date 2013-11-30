<div id="main">
    <div class="grid-wrap clearfix">
        <div class="grid-main">
            <div class="main-wrap">
                <?php if (is_home() || is_archive() || is_category()) {get_template_part('grid-main');} ?>
                <?php if (is_404()) {get_template_part('grid-main', '404');} ?>
                <?php if (is_single()) {get_template_part('grid-main', 'single');} ?>
                <?php if (is_search()) {get_template_part('grid-main', 'search');} ?>
            </div>
        </div>
        <?php get_template_part('grid-extra'); ?>
    </div>
</div>
<a id="go-top" href="javascript: document.getElementById('main').children[0].scrollIntoView();">
	<div class="rectangle-h"></div><div class="triangle-up"></div>
</a>
