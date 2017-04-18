<?php get_header(); ?>

<?php 
	$all_terms = get_terms( 'video_posts_category' );
	$terms_total = count($all_terms);

	for ($x = 0; $x < $terms_total; $x++){
 ?>
		

 <?php } ?> <!-- end of for -->

<!--++++++++++++++ 
Videos Master Class
++++++++++++++ -->
<section class="grey-tag wrapper tiles-row">
	<div class="container">		
        <?php include (get_stylesheet_directory() . '/section-video.php'); ?>
	</div>
</section>

<!--++++++++++++++ 
Videos Products
++++++++++++++ -->
<section class="grey-tag wrapper tiles-row">
	<div class="container">		
        <?php include (get_stylesheet_directory() . '/section-video.php'); ?>
	</div>
</section>

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>