<?php get_header(); ?>
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
        <?php include (TEMPLATEPATH . '/section-sub-video.php'); ?>
	</div>
</section>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include (TEMPLATEPATH . '/section-newsletter.php'); ?>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<section class="wrapper tiles">
	<div class="container">		
        <?php include (TEMPLATEPATH . '/section-sub-video-2ad.php'); ?>
	</div>
</section>

<!--++++++++++++++ 
Pagination
++++++++++++++ -->
<section class="pagination-wrapper">
	<div class="container">
		<ul class="pagination">
			<li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
			<li><a href="#">1</a></li>
			<li class="active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
		</ul>
	</div>
</section>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>