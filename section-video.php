<div class="row">
	<a href="#" class="heading-button marron">
		<h3>Videos</h3>
		<span>View All</span>
	</a>
</div>
<div class="row">
	<div class="col-3">
		<a href="#" class="video-container full-width">
			<div class="video" style="background-image:url('http://embed.wistia.com/deliveries/5413caeac5fdf4064a2f9eab5c10a0848e42f19f.jpg?video_still_time=10');">
				<div class="table">
					<div class="table-cell">
						<div class="play-video-but"><i class="fa fa-play"></i></div>
					</div>
				</div>
				<div class="video-heading">
					Beat the summer heat with Crock Pot cooking
				</div>
			</div>
		</a>
	</div>
	<div class="col-3 related-videos">
		<?php for ($x = 1; $x <= 3; $x++) { ?>
			<a href="#" class="each-video">
				<div class="related-video-image" style="background-image: url('compressed/images/slider<?php echo $x; ?>.jpg');">
					<div class="table">
						<div class="table-cell">
							<div class="small-video-but"><i class="fa fa-play"></i></div>
						</div>
					</div>
				</div>
				<div class="related-video-text">
					Beat The Summer Heat with Crock Pot cooking
				</div>
			</a>
		<?php } ?>
	</div>
	<div class="col-3">
		<a href="#" class="full-width">
			<div class="ad-category" style="background-image:url('compressed/images/slider3.jpg');">
				<div class="ad-text">Advertisement</div>
			</div>
		</a>
	</div>
</div>

