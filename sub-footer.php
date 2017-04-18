<!--++++++++++++++ 
Social media and Search
++++++++++++++ -->
<section>
	<div class="container">
		<div class="social-and-search">
			<div class="row">
				<?php include (get_stylesheet_directory() . '/section-social-and-links.php'); ?>
			</div>
			<div class="row">
				<form action="<?php echo esc_url( home_url( '/' )); ?>" class="row search-form">
					<div class="row">
						<input type="text" value="" name="s" id="s" placeholder="Enter your search term" />
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--++++++++++++++ 
Section: footer
++++++++++++++ -->
<footer>
	<div class="container">
		<div class="footer-col-3">
			<div class="internal-ad-footer">
				<div class="internal-ad-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/internal-ad.png" alt="">
				</div>
				<div class="internal-ad-content">
					<h4>Hosmag</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque.</p>
					<a href="#" class="small-but">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="footer-col-3">
			<div class="footer-menu">
				<h6>Category</h6>
				<ul>
					<li class="col-2"><a href="#">Home</a></li>
					<li class="col-2"><a href="#">News</a></li>
					<li class="col-2"><a href="#">Infocus</a></li>
					<li class="col-2"><a href="#">Management</a></li>
					<li class="col-2"><a href="#">Video</a></li>
					<li class="col-2"><a href="#">Directory</a></li>
					<li class="col-2"><a href="#">Magazine</a></li>
					<li class="col-2"><a href="#">Shop</a></li>
					<li class="col-2"><a target="_blank" href="http://www.intermedia.com.au/privacy-copyright">Privacy &amp; Policy</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-col-3">
			<div class="subscription-form">
				<form action="https://intermediagroup.createsend.com/t/j/s/mokyd/" method="post" id="subForm">
					<div class="heading">Subscribe to our newsletter</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="full-width">
						<input placeholder="E-mail" id="fieldEmail" name="cm-mokyd-mokyd" type="email" required>
						<input type="submit" value="Yes Please" class="small-but">
					</div>
					<div class="full-width">
						<div class="checkbox-button">
							Check to receive free digital magazine
							<input type="checkbox" checked name="gender" value="option1"><i class="new-checkbox"></i>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</footer>	