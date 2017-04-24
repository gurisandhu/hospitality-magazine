<?php get_header(); 

$post_categories = get_queried_object();
$current_cat = $post_categories->slug;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$video_posts     =   array( 
	'post_type' => 'video_posts',
	'posts_per_page' => 10,
	'paged' 		=> $paged,
	'tax_query'			=> array(
			array(
				'taxonomy'	=> 'video_posts_category',
				'field' => 'slug',
				'terms' => array($current_cat)
				),
		),
	);
$each_video_post  =   new WP_Query( $video_posts );

?>

<!--++++++++++++++ 
Recent News
++++++++++++++ -->
<section class="marron-tag wrapper archive-head">
	<div class="container">
		<div class="row">
			<div class="heading-tag">
				<h3>Videos - <?php echo get_the_archive_title(); ?></h3>
			</div>
		</div>
		<div class="row">
			<?php if ($each_video_post->have_posts()) {?>
				<?php while($each_video_post->have_posts()) { $each_video_post->the_post(); 
					$current_post_num = $each_video_post->current_post + 1;
					if ($current_post_num == 1){
					?>
					<a href="<?php the_permalink(); ?>" class="row video-tile">
						<div class="col-2-archive-head" style="background-image:url('<?php the_post_thumbnail_url("medium"); ?>');">
							<div class="table">
								<div class="table-cell">
									<div class="play-video-but"><i class="fa fa-play"></i></div>
								</div>
							</div>
						</div>
						<div class="col-2-archive-head">
							<?php echo trimText("<h2>" . get_the_title() . "</h2><p>" . get_the_excerpt() . "</p>", '', 198); ?>
							
							<button class="medium-but">Read more</button>
						</div>
					</a>
					<?php } ?> <!-- if current num 1 -->
				<?php } ?> <!-- while have -->
			<?php } ?> <!-- if have posts -->
		</div>
	</div>
</section>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<section class="wrapper tiles">
	<div class="container">		
        <div class="row">
			<?php $counter = 1;
				if ($each_video_post->have_posts()) {?>
				<?php while($each_video_post->have_posts()) { $each_video_post->the_post(); 
					$current_post_num = $each_video_post->current_post + 1;
					if (($current_post_num > 1)&&($current_post_num < 7)){
					?>
					<a href="<?php echo get_the_permalink(); ?>" class="col-3">
						<div class="video-container full-width">
							<div class="sub-video" style="background-image:url('<?php the_post_thumbnail_url("medium"); ?>');">
								<div class="table">
									<div class="table-cell">
										<div class="play-video-but"><i class="fa fa-play"></i></div>
									</div>
								</div>
							</div>
							<div class="sub-video-heading">
									<?php echo trimText(get_the_title(), '', 100); ?>
							</div>
						</div>
					</a>
					<?php if ($counter == 3) { ?>
						<a href="#" class="col-3">
							<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider9.jpg');">
								</div>
							<div class="ad-text">Advertisement</div>
						</a>
					<?php } ?>
					<?php } ?> <!-- if current num 2 to 6 -->
				<?php $counter++; } ?> <!-- while have -->
			<?php } ?> <!-- if have posts -->
		</div>
	</div>
</section>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include (get_stylesheet_directory() . '/section-newsletter.php'); ?>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<section class="wrapper tiles">
	<div class="container">		
        <div class="row">
			<?php $counter = 1; 
				if ($each_video_post->have_posts()) {?>
				<?php while($each_video_post->have_posts()) { $each_video_post->the_post(); 
					$current_post_num = $each_video_post->current_post + 1;
					if (($current_post_num > 6)&&($current_post_num < 11)){
					?>
					<a href="<?php echo get_the_permalink(); ?>" class="col-3">
						<div class="video-container full-width">
							<div class="sub-video" style="background-image:url('<?php the_post_thumbnail_url("medium"); ?>');">
								<div class="table">
									<div class="table-cell">
										<div class="play-video-but"><i class="fa fa-play"></i></div>
									</div>
								</div>
							</div>
							<div class="sub-video-heading">
									<?php echo trimText(get_the_title(), '', 100); ?>
							</div>
						</div>
					</a>
					<?php if ($counter == 8) { ?>
						<a href="#" class="col-3">
							<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider9.jpg');">
								</div>
							<div class="ad-text">Advertisement</div>
						</a>
						<a href="#" class="col-3">
							<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider9.jpg');">
								</div>
							<div class="ad-text">Advertisement</div>
						</a>
					<?php } ?>
					<?php } ?> <!-- if current num 2 to 6 -->
				<?php $counter++; } ?> <!-- while have -->
		</div>
	</div>
</section>
<!--++++++++++++++ 
Pagination
++++++++++++++ -->
<section class="pagination-wrapper">
	<div class="container">
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>
</section>
<?php } ?> <!-- if have posts -->

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>