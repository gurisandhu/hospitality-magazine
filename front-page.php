<?php get_header(); ?>

<!--++++++++++++++ 
Home Banner
++++++++++++++ -->
<section class="home-banner">
    <div class="full-container">
        <section class="slider">
            <div class="flexslider-home">
                <ul class="slides">
                    <?php for ($x = 1; $x <= 8; $x++) { ?>
                        <li style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider<?php echo $x; ?>.jpg');">
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
                <span>
                    <div class="table">
                        <div class="table-cell">
                            View All
                        </div>
                    </div>
                </span>
            </a>
        </div>	
        <?php include (get_stylesheet_directory() . '/section-news-square.php'); ?>
	</div>
</section>


<!--++++++++++++++ 
Subscription
++++++++++++++ -->
<?php include (get_stylesheet_directory() . '/section-newsletter.php'); ?>

<!--++++++++++++++ 
Videos
++++++++++++++ -->
<section class="grey-tag wrapper tiles-row">
	<div class="container">		
        <?php include (get_stylesheet_directory() . '/section-video.php'); ?>
	</div>
</section>

<!--++++++++++++++ 
In focus
++++++++++++++ -->
<section class="marron-tag wrapper tiles-row">
    <div class="container">     
        <?php include(get_stylesheet_directory() . '/section-news.php'); ?>
    </div>
</section>

<!--++++++++++++++ 
Management
++++++++++++++ -->
<section class="creame-tag wrapper tiles-row">
    <div class="container">     
        <?php include (get_stylesheet_directory() . '/section-news.php'); ?>
    </div>
</section>

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>