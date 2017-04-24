<?php get_header(); 

$post_categories = get_queried_object();
$current_cat = $post_categories->term_id;
?>


<section class="wrapper single-post">
	<div class="container-620">
		<div class="row">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="full-width">
			<div class="page-info"><?php echo get_the_date('d F, Y'); ?> by <b><?php echo $current_user->display_name; ?></b></div>
		</div>
		<div class="row">
			<div class="addthis_inline_share_toolbox"></div>
		</div>
		<div class="row inner-banner">
			<section class="slider">
				<?php 
                	$images = get_field('post_images_slider');
                	if($images) { ?>
		            <div id="slider" class="flexslider">
		                <ul class="slides">
		                	<li>
	                           	<img src="<?php the_post_thumbnail_url("medium");?>" alt="" title=""> 
	                        </li>
							<?php foreach($images as $image) { ?>
	                        <li>
	                           	<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"> 
	                        </li>
	                        <?php } ?>
		                </ul>
		            </div>
		            <div id="carousel" class="flexslider">
		            	<ul class="slides">
		            		<li style='background-image: url("<?php the_post_thumbnail_url("medium");?>");'></li>
		                    <?php foreach($images as $image) { ?>
		                    	<li style='background-image: url("<?php echo $image['sizes']['thumbnail']; ?>");'></li>
		                    <?php } ?>
		                </ul>
		            </div>
				<?php } else { ?> 
					<div class="no-slider" style="background-image: url('<?php the_post_thumbnail_url("medium");?>');">
					</div>
				<?php } ?>
	        </section>
		</div>
		<?php if (have_posts()) {?> 
			<div class="row">
				<?php while(have_posts()) { the_post();  ?>
				<?php the_content(); } ?>
			</div>
		<?php } ?>

	<!--++++++++++++++ 
	DUMMY NEEDS TO REMOVE and require to use same code in backend: Advertisement
	++++++++++++++ -->
		<div class="row">
			<div class="ad-on-single-wrapper">
				<div class="ad-on-single" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider2.jpg');">
				</div>
				<div class="ad-on-single-text">Advertisement</div>
			</div>
		</div>

		<?php $posttags = get_the_tags();
			if ($posttags) { 
		 ?>
			<!--++++++++++++++ 
			News Tags
			++++++++++++++ -->
			<div class="row news-tags">
				<ul>
					<li><label>Read more about:</label></li>
					<?php 	$x = 1; 
							$total_tags = count($posttags);	
							foreach($posttags as $posttag) { ?>
								<?php if($total_tags !== $x) { ?>
									<li><a href="<?php echo get_tag_link($posttag->term_id); ?>"><?php echo $posttag->name; ?>, </a></li>
								<?php } else { ?>
									<li><a href="<?php echo get_tag_link($posttag->term_id); ?>"><?php echo $posttag->name; ?></a></li>
								<?php } ?>
					<?php $x++; } ?>
				</ul>
			</div>
		<?php } ?>
	</div>	
</section>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include (get_stylesheet_directory() . '/section-newsletter.php'); ?>

<!--++++++++++++++ 
Related Stories
++++++++++++++ -->
<section class="wrapper">
	<div class="container">
	<?php 
		$related_post = new WP_Query( array(
			'posts_per_page' => 5,
			'cat'			=> $current_cat,
		));
		$total_related_post = 1;
	if ($related_post->have_posts()) { ?>
		<div class="row">
			<div class="related-stories-head"><span>Related Stories</span></div>
		</div>
		<div class="row">
			<?php while($related_post->have_posts()) { $related_post->the_post(); ?>
				<?php if ($total_related_post !== 1) { ?>
					<a href="<?php the_permalink(); ?>" class="col-4 related-story">
						<div class="related-story-image" style="background-image:url('<?php the_post_thumbnail_url("medium", $total_related_post->ID); ?>');">
							
						</div>
						<div class="related-story-content">
							<?php echo trimText(get_the_title(), '', 100); ?>
						</div>
					</a>
			<?php } $total_related_post++; } ?>
		</div>
	<?php } wp_reset_postdata(); ?>
	<!--++++++++++++++ 
	Comments and Form
	++++++++++++++ -->
		<div class="row">
			<div class="container-620">
				<div id="disqus_thread"></div>
				<script type="text/javascript">
				    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				    var disqus_shortname = 'josemagana'; // required: replace example with your forum shortname

				    /* * * DON'T EDIT BELOW THIS LINE * * */
				    (function() {
				        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
				</noscript>
				<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			</div>
		</div>
	</div>
</section>


<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>