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
				<!-- <div class="internal-ad-image">
					
				</div> -->
				<!-- <div class="internal-ad-content"> -->
				<div class="row">
					<h4>Hospitality Magazine</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/internal-ad.png" alt="">
					<p>The leading source of news and business insights for Australia’s foodservice industry, Hospitality magazine brings you news, in-depth feature articles, management pointers and advice on how you can improve your business’ profitability.</p>
					<a href="#" class="small-but">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="footer-col-3">
			<div class="footer-menu">
				<h6>Category</h6>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
		</div>
		<div class="footer-col-3">
			<div class="subscription-form">
				<form action="https://intermediagroup.createsend.com/t/j/s/mokyd/" method="post" id="subForm">
					<div class="heading">Subscribe to our newsletter</div>
					<p>Join over 30,000 subscribers and get all the latest industry news and business tips.</p>
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