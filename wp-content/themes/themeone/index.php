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
				<div class="main-wrap"></div>
			</div>
			<div class="grid-extra"></div>
		</div>
	</div>
</div>

<!-- footer start -->
<?php get_footer(); ?>
<!-- footer end