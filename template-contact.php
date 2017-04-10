<?php 

get_header(); ?>


<section class="wrapper">
	<div class="container contact-page">
		<div class="col-2">
			<div class="row">
				<h1>Contact Us</h1>
			</div>
			<form class="contact-form row" name="contactForm" onsubmit="return validateForm()" method="POST">
				<ol id="form-validation" class="form-validation">
					<li>Error 1</li>
					<li>Error 2</li>
					<li>Error 3</li>
					<li>Error 4</li>
				</ol>
				<div class="form-input-area row">
					<div class="form-row">
						<input type="text" name="flname" placeholder="Name">
					</div>
					<div class="form-row">
						<input type="text" name="email" placeholder="Email">
					</div>
					<div class="form-row">
						<input type="text" name="phone" placeholder="Phone">
					</div>
					<div class="form-row">
						<div class="new-select full-width">
							<select name="" id="">
								<option value="">Type of inquiry</option>
								<option value="advertise_with_us">Advertise with us</option>
								<option value="general_info">General Information</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<textarea class="full-width" name="message" rows="5" placeholder="Comments"></textarea>
					</div>
				</div>
				<div class="row">
					<input type="hidden" name="receiver-email" value="#">
					<input type="hidden" name="siteurl" value="#">
					<input type="submit" class="small-but" value="Send">
				</div>
			</form>
		</div>
		<?php if (have_rows('advertise_with_us_options', 'option')) { ?>
		<div class="col-2">
			<?php while(have_rows('advertise_with_us_options', 'option')) { the_row(); ?>
				<ul class="each-contact-details row">
					<?php if (get_sub_field('advertise_with_us_type', 'option')) { ?>
						<li><h2><?php echo get_sub_field('advertise_with_us_type', 'option'); ?></h2></li>
					<?php } ?>
					<?php if (get_sub_field('advertise_with_us_contact_person', 'option')) { ?>
						<li><strong><?php echo get_sub_field('advertise_with_us_contact_person', 'option'); ?></strong></li>
					<?php } ?>
					<?php if (get_sub_field('advertise_with_us_email', 'option')) { ?>
						<li><a href="mailto:<?php echo get_sub_field('advertise_with_us_email', 'option'); ?>"><strong><?php echo get_sub_field('advertise_with_us_email', 'option'); ?></strong></a></li>
					<?php } ?>
					<?php if (get_sub_field('advertise_with_us_office_number', 'option')) { ?>
						<li><a href="tel:<?php echo get_sub_field('advertise_with_us_office_number', 'option'); ?>">Office: <?php echo get_sub_field('advertise_with_us_office_number', 'option'); ?></a></li>
					<?php } ?>
					<?php if (get_sub_field('advertise_with_us_mobile_number', 'option')) { ?>
						<li><a href="tel:<?php echo get_sub_field('advertise_with_us_mobile_number', 'option'); ?>">Mobile: <?php echo get_sub_field('advertise_with_us_mobile_number', 'option'); ?></a></li>
					<?php } ?>
				</ul>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</section>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>