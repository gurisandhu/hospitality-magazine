<?php get_header();

$post_categories = get_queried_object();
$current_cat = $post_categories->term_id;
 ?>
<!--++++++++++++++ 
Recent News
++++++++++++++ -->

<?php 
$the_latest_post = new WP_Query( array(
		'posts_per_page' => 1,
		// 'cat'			=> $current_cat,
	));
if ($the_latest_post->have_posts()) { 
	while($the_latest_post->have_posts()) { $the_latest_post->the_post(); ?>
		<section class="marron-tag wrapper archive-head">
			<div class="container">
				<div class="row">
					<div class="heading-tag">
						<h3><?php echo single_tag_title(); ?></h3>
					</div>
				</div>
				
				<div class="row">
					<a href="<?php echo get_the_permalink(); ?>" class="row">
						<div class="col-2-archive-head" style="background-image:url('<?php the_post_thumbnail_url("medium", $the_latest_post->ID); ?>');">
							
						</div>
						<div class="col-2-archive-head">
							<?php echo trimText("<h2>" . get_the_title() . "</h2><p>" . get_the_excerpt() . "</p>", '', 198); ?>
							<div class="row">
								<button class="medium-but">Read more</button>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>
	<?php } 
} wp_reset_postdata(); ?>


<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<?php 
	$second_posts = new WP_Query( array(
		'posts_per_page' => 6,
		// 'cat'			=> $current_cat,
		));
	$count_second_posts = 1;

	$count_posts = $count_second_posts;
	$news_square = $second_posts;

	if ($news_square->have_posts()) {
 ?>
	<section class="wrapper tiles">
		<div class="container">		
	        <div class="row">
				<?php while($news_square->have_posts()) { $news_square->the_post(); ?>
					<?php if($count_posts !==1) { ?>
						<a href="<?php the_permalink(); ?>" class="col-3">
							<div class="news" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
							</div>
							<div class="news-content full-width">
								<div class="news-heading full-width">
									<?php echo trimText( get_the_title(), '', 100); ?>
								</div>
							</div>
						</a>
					<?php } ?>
					<?php if($count_posts == 4) { ?>
							<a href="#" class="col-3">
								<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider4.jpg');">
								</div>
								<div class="ad-text">Advertisement</div>
							</a>
				<?php } $count_posts++; } ?>
			</div>
		</div>
	</section>
<?php } ?>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include (get_stylesheet_directory() . '/section-newsletter.php'); ?>

<!--++++++++++++++ 
News Squares
++++++++++++++ -->
<?php 
	$third_posts = new WP_Query( array(
		'posts_per_page' => 10,
		// 'cat'			=> $current_cat,
		));
	$count_third_posts = 1;
	$count_posts = $count_third_posts;
	$news_square = $third_posts;

	if ($news_square->have_posts()) {
 ?>
	<section class="wrapper tiles">
		<div class="container">		
	        <div class="row">
				<?php while($news_square->have_posts()) { $news_square->the_post(); ?>
					<?php if($count_posts > 6) { ?>
						<a href="<?php the_permalink(); ?>" class="col-3">
							<div class="news" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
							</div>
							<div class="news-content full-width">
								<div class="news-heading full-width">
									<?php echo trimText( get_the_title(), '', 100); ?>
								</div>
							</div>
						</a>
					<?php } ?>

					<?php if($count_posts == 8) { ?>
						<a href="#" class="col-3">
							<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider4.jpg');">
							</div>
							<div class="ad-text">Advertisement</div>
						</a>
						<a href="#" class="col-3">
							<div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider4.jpg');">
							</div>
							<div class="ad-text">Advertisement</div>
						</a>	
				<?php } $count_posts++; } ?>
			</div>
		</div>
	</section>
<?php } ?>

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