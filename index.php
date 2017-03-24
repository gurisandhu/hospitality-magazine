<?php include 'header.php'; ?>

<!--++++++++++++++ 
News
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<a href="#" class="heading-button grey">
				News
				<span>View All</span>
			</a>
		</div>
		<div class="row">
			<?php for ($x = 1; $x <= 6; $x++) { ?>
			<div class="col-3">
				<div class="news" style="background-image:url('compressed/images/news-1.png');">
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
	</div>
</section>


<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<form action="" class="subscription">
				<div class="heading row">
					Subscribe to our newsletter
				</div>
				<p class="row">Subscribe to our newsletter today to receive updates on the latest offers, and more!</p>
				<div class="row">
					<input type="text" placeholder="First Name">
					<input type="email" placeholder="E-mail">
					<input type="submit" value="Subscribe" class="button">
				</div>
				<div class="row">
					<div class="checkbox-button">
						Check to receive free digital magazine
						<input type="checkbox" name="gender" checked value="option1"><i class="new-checkbox"></i>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Videos
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<a href="#" class="heading-button marron">
				Videos
				<span>View All</span>
			</a>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="video" style="background-image:url('compressed/images/news-1.png');">
					<div class="video-content row">
						<div class="video-heading row">
							Beat the summer heat with Crock Pot cooking
						</div>
						<div class="video-text row">
							Attending a trade show can be very effective method of promoting your company.
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="related-content">
					<?php for ($x = 1; $x <= 3; $x++) { ?>
						<div class="row">
							<div class="related-video">
								<div class="related-video-image">
								</div>
								<div class="related-video-text">
									Beat The Summer Heat with Crock Pot cooking
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-3">
				<div class="advertisement">
					<div class="dummy-ad" style="background-image: url('compressed/images/dummy-ad.png');">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
In focus
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<a href="#" class="heading-button marron">
				In focus
				<span>View All</span>
			</a>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="news" style="background-image:url('compressed/images/news-1.png');">
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
			<div class="col-2">
				<div class="related-content">
					<?php for ($x = 1; $x <= 3; $x++) { ?>
						<div class="row">
							<div class="related-news">
								<div class="related-news-image">
								</div>
								<div class="related-news-text">
									Beat The Summer Heat with Crock Pot cooking
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Management
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<a href="#" class="heading-button marron">
				Management
				<span>View All</span>
			</a>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="news" style="background-image:url('compressed/images/news-1.png');">
					<div class="news-content row">
						<div class="news-heading row">
							Beat the summer heat with Crock Pot cooking
						</div>
						<div class="news-text row">
							Seven Cars We loved at the 2016 Detroit Auto Show
						</div>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="related-content">
					<?php for ($x = 1; $x <= 3; $x++) { ?>
						<div class="row">
							<div class="related-news">
								<div class="related-news-image">
								</div>
								<div class="related-news-text">
									Get Around Easily With A New York limousine service
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>