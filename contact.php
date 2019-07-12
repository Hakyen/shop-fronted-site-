<?php require "parts/header.php"; ?>
		<!-- Map area -->
		<div class="map-area">
			<div id="googleMap" style="width:100%;height:410px;"></div>
		</div><!-- End Map area -->
		<!-- Contact area -->
		<div class="contact-area">
			<div class="container">
				<div class="row">
					<!-- contact info -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="contact-info">
							<h3>Contact info</h3>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i> <strong>Address</strong>
									1234 Pall Mall Street, London England
								</li>
								<li>
									<i class="fa fa-envelope"></i> <strong>Phone</strong>
									(800) 0123 4567 890
								</li>
								<li>
									<i class="fa fa-mobile"></i> <strong>Email</strong>
									<a href="#">admin@bootexperts.com</a>
								</li>
							</ul>
						</div>
					</div><!-- End contact info -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="contact-form">
							<h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
							<div class="row">
								<form action="mail.php" method="post">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input name="name" type="text" placeholder="Name (required)" />
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input name="email" type="email" placeholder="Email (required)" />
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<input name="subject" type="text" placeholder="Subject" />
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										<input type="submit" value="Submit Form" />
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Eontact area -->
		<!-- Brand Logo area -->
		<div class="brand-logo-area">
			<div class="container">
				<div class="brand-logo">
					<div class="brand-logo-title">
						<h2>Logo brands</h2>
					</div>
					<div id="brands-logo" class="owl-carousel">
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo1.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo5.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo2.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo3.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo4.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo1.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo5.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo3.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo4.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo2.png" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Brand Logo area -->
		<!-- Footer area -->
		<?php require "parts/footer.php"?>