<?php get_header(); ?>
<!--++++++++++++++ 
Recent News
++++++++++++++ -->
<section class="marron-tag wrapper archive-head">
	<div class="container">
		<div class="row">
			<div class="heading-tag">
				<h3>News</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-2-archive-head" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider1.jpg');">
				
			</div>
			<div class="col-2-archive-head">
				<h2>Beat the summer heat With Crock pot cooking</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam eaque tenetur dolorem dolores animi sed ad reiciendis nam ex id facere cupiditate.</p>
				<a href="#" class="medium-but">Read more</a>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<section class="wrapper tiles">
	<div class="container">		
        <?php include (get_stylesheet_directory() . '/section-news-square.php'); ?>
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
        <?php include (get_stylesheet_directory() . '/section-news-square-2ad.php'); ?>
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

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>