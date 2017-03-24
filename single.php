<?php include 'header.php'; ?>

<section>
	<div class="container">
		<div class="row">
			<div class="page-info">20 March, 2017 by <b>Danielle Bowling</b></div>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Advertisement
++++++++++++++ -->
<section>
	<div class="container">
		<div class="advertisement-container">
			<div class="advertisement">
				<div class="dummy-ad" style="background-image: url('compressed/images/dummy-ad.png');">
					
				</div>
				<p>Advertisement</p>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Page content: Text
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>
	</div>
</section

<!--++++++++++++++ 
Advertisement
++++++++++++++ -->
<section>
	<div class="container">
		<div class="advertisement-container">
			<div class="advertisement">
				<div class="dummy-ad" style="background-image: url('compressed/images/dummy-ad.png');">
					
				</div>
				<p>Advertisement</p>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Page content: Text
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente laborum illo vel natus error delectus, eius asperiores repellat quibusdam iste soluta quidem omnis impedit possimus animi amet, sit nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aliquid reiciendis, tenetur explicabo exercitationem, quibusdam vitae sequi, quaerat voluptatem libero delectus excepturi hic quis ducimus omnis saepe odio dolores provident.</p>
		</div>
	</div>
</section>

<!--++++++++++++++ 
News Tags
++++++++++++++ -->
<section>
	<div class="container">
		<ul class="news-tags">
			<li><label>Read more about:</label></li>
			<li><a href="#">Asian</a></li>
			<li><a href="#">Restaurants</a></li>
			<li><a href="#">Food Service</a></li>
			<li><a href="#">Pubs &nbsp; Bars</a></li>
		</ul>
	</div>
</section>

<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include 'section-newsletter.php'; ?>

<!--++++++++++++++ 
Related Stories
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<div class="related-stories-head"><span>Related Stories</span></div>
		</div>
		<div class="row">
			<?php for ($x = 1; $x <= 4; $x++) { ?>
			<div class="col-4">
				<div class="related-stories" style="background-image:url('compressed/images/news-1.png');">
					<div class="related-stories-content">
						Get Around Easily With a New York Limousine Service
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Comments and Form
++++++++++++++ -->
<section>
	<div class="container">
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
</section>


<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>