<!--++++++++++++++ 
Archive Video Posts
++++++++++++++ -->

<?php get_header(); 

	$home_page_thumbnail_id = get_option( 'page_on_front' );  

	$all_terms = get_terms( 'video_posts_category' );
	$terms_total = count($all_terms); 

	$list_of_terms = array();
	for ($x = 0; $x < $terms_total; $x++){
	
	$list_of_terms[$x] = array($all_terms[$x]->slug);	
 ?>


<section class="grey-tag wrapper tiles-row">
<div class="container">
	<div class="row">
		<a href="<?php echo esc_url( home_url()); ?>/video_posts_category/<?php echo $all_terms[$x]->slug; ?>" class="heading-tag">
			<h3>Videos - <?php echo $all_terms[$x]->name; ?></h3>
			<span>
				<div class="table">
					<div class="table-cell">
						View All
					</div>
				</div>
			</span>
		</a>
	</div>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' 		=> 'video_posts',
	'posts_per_page'	=> 	-1,
	'paged' 		=> $paged,
	'tax_query'			=> array(
			array(
				'taxonomy'	=> 'video_posts_category',
				'field' => 'slug',
				'terms' => array($list_of_terms[$x][0])
				),
		),
);

	$each_video_post = new WP_Query($args);

	$total_each_video_post = $each_video_post->found_posts;
 ?>


<?php if ($each_video_post->have_posts()) { ?>
<div class="row">
<?php
while($each_video_post->have_posts()) { $each_video_post->the_post();
	$current_post_num = $each_video_post->current_post + 1;
	if (has_post_thumbnail()){
		$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($each_video_post->ID), 'medium')[0];
	} else {
		$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_page_thumbnail_id), 'medium')[0];
	}
if ($current_post_num == 1){
?>
	<div class="col-3">
		<a href="<?php echo the_permalink(); ?>" class="video-container full-width">
			<div class="video" style="background-image: url('<?php echo $feature_image; ?>')">
				<div class="table">
					<div class="table-cell">
						<div class="play-video-but"><i class="fa fa-play"></i></div>
					</div>
				</div>
			</div>
			<div class="video-heading">
				<?php echo trimText(get_the_title(), '', 100); ?>
			</div>
		</a>
	</div>
<?php } ?> <!-- end of number 1 -->

<?php } ?> 

<?php if ($each_video_post->have_posts()) { ?>
<div class="col-3 related-videos">
<?php
while($each_video_post->have_posts()) { $each_video_post->the_post();
	$current_post_num = $each_video_post->current_post + 1;
	if (has_post_thumbnail()){
		$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($each_video_post->ID), 'thumbnail')[0];
	} else {
		$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_page_thumbnail_id), 'thumbnail')[0];
	}
if (($current_post_num > 1) && ($current_post_num < 5)){
?>
	<a href="<?php echo the_permalink(); ?>" class="each-video">
		<div class="related-video-image" style="background-image: url('<?php echo $feature_image; ?>');">
			<div class="table">
				<div class="table-cell">
					<div class="small-video-but"><i class="fa fa-play"></i></div>
				</div>
			</div>
		</div>
		<div class="related-video-text">
			<?php echo trimText(get_the_title(), '', 45); ?>
		</div>
	</a>
<?php } ?> <!-- end of number 1 -->

<?php } ?> 
</div>

<?php } ?>
<div class="col-3">
		<a href="#" class="full-width">
			<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider8.jpg');">
			</div>
			<div class="ad-text">Advertisement</div>
		</a>
	</div>
</div> <!-- end of row -->
<?php } ?>
</div> <!-- container -->
</section>

<?php } ?> <!-- end of for loop each category -->


<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>