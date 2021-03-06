<!--++++++++++++++ 
Archive
++++++++++++++ -->

<?php get_header(); 

$home_page_thumbnail_id = get_option( 'page_on_front' );

$post_categories = get_queried_object();
$current_cat = $post_categories->term_id;
 ?>
<!--++++++++++++++ 
Recent News
++++++++++++++ -->

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$the_latest_post = new WP_Query( array(
		'posts_per_page' => 1,
		'cat'			=> $current_cat,
		'paged' 		=> $paged
	));
if ($the_latest_post->have_posts()) { 
	while($the_latest_post->have_posts()) { $the_latest_post->the_post();
		if (has_post_thumbnail()){
			$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($the_latest_post->ID), 'medium')[0];
		} else {
			$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_page_thumbnail_id), 'medium')[0];
		}
	 ?>
		<section class="marron-tag wrapper archive-head">
			<div class="container">
				<div class="row">
					<div class="heading-tag">
						<h3><?php echo get_the_archive_title(); ?></h3>
					</div>
				</div>
				
				<div class="row">
					<a href="<?php echo get_the_permalink(); ?>" class="row">
						<div class="col-2-archive-head" style="background-image:url('<?php echo $feature_image; ?>');">
							
						</div>
						<div class="col-2-archive-head">
							<?php echo trimText("<h2>" . get_the_title() . "</h2><p>" . get_the_excerpt() . "</p>", '', 178); ?>
								
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
		'posts_per_page' => 7,
		'cat'			=> $current_cat,
		'paged' 		=> $paged
		));
	$count_second_posts = 1;

	$count_posts = $count_second_posts;
	$news_square = $second_posts;

	if ($news_square->have_posts()) {
 ?>
	<section class="wrapper tiles">
		<div class="container">		
	        <div class="row">
				<?php while($news_square->have_posts()) { $news_square->the_post(); 
					if (has_post_thumbnail()){
						$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($news_square->ID), 'medium')[0];
					} else {
						$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_page_thumbnail_id), 'medium')[0];
					}
					?>
					<?php if($count_posts !==1) { ?>
						<a href="<?php the_permalink(); ?>" class="col-3">
							<div class="news" style="background-image:url('<?php echo $feature_image; ?>');">
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
		'posts_per_page' => 12,
		'cat'			=> $current_cat,
		'paged' 		=> $paged
		));
	$count_third_posts = 1;
	$count_posts = $count_third_posts;
	$news_square = $third_posts;

	if ($news_square->have_posts()) {
 ?>
	<section class="wrapper tiles">
		<div class="container">		
	        <div class="row">
				<?php while($news_square->have_posts()) { $news_square->the_post(); 
					if (has_post_thumbnail()){
						$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($news_square->ID), 'medium')[0];
					} else {
						$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_page_thumbnail_id), 'medium')[0];
					}
					?>
					<?php if($count_posts > 6) { ?>
						<a href="<?php the_permalink(); ?>" class="col-3">
							<div class="news" style="background-image:url('<?php echo $feature_image; ?>');">
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
	<!--++++++++++++++ 
Pagination
++++++++++++++ -->
<section class="pagination-wrapper">
	<div class="container">
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>
</section>
<?php } ?>



<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>