<?php get_header(); ?>

<!--++++++++++++++ 
Home Banner
++++++++++++++ -->
<?php 

$posts = get_field('home_banners');

if( $posts ): ?>

<section class="home-banner">
    <div class="full-container">
        <section class="slider">
            <div class="flexslider-home">
                <ul class="slides">
                    <?php foreach( $posts as $post ) { setup_postdata($post); ?>
                        <li style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); display: none;">
                            <a href="<?php the_permalink(); ?>" class="table">
                                <div class="table-cell">
                                    <?php echo trimText("<h2>" . get_the_title() . "</h2><p>" . get_the_excerpt() . "</p>", '', 198); ?>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</section>
<?php wp_reset_postdata(); //IMPORTANT?>
<?php endif; ?>

<!--++++++++++++++ 
News Square
++++++++++++++ -->
<?php 
    $third_posts = new WP_Query( array(
        'posts_per_page' => 5,
        'cat'     => 3
        ));
    $count_third_posts = 1;
    $count_posts = $count_third_posts;
    $news_square = $third_posts;

    if ($news_square->have_posts()) {
 ?>
    <section class="marron-tag wrapper tiles">
        <div class="container"> 
            <div class="row">
                <a href="<?php echo home_url(); ?>/category/news/" class="heading-tag">
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
            <div class="row">
                <?php while($news_square->have_posts()) { $news_square->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="col-3">
                            <div class="news" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
                            </div>
                            <div class="news-content full-width">
                                <div class="news-heading full-width">
                                    <?php echo trimText( get_the_title(), '', 100); ?>
                                </div>
                            </div>
                        </a>

                    <?php if($count_posts == 2) { ?>
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
Videos
++++++++++++++ -->



<section class="grey-tag wrapper tiles-row">
<div class="container">
    <div class="row">
        <a href="<?php echo esc_url( home_url()); ?>/video_posts/" class="heading-tag">
            <h3>Videos</h3>
            <span>
                <div class="table">
                    <div class="table-cell">
                        View All
                    </div>
                </div>
            </span>
        </a>
    </div>

<?php 

$args = array(
    'post_type'         => 'video_posts',
    'posts_per_page'    =>  4
);

    $each_video_post = new WP_Query($args);

    $total_each_video_post = $each_video_post->found_posts;
 ?>


<?php if ($each_video_post->have_posts()) { ?>
<div class="row">
<?php
while($each_video_post->have_posts()) { $each_video_post->the_post();
    $current_post_num = $each_video_post->current_post + 1;
if ($current_post_num == 1){
?>
    <div class="col-3">
        <a href="<?php echo the_permalink(); ?>" class="video-container full-width">
            <div class="video" style="background-image: url('<?php the_post_thumbnail_url("medium"); ?>')">
                <div class="table">
                    <div class="table-cell">
                        <div class="play-video-but"><i class="fa fa-play"></i></div>
                    </div>
                </div>
            </div>
            <div class="video-heading">
                <?php echo trimText(get_the_title(), '', 50); ?>
            </div>
        </a>
    </div>
<?php } ?> <!-- end of number 1 -->

<?php } ?> 

<?php if ($each_video_post->have_posts()) { ?>
<div class="col-3 related-videos">
<?php
while($each_video_post->have_posts()) { $each_video_post->the_post();
    $current_post_num = $each_video_post->current_post + 1;
if (($current_post_num > 1) && ($current_post_num < 5)){
?>
    <a href="<?php echo the_permalink(); ?>" class="each-video">
        <div class="related-video-image" style="background-image: url('<?php the_post_thumbnail_url("thumbnail"); ?>');">
            <div class="table">
                <div class="table-cell">
                    <div class="small-video-but"><i class="fa fa-play"></i></div>
                </div>
            </div>
        </div>
        <div class="related-video-text">
            <?php echo trimText(get_the_title(), '', 45); ?>
        </div>
    </a>
<?php } ?> <!-- end of number 1 -->

<?php } ?> 
</div>

<?php } ?>
<div class="col-3">
        <a href="#" class="full-width">
            <div class="ad-category" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/compressed/images/slider8.jpg');">
            </div>
            <div class="ad-text">Advertisement</div>
        </a>
    </div>
</div> <!-- end of row -->
<?php } ?>
</div> <!-- container -->
</section>


<!--++++++++++++++ 
In focus
++++++++++++++ -->
<?php 
    $second_posts = new WP_Query( array(
        'posts_per_page' => 4,
        'category_name' => 'in-focus'
        ));
    
    $news_square = $second_posts;

    if ($news_square->have_posts()) {
 ?>

    <section class="marron-tag wrapper tiles-row">
        <div class="container">  
        <div class="row">
            <a href="<?php echo home_url(); ?>/category/in-focus/" class="heading-tag marron">
                <h3>In focus</h3>
                <span>
                    <div class="table">
                        <div class="table-cell">
                            View All
                        </div>
                    </div>
                </span>
            </a>
        </div>   
            <div class="row">
                <?php while($news_square->have_posts()) { $news_square->the_post(); 
                    $current_post_num = $news_square->current_post + 1;
                    $cat_slug = get_the_category()[0]->slug;
                    ?>
                    <?php if($current_post_num == 1) { ?>
                        <div class="col-2">
                            <a href="<?php the_permalink(); ?>" class="full-width">
                                <div class="news-2" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
                                </div>
                                <div class="news-content-2 full-width">
                                    <div class="news-heading-2 full-width">
                                        <?php echo trimText( get_the_title(), '', 77); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php } } ?>
                <div class="col-2 related-news">
                    <div class="related-content">
                <?php while($news_square->have_posts()) { $news_square->the_post();
                        $current_post_num = $news_square->current_post + 1;
                 ?>
                    <?php if($current_post_num  > 1) { ?>
                        <a href="<?php the_permalink(); ?>" class="each-related-content row">
                            <div class="related-news-image" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
                            </div>
                            <div class="related-news-text">
                                <div class="table">
                                    <div class="table-cell">
                                        <?php echo trimText( get_the_title(), '', 65); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!--++++++++++++++ 
Management
++++++++++++++ -->
<?php 
    $second_posts = new WP_Query( array(
        'posts_per_page' => 4,
        'category_name' => 'management'
        ));
    
    $news_square = $second_posts;

    if ($news_square->have_posts()) {
 ?>
    <section class="creame-tag wrapper tiles-row">
        <div class="container">  
        <div class="row">
            <a href="<?php echo home_url(); ?>/category/management/" class="heading-tag marron">
                <h3>Management</h3>
                <span>
                    <div class="table">
                        <div class="table-cell">
                            View All
                        </div>
                    </div>
                </span>
            </a>
        </div>   
            <div class="row">
                <?php while($news_square->have_posts()) { $news_square->the_post(); 
                    $current_post_num = $news_square->current_post + 1;
                    ?>
                    <?php if($current_post_num == 1) { ?>
                        <div class="col-2">
                            <a href="<?php the_permalink(); ?>" class="full-width">
                                <div class="news-2" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
                                </div>
                                <div class="news-content-2 full-width">
                                    <div class="news-heading-2 full-width">
                                        <?php echo trimText( get_the_title(), '', 65); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php } } ?>
                <div class="col-2 related-news">
                    <div class="related-content">
                <?php while($news_square->have_posts()) { $news_square->the_post();
                        $current_post_num = $news_square->current_post + 1;
                 ?>
                    <?php if($current_post_num > 1) { ?>
                        <a href="<?php the_permalink(); ?>" class="each-related-content row">
                            <div class="related-news-image" style="background-image:url('<?php the_post_thumbnail_url("medium", $news_square->ID); ?>');">
                            </div>
                            <div class="related-news-text">
                                <div class="table">
                                    <div class="table-cell">
                                        <?php echo trimText( get_the_title(), '', 100); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>