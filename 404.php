<?php get_header(); ?>


<section class="wrapper">
	<div class="container-620">
		<h3>Page not found</h3>
		<p>Whoops. looks like the page you were looking for does not exit. Maybe try checking in Menu or <a href="<?php echo esc_url( home_url('')); ?>/contact/">contact us</a></p>
	</div>
</section>

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>