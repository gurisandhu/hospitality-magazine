<div class="row">
	<a href="#" class="heading-tag marron">
		<h3>In focus</h3>
		<span>View All</span>
	</a>
</div>
<div class="row">
	<div class="col-2">
		<a href="#" class="news-2" style="background-image:url('compressed/images/slider1.jpg');">
			<div class="news-content-2 full-width">
				<div class="news-heading-2 full-width">
					Beat the summer heat with Crock Pot cooking
				</div>
				<div class="news-text-2 full-width">
					Attending a trade show can be very effective method of promoting your company.
				</div>
			</div>
		</a>
	</div>
	<div class="col-2">
		<div class="related-content">
			<?php for ($x = 1; $x <= 3; $x++) { ?>
				<a href="#" class="each-related-content row">
					<div class="related-news-image" style="background-image: url('compressed/images/slider<?php echo $x; ?>.jpg');">
					</div>
					<div class="related-news-text">
						<div class="table">
							<div class="table-cell">
								Beat The Summer Heat with Crock Pot cooking
							</div>
						</div>
					</div>
				</a>
			<?php } ?>
		</div>
	</div>
</div>
