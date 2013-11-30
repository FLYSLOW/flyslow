<div class="comments">
	<?php if (have_comments()): ?>
	<h2><?php comments_number('0条', '1条', '%条'); ?>关于《<?php the_title(); ?>》的评论</h2>
	<ol>
		<?php wp_list_comments(); ?>
	</ol>
	<?php endif ?>
	<?php comment_form(); ?>
</div>