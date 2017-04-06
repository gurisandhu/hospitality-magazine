<?php include 'header.php'; ?>


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
		<div class="col-2">
			<ul class="each-contact-details row">
				<li><h2>Magazine &amp; Online Advertising</h2></li>
				<li><strong>Name Title</strong></li>
				<li><a href="mailto:email@gmail.com.au"><strong>email@gmail.com.au</strong></a></li>
				<li>Office: 02 9898 9898</li>
				<li>Mobile: <a href="tel:0432444333">0432 444 333</a></li>
			</ul>
			<ul class="each-contact-details row">
				<li><h2>Editor</h2></li>
				<li><strong>Name Title</strong></li>
				<li><a href="mailto:email@gmail.com.au"><strong>email@gmail.com.au</strong></a></li>
				<li>Office: 02 9898 9898</li>
				<li>Mobile: <a href="tel:0432444333">0432 444 333</a></li>
			</ul>
			<ul class="each-contact-details row">
				<li><h2>Journalist</h2></li>
				<li><strong>Name Title</strong></li>
				<li><a href="mailto:email@gmail.com.au"><strong>email@gmail.com.au</strong></a></li>
				<li>Office: 02 9898 9898</li>
				<li>Mobile: <a href="tel:0432444333">0432 444 333</a></li>
			</ul>
		</div>
	</div>
</section>

<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>