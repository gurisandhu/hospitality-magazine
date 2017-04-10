<div class="col-2">
    <?php if (have_rows('social_media_channel', 'option')) { ?>
    <ul class="social-media">
        <li><label>Follow us</label></li>
        <?php while (have_rows('social_media_channel', 'option')) { the_row(); ?>
            <li><a target="_blank" href="<?php echo get_sub_field('social_media_channel_link', 'option'); ?>"><i class="fa fa-<?php echo get_sub_field('social_media_channel_icon', 'option'); ?>"></i></a></li>
        <?php } ?>
    </ul>
    <?php } ?>
</div>
<div class="col-2">
    <ul class="top-menu">
        <li><a href="<?php echo esc_url( home_url()); ?>/about-us/">About Us</a></li>
        <li><a href="<?php echo esc_url( home_url()); ?>/contact/">Contact us</a></li>
    </ul>
</div>