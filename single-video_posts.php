<?php get_header();
	$video_post = array( 'post_type' => 'video_posts');
	$each_video_post = new WP_Query( $video_posts );
 ?>

<section class="wrapper">
	<div class="container-620">
		<div class="row">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="full-width">
			<div class="page-info"><?php echo get_the_date('d F, Y'); ?> by <b><?php echo $current_user->display_name; ?></b></div>
		</div>
		<div class="row">
			<div class="addthis_inline_share_toolbox"></div>
		</div>
	</div>
</section>	

<section class="wrapper">
	<div class="container-620 single_video_post">
		
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
		<div class="row">
			<div class="related-stories-head"><span>Related Videos</span></div>
		</div>
		<div class="row">
			<?php for ($x = 1; $x <= 4; $x++) { ?>
			<a href="#" class="col-4 related-story">
				<div class="related-story-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider<?php echo $x; ?>.jpg');">
					<div class="table">
						<div class="table-cell">
							<div class="play-video-but"><i class="fa fa-play"></i></div>
						</div>
					</div>
				</div>
				<div class="related-story-content">
					Beat the summer heat with crock pot cooking
				</div>
			</a>
			<?php } ?>
		</div>

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