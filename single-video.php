<?php include 'header.php'; ?>

<section class="wrapper-2">
	<div class="container-620">
		<div class="row">
			<h1>Beat the summer heat with crock pot cooking</h1>
		</div>
	</div>
</section>	
<!--++++++++++++++ 
Home Banner
++++++++++++++ -->
<section class="video-banner">
    <div class="full-container">
		<div class="wistia_embed wistia_async_j38ihh83m5" style="height:100%;width:100%;">&nbsp;</div>
    </div>
</section>

<section class="wrapper">
	<div class="container-620">
		<div class="row">
			<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
		</div>
		<div class="row">
			<div class="page-info">20 March, 2017 by <b>Danielle Bowling</b></div>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>

	<!--++++++++++++++ 
	Advertisement
	++++++++++++++ -->
		<div class="row">
			<div class="ad-on-single" style="background-image:url('compressed/images/slider1.jpg');">
			<div class="ad-on-single-text">Advertisement</div>
		</div>

	<!--++++++++++++++ 
	Page content: Text
	++++++++++++++ -->
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>

	<!--++++++++++++++ 
	Advertisement
	++++++++++++++ -->
		<div class="row">
			<div class="ad-on-single" style="background-image:url('compressed/images/slider1.jpg');">
			<div class="ad-on-single-text">Advertisement</div>
		</div>

	<!--++++++++++++++ 
	Page content: Text
	++++++++++++++ -->
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>


	<!--++++++++++++++ 
	News Tags
	++++++++++++++ -->
		<div class="row news-tags">
			<ul>
				<li><label>Read more about:</label></li>
				<li><a href="#">Asian</a></li>
				<li><a href="#">Restaurants</a></li>
				<li><a href="#">Food Service</a></li>
				<li><a href="#">Pubs &nbsp; Bars</a></li>
			</ul>
		</div>
	</div>	
</section>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include 'section-newsletter.php'; ?>

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
				<div class="related-story-image" style="background-image:url('compressed/images/slider<?php echo $x; ?>.jpg');">
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


<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>