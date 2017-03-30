<?php include 'header.php'; ?>
<!--++++++++++++++ 
Home Banner
++++++++++++++ -->
<section class="home-banner">
    <div class="full-container">
        <section class="slider">
            <div class="flexslider-home">
                <ul class="slides">
                    <?php for ($x = 1; $x <= 4; $x++) { ?>
                        <li style="compressed/images/slider<?php echo $x; ?>.jpg">
                            <img src="compressed/images/slider<?php echo $x; ?>.jpg" alt="">
                            <div class="table">
                                <div class="table-cell">
                                    <h2>Tentacles Abound in Our Best Jellyfish Pictures</h2>
                                    <p>James Gurney picks the most interesting pieces from the luxury watch fair</p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</section>

<!--++++++++++++++ 
News Square
++++++++++++++ -->
<section class="marron-tag wrapper tiles">
	<div class="container">	
    <div class="row">
        <a href="#" class="heading-tag">
            <h3>News</h3>
            <span>View All</span>
        </a>
    </div>	
        <?php include 'section-news-square.php'; ?>
	</div>
</section>


<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include 'section-newsletter.php'; ?>

<!--++++++++++++++ 
Videos
++++++++++++++ -->
<section class="grey-tag wrapper tiles-row">
	<div class="container">		
        <?php include 'section-video.php'; ?>
	</div>
</section>

<!--++++++++++++++ 
In focus
++++++++++++++ -->
<section class="marron-tag wrapper tiles-row">
    <div class="container">     
        <?php include 'section-news.php'; ?>
    </div>
</section>

<!--++++++++++++++ 
Management
++++++++++++++ -->
<section class="creame-tag wrapper tiles-row">
    <div class="container">     
        <?php include 'section-news.php'; ?>
    </div>
</section>

<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>