<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>DUET medical center | About Us</title>

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin" />

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header.css" />
	<link rel="stylesheet" href="assets/css/footer.css" />

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css" />
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css" />
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
	<div class="wrapper">
		<!--=== Header v1 ===-->
		<div class="header-v1">
			<!-- Topbar -->
			<div class="topbar-v1">
				<div class="container">
				  <div class="row">
					<div class="col-md-6">
					  <ul class="list-inline top-v1-contacts">
						<li>
						  <i class="fa fa-envelope"></i> Email: alikhan72@duet.ac.bd
						</li>
						<li>
						  <i class="fa fa-phone"></i> Contact no : +88 01991678434,
						  +88-02-49274001-02
						</li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>

			<!-- End Topbar -->

			<!-- Navbar -->
			<div class="navbar mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="res-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="navbar-brand">
							<a href="index.php">
								<img src="assets/img/logo/duet-logo.png" alt="Logo" />
							</a>
						</div>
					</div>
					<!--/end responsive container-->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">
								<!-- Collect the nav links, forms, and other content for toggling -->

								<!-- Home  -->
								<li class="mega-menu-fullwidth">
									<a href="index.php"> HOME </a>
								</li>
								<!-- End Home-->

								<!-- About Us -->
								<li class="mega-menu-fullwidth">
									<a href="about.php"> ABOUT US </a>
								</li>
								<!-- End About us -->

								<!-- Doctors -->
								<li class="mega-menu-fullwidth">
									<a href="doctors.php"> DOCTORS </a>
								</li>
								<!-- End Doctors -->

								<!-- Gallery -->
								<li class="mega-menu-fullwidth">
									<a href="gallery.php"> GALLERY </a>
								</li>
								<!-- End Gallery -->

								<!-- Blog -->
								<li class="mega-menu-fullwidth">
									<a href="blog.php"> BLOGS </a>
								</li>
								<!-- End Blog -->

								<!-- Contact Us -->
								<li class="mega-menu-fullwidth">
									<a href="contact.php"> CONTACT US </a>
								</li>
								<!-- End Contact us -->

								<!-- Registration -->
								<li class="mega-menu-fullwidth">
									<a href="registration.php"> REGISTRATION </a>
								</li>
								<!-- End registration -->

								<!-- Check if the session is active -->
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
      <li class="mega-menu-fullwidth">
        <a href="logout.php">LOGOUT</a>
        <!-- Show Logout if session is active -->
      </li>
      <?php else: ?>
        <li class="mega-menu-fullwidth">
        
        <a href="login.php">LOGIN</a>
        <!-- Show Login if no session -->
      </li>
      <?php endif; ?>
  <!-- Other content of your page -->

								<!-- Appointment -->
								<li class="mega-menu-fullwidth">
									<a href="appointment.php"> BOOK APPOINTMENT </a>
								</li>
								<!-- End Appointment -->

								<!-- Appointed list -->
								<li class="mega-menu-fullwidth">
									<a href="backend/appointed_list.php"> APPOINTED LIST </a>
								  </li>
								  <!-- End Appointed list -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar -->

		<!-- About Heading -->
		<div class="container content-sm" style="margin-top: -25px">
			<div class="headline-center" style="margin-bottom: 60px">
				<h2>ABOUT<span style="color: #72c02c"> DUET medical center</span></h2>
			</div>
		</div>

		<!-- About Section 1 -->
		<div class="container content" style="margin-top: -90px">
			<div class="row" style="margin-bottom: 40px">
				<div class="col-md-6" style="margin-bottom: 40px">
					<p>
						<span style="color: #72c02c">DUET medical center </span> is a
						multi speciality hospital located at DUET, Gazipur; it's only for
						student and staff of the DUET. The treatment is totally free of cost.
						which medical kit ar need for the treatment the student/staff should 
						pay for this.
					</p>
					<ul class="list-unstyled">
						<li>
							<i class="fa fa-check color-green"></i> Multiple Options For
							Treatment with low cost.
						</li>
						<li>
							<i class="fa fa-check color-green"></i> Full Of Latest
							Technologies and Equipments.
						</li>
						<li>
							<i class="fa fa-check color-green"></i> 24/7 Ambulance Support.
						</li>
						<li>
							<i class="fa fa-check color-green"></i> Experienced Doctors.
						</li>
					</ul>
					
				</div>

				<div class="col-md-6" style="margin-bottom: 40px">
					<div class="responsive-video">
						<iframe width="560" height="315" 
							src="https://www.youtube.com/embed/y-60-iStS_o?si=P5Ey9B_loJJ5hRDX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

						</iframe>
					</div>
				</div>
			</div>
			<!--/row-->
		</div>
	</div>
	
		<!--=== Footer ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.php"><img id="logo-footer" class="footer-logo"
									src="assets/img/logo/duet-logo.png" alt="" /></a>
							<p>
								At DUET Medical Center, we are convinced that 'quality' and
								'lowest cost' are not mutually exclusive when it comes to
								healthcare delivery.
							</p>
							<p>
								Our mission is to deliver high quality, affordable healthcare
								services to the broader population in Bangladesh.
							</p>
						</div>
						<!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3" style="margin-bottom: 40px">
							<div class="posts">
								<div class="headline">
									<h2>Latest Posts</h2>
								</div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Incredible content</a>
										<small>December 16, 2023</small>
									</li>
									<li>
										<a href="#">Latest Images</a>
										<small>November 01, 2022</small>
									</li>
									<li>
										<a href="#">Terms and Conditions</a>
										<small>April 06, 2021</small>
									</li>
								</ul>
							</div>
						</div>
						<!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3" style="margin-bottom: 40px">
							<div class="headline">
								<h2>Useful Links</h2>
							</div>
							<ul class="list-unstyled link-list">
								<li>
									<a href="about.php">About us</a><i class="fa fa-angle-right"></i>
								</li>
								<li>
									<a href="Contact.php">Contact us</a><i class="fa fa-angle-right"></i>
								</li>
								<li>
									<a href="appointment.php">Book Appointment</a><i class="fa fa-angle-right"></i>
								</li>
							</ul>
						</div>
						<!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img" style="margin-bottom: 40px">
							<div class="headline">
								<h2>Contact Us</h2>
							</div>
							<address class="md-margin-bottom-40">
								DUET Medical Center <br />
								Gazipur, Bangladesh <br />
								Phone: +88 01991678434, +88-02-49274001-02 <br />
								Email: alikhan72@duet.ac.bd
							</address>
						</div>
						<!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div>
			<!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2024 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> |
								<a href="#">Terms of Service</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div>
			<!--/copyright-->
		</div>
		<!--=== End Footer ===-->
	</div>
	<!-- End Wrapper -->
</body>

</html>