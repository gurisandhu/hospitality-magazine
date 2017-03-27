<div class="row">
	<a href="#" class="heading-button grey">
		News
		<span>View All</span>
	</a>
</div>
<div class="row">
	<?php for ($x = 1; $x <= 6; $x++) { ?>
	<div class="col-3">
		<div class="news" style="background-image:url('compressed/images/slider<?php echo $x;?>.jpg');">
			<div class="news-content row">
				<div class="news-heading row">
					Beat the summer heat with Crock Pot cooking
				</div>
				<div class="news-text row">
					Attending a trade show can be very effective method of promoting your company.
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
