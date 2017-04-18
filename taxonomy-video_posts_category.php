<?php get_header(); 

$video_posts     =   array( 'post_type' => 'video_posts');
$each_video_post  =   new WP_Query( $video_posts );
?>
<!--++++++++++++++ 
Recent News
++++++++++++++ -->
<section class="marron-tag wrapper archive-head">
	<div class="container">
		<div class="row">
			<div class="heading-tag">
				<h3>Videos</h3>
			</div>
		</div>
		<div class="row">
			<a href="#" class="row video-tile">
				<div class="col-2-archive-head" style="background-image:url('http://embed.wistia.com/deliveries/5413caeac5fdf4064a2f9eab5c10a0848e42f19f.jpg?video_still_time=10');">
					<div class="table">
						<div class="table-cell">
							<div class="play-video-but"><i class="fa fa-play"></i></div>
						</div>
					</div>
				</div>
				<div class="col-2-archive-head">
					<h2>Beat the summer heat With Crock pot cooking</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam eaque tenetur dolorem dolores animi sed ad reiciendis nam ex id facere cupiditate.</p>
					<button class="medium-but">Read more</button>
				</div>
			</a>
		</div>
	</div>
</section>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<section class="wrapper tiles">
	<div class="container">		
        <?php include (get_stylesheet_directory() . '/section-sub-video.php'); ?>
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
        <?php include (get_stylesheet_directory() . '/section-sub-video-2ad.php'); ?>
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

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>