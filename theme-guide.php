<?php include 'header.php'; ?>

<!--++++++++++++++ 
Section: 
++++++++++++++ -->

<section class="wrapper">
	<div class="container">
		<div class="row">
			<h1>H1 Heading</h1>
			<h2>H2 Heading</h2>
			<h3>H3 Headeing</h3>
			<h4>H4 Headeing</h4>
			<h5>H5 Headeing</h5>
			<h6>H6 Headeing</h6>
		</div>
		<div class="row">
			<i>Italic</i>
		</div>
		<div class="row">
			<strong>Bold strong</strong>
			<b>Bold b</b>
		</div>
		<div class="row">
			<h1>Paragraph Style</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim culpa temporibus ab expedita repellat magnam ut maxime, laboriosam porro obcaecati harum quibusdam, cumque fugit sit quaerat placeat, distinctio consequuntur.</p>
		</div>
		<div class="row">
			<p><a href="/">Link Style</a></p>
		</div>

		<div class="row">
			<ul>
				<li>Unordered List Style</li>
				<li>Unordered List</li>
			</ul>
		</div>

		<div class="row">
			<ol>
				<li>Ordered List Style</li>
				<li>Ordered List</li>
			</ol>
		</div>

		<div class="row">
			<p class="small-fonts">Terms Styles / Breadcrumb Trail</p>
		</div>
		
		<div class="row">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>Table Heading</th>
				</tr>
				<tr>
					<td>Table Column</td>
				</tr>
				<tr>
					<td>Table Column</td>
				</tr>
			</table>
		</div>

		<div class="row">
			<h1>Buttons</h1>
			<button class="button">Button</button>
			<br><br>
			<button class="medium-but">Medium But</button>
			<br><br>
			<button class="small-but">Small But</button>
		</div>

		<div class="row social-and-search">
			<h1>Social Media</h1>
			<ul class="social-media">
				<li><a href="/"><i class="fa fa-search"></i></a></li>
				<li><a href="/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="/"><i class="fa fa-twitter"></i></a></li>
				<li><a href="/"><i class="fa fa-envelope-o"></i></a></li>
			</ul>
		</div>

		<div class="row">
			<form action="#">
				<h2>Form</h2>
				<div class="row">
					<input type="text" name="fname" placeholder="Name">
				</div>
				<div class="row">
					<input type="text" name="surname" placeholder="Surname">
				</div>
				<div class="row">
					<div class="form-row">
						<div class="col-3">
							<div class="new-select full-width">
								<select name="" id="">
									<option value="0">1</option>
									<option value="1">2</option>
									<option value="2">3</option>
								</select>
							</div>
							<span>Day</span>
						</div>
						<div class="col-3">
							<div class="new-select full-width">
								<select name="" id="">
									<option value="Month">Month</option>
									<option value="february">February</option>
									<option value="March">March</option>
								</select>
							</div>
							<span>Month</span>
						</div>
						<div class="col-3">
							<div class="new-select full-width">
								<select name="" id="">
									<option value="">Year</option>
									<option value="1">2016</option>
									<option value="2">2017</option>
								</select>
							</div>	
							<span>Year</span>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="gender">Radio Buttons</label>
					<div class="form-row">
						<div class="radio-button">
							Male 
							<input type="radio" name="gender" checked value="female"><i class="new-radio"></i></div>
						<div class="radio-button">
							Female 
							<input type="radio" name="gender" value="female"><i class="new-radio"></i></div>
					</div>	
				</div>
				<div class="row">
					<label for="gender">Check Box Style</label>
					<div class="form-row">
						<div class="checkbox-button">
							Option 1 
							<input type="checkbox" name="gender" checked value="option1"><i class="new-checkbox"></i></div>
						<div class="checkbox-button">
							Option 2 
							<input type="checkbox" name="gender" value="option2"><i class="new-checkbox"></i></div>
					</div>	
				</div>
			</form>
		</div>

		<div class="row">
			<h2>Image Style</h2>
			<figure>
				<img src="compressed/images/slider6.jpg" alt="">
				<figcaption><strong>Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
			</figure>
		</div>
		<div class="row">
			<blockquote>
				Stand out text: Technology is a time saver. Using machine learning, you can teach computers to process data and learn faster.
			</blockquote>
		</div>
		<div class="row show-loader-wrapper">
			<h1>loading icon</h1>
			<div class="show-loader"></div>
		</div>
		<div class="row">
			<h1>Paragraph Style</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nulla assumenda distinctio quia obcaecati, dolorem, natus esse aut iusto voluptate, commodi! Facere minus molestias natus unde. Porro nam saepe, fuga! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus incidunt blanditiis, totam hic voluptates error ratione fuga ut, aut, at laudantium esse amet repellat necessitatibus reiciendis veritatis dolores voluptate cumque?</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis autem vel in, nemo iure saepe mollitia corrupti, odit quos consectetur optio aliquid voluptates ipsa omnis, fuga. Consequatur tempora, ex nisi!</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, tempore asperiores voluptas eligendi necessitatibus quisquam ab dolorem iure tempora ipsam ratione eaque, enim harum quae quidem. Nostrum repudiandae ad rem.</p>
		</div>
	</div> <!-- container -->
</section>		

<?php include 'sub-footer.php'; ?>
<?php include 'footer.php'; ?>