<?php get_header(); ?>

<?php 
	$all_terms = get_terms( 'video_posts_category' );
	$terms_total = count($all_terms); ?>

<?php	

	for ($x = 0; $x < $terms_total; $x++){
		

 ?>

	


<?php } ?>
<div class="container">


<?php 

$args = array(
	'post_type' => 'video_posts',
	// 'cat' 		=> 7
);

	$each_video_post = new WP_Query($args);
	$category_id = get_cat_ID('video_posts_category');
	$category_link = get_category_link($category_id);
 ?>



<?php if ($each_video_post->have_posts()) { 
while($each_video_post->have_posts()) { $each_video_post->the_post();


?>
	
	<div class="col-3">
		<div class="row">
			<?php var_dump(); ?>
		</div>
		<div class="row">
		<h1><?php the_title(); ?></h1>
	</div>	
	<div class="row">
		<p><?php the_post_thumbnail_url("medium"); ?></p>
		</div>

	<div class="row">
		<p><?php the_permalink(); ?></p>
		</div>
	</div>

	
<?php } } ?>
</div>



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