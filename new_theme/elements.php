<!-- Theme element -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php
				include('header.php');
			?>
				<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Elements</h2>
							<p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
						</header>

						<!-- Text -->
							<section>
								<h3>Text</h3>
								<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
								This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
								This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

								<hr />

								<header>
									<h3>Heading with a Subtitle</h3>
									<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
								<header>
									<h4>Heading with a Subtitle</h4>
									<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

								<hr />

								<h2>Heading Level 2</h2>
								<h3>Heading Level 3</h3>
								<h4>Heading Level 4</h4>
								<h5>Heading Level 5</h5>
								<h6>Heading Level 6</h6>

								<hr />

								<h4>Blockquote</h4>
								<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>

								<h4>Preformatted</h4>
								<pre><code>i = 0;

	while (!deck.isInOrder()) {
	    print 'Iteration ' + i;
	    deck.shuffle();
	    i++;
	}

	print 'It took ' + i + ' iterations to sort the deck.';
	</code></pre>
							</section>

						<!-- Lists -->
							<section>
								<h3>Lists</h3>
								<div class="row">
									<div class="col-6 col-12-xsmall">

										<h4>Unordered</h4>
										<ul>
											<li>Dolor pulvinar etiam magna etiam.</li>
											<li>Sagittis adipiscing lorem eleifend.</li>
											<li>Felis enim feugiat dolore viverra.</li>
										</ul>

										<h4>Alternate</h4>
										<ul class="alt">
											<li>Dolor pulvinar etiam magna etiam.</li>
											<li>Sagittis adipiscing lorem eleifend.</li>
											<li>Felis enim feugiat dolore viverra.</li>
											<li>Lobortis adipiscing condimentum lorem.</li>
											<li>Integer eleifend erat sed accumsan.</li>
										</ul>

									</div>
									<div class="col-6 col-12-xsmall">

										<h4>Ordered</h4>
										<ol>
											<li>Dolor pulvinar etiam magna etiam.</li>
											<li>Etiam vel felis at lorem sed viverra.</li>
											<li>Felis enim feugiat dolore viverra.</li>
											<li>Dolor pulvinar etiam magna etiam.</li>
											<li>Etiam vel felis at lorem sed viverra.</li>
											<li>Felis enim feugiat dolore viverra.</li>
										</ol>

										<h4>Icons</h4>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
										</ul>
										<ul class="icons">
											<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands alt fa-github"><span class="label">Github</span></a></li>
											<li><a href="#" class="icon brands alt fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands alt fa-tumblr"><span class="label">Tumblr</span></a></li>
										</ul>

									</div>
								</div>

								<h4>Actions</h4>
								<ul class="actions">
									<li><a href="#" class="button primary">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions small">
									<li><a href="#" class="button primary small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
								<div class="row">
									<div class="col-3 col-6-medium col-12-xsmall">
										<ul class="actions stacked">
											<li><a href="#" class="button primary">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
									</div>
									<div class="col-3 col-6-medium col-12-xsmall">
										<ul class="actions stacked">
											<li><a href="#" class="button primary small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
									</div>
									<div class="col-3 col-6-medium col-12-xsmall">
										<ul class="actions stacked">
											<li><a href="#" class="button primary fit">Default</a></li>
											<li><a href="#" class="button fit">Default</a></li>
										</ul>
									</div>
									<div class="col-3 col-6-medium col-12-xsmall">
										<ul class="actions stacked">
											<li><a href="#" class="button primary small fit">Small</a></li>
											<li><a href="#" class="button small fit">Small</a></li>
										</ul>
									</div>
								</div>
							</section>

						<!-- Table -->
							<section>
								<h3>Table</h3>
								<h4>Default</h4>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Item 1</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 2</td>
												<td>Vis ac commodo adipiscing arcu aliquet.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 3</td>
												<td> Morbi faucibus arcu accumsan lorem.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 4</td>
												<td>Vitae integer tempus condimentum.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 5</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												<td>100.00</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<h4>Alternate</h4>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Item 1</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 2</td>
												<td>Vis ac commodo adipiscing arcu aliquet.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 3</td>
												<td> Morbi faucibus arcu accumsan lorem.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 4</td>
												<td>Vitae integer tempus condimentum.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 5</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												<td>100.00</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</section>

						<!-- Buttons -->
							<section>
								<h3>Buttons</h3>
								<ul class="actions">
									<li><a href="#" class="button primary">Primary</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions">
									<li><a href="#" class="button primary large">Large</a></li>
									<li><a href="#" class="button">Default</a></li>
									<li><a href="#" class="button small">Default</a></li>
								</ul>
								<div class="row">
									<div class="col-6 col-12-xsmall">
										<ul class="actions fit">
											<li><a href="#" class="button primary fit">Fit</a></li>
											<li><a href="#" class="button fit">Fit</a></li>
										</ul>
									</div>
									<div class="col-6 col-12-xsmall">
										<ul class="actions fit small">
											<li><a href="#" class="button primary fit small">Fit + Small</a></li>
											<li><a href="#" class="button fit small">Fit + Small</a></li>
										</ul>
									</div>
								</div>
								<ul class="actions">
									<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
									<li><a href="#" class="button icon solid fa-download">Icon</a></li>
								</ul>
								<ul class="actions">
									<li><span class="button primary disabled">Primary</span></li>
									<li><span class="button disabled">Default</span></li>
								</ul>
							</section>

						<!-- Form -->
							<section>
								<h3>Form</h3>
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" id="name" value="" placeholder="Name" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<select name="category" id="category">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Low Priority</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Normal Priority</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high">High Priority</label>
										</div>
										<div class="col-6 col-12-medium">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Email me a copy of this message</label>
										</div>
										<div class="col-6 col-12-medium">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">I am a human and not a robot</label>
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

						<!-- Image -->
							<section>
								<h3>Image</h3>
								<h4>Fit</h4>
								<div class="box alt">
									<div class="row gtr-50 gtr-uniform">
										<div class="col-12"><span class="image fit"><img src="images/pic07.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										<div class="col-4 col-6-xsmall"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									</div>
								</div>

								<h4>Left &amp; Right</h4>
								<p><span class="image left"><img src="images/pic08.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Cras aliquet accumsan curae accumsan arcu amet egestas placerat odio morbi mi adipiscing col morbi felis faucibus in gravida sollicitudin interdum commodo. Ante aliquam vis iaculis accumsan lorem ipsum dolor sit amet nullam. Cras aliquet accumsan curae accumsan arcu amet egestas placerat odio morbi mi adipiscing col morbi felis faucibus in gravida sollicitudin interdum commodo. Ante aliquam vis iaculis accumsan lorem ipsum dolor sit amet nullam.</p>
								<p><span class="image right"><img src="images/pic08.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Cras aliquet accumsan curae accumsan arcu amet egestas placerat odio morbi mi adipiscing col morbi felis faucibus in gravida sollicitudin interdum commodo. Ante aliquam vis iaculis accumsan lorem ipsum dolor sit amet nullam. Cras aliquet accumsan curae accumsan arcu amet egestas placerat odio morbi mi adipiscing col morbi felis faucibus in gravida sollicitudin interdum commodo. Ante aliquam vis iaculis accumsan lorem ipsum dolor sit amet nullam.</p>
							</section>

					</div>
				</div>

			<!-- Footer -->
			<?php
				include('footer.php');
			?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>