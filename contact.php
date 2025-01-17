<?php include "header-2.php"; ?>
		<!-- End Header Area -->

		<!-- Start Page Title Area -->
		<div class="page-title-area page-title-style-two">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="index.php">
								<i class="bx bx-home"></i>
								Home 
							</a>
						</li>
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="contact-title">
									<h2>Write Us</h2>
								</div>

								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label class="mb-2">Name</label>
												<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label class="mb-2">Email Address</label>
												<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label class="mb-2">Subject</label>
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label class="mb-2">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="10" required="" data-error="Write your message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												<span>Send Message</span>
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="contact-info">
							<h3>Our contact details</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

							<ul class="address">
								<li class="location">
									<i class="bx bxs-location-plus"></i>
									<span>Address</span>
									6890 Blvd, The Bronx, NY  1058 New York, USA
								</li>
								<li>
									<i class="bx bxs-phone-call"></i>
									<span>Phone</span>
									<a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
									<a href="tel:+1-(514)-312-6677">+1 (514) 312-6677</a>
								</li>
								<li>
									<i class="bx bxs-envelope"></i>
									<span>Email</span>
									<a href="/cdn-cgi/l/email-protection#0c64696060634c7f697d7875226f6361"><span class="__cf_email__" data-cfemail="432b262f2f2c03302632373a6d202c2e">[email�&nbsp;protected]</span></a>
									<a href="index.php">skype: example</a>
								</li>
							</ul>

							<div class="sidebar-follow-us">
								<h3>Follow us:</h3>
			
								<ul class="social-wrap">
									<li>
										<a href="index.php" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="index.php" target="_blank">
											<i class="bx bxl-instagram"></i>
										</a>
									</li>
									<li>
										<a href="index.php" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="index.php" target="_blank">
											<i class="bx bxl-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96573.31103674119!2d-73.91097366523668!3d40.85176866829554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28b553a697cb1%3A0x556e43a78ff15c77!2sThe%20Bronx%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1600202608808!5m2!1sen!2sbd"></iframe>
		</div>
		<!-- End Map Area -->
<?php include "footer.php"; ?>