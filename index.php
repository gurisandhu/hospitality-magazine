<?php get_header(); ?>


<section class="wrapper">
    <div class="container-620">
        <h2><?php echo get_the_title(); ?></h2>
        <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                         ?>
        <?php if($thumbnail_id) {?>
            <div class="custom-row">
                <figure>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
                    <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
                </figure>
            </div>
        <?php } ?>
        <?php if (have_posts()) {?> 
            <div class="custom-row">
                <?php while(have_posts()) { the_post();  ?>
                <?php the_content(); } ?>
            </div>
        <?php } ?>
    </div>
</section>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
