<?php
session_start();
require "./backend/dbcon.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q= "select * from patient_info where email='$email' AND password='$password'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result)==1)
	{
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirect to the appointment page
        header("Location: appointment.php");
        exit();
		// header("Location: ../appointment.php");
	}
	else
	{
		
		echo "<script>alert('Email and Password is wrong');</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title> DUET Medical Center  | Login </title>


	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">

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
									<i class="fa fa-phone"></i> Contact no : +88 01991678434, +88-02-49274001-02
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
								<img src="assets/img/logo/duet-logo.png" alt="Logo">
							</a>
						</div>
					</div><!--/end responsive container-->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">

								<!-- Collect the nav links, forms, and other content for toggling -->


								<!-- Home  -->
								<li class="mega-menu-fullwidth">
									<a href="index.php">
										HOME
									</a>

								</li>
								<!-- End Home-->

								<!-- About Us -->
								<li class="mega-menu-fullwidth">
									<a href="about.php">
										ABOUT US
									</a>
								</li>
								<!-- End About us -->

								<!-- Doctors -->
								<li class="mega-menu-fullwidth">
									<a href="doctors.php">
										DOCTORS
									</a>

								</li>
								<!-- End Doctors -->


								<!-- Gallery -->
								<li class="mega-menu-fullwidth">
									<a href="gallery.php">
										GALLERY
									</a>

								</li>
								<!-- End Gallery -->


								<!-- Blog -->
								<li class="mega-menu-fullwidth">
									<a href="blog.php">
										BLOGS
									</a>
								</li>
								<!-- End Blog -->

								<!-- Contact Us -->
								<li class="mega-menu-fullwidth">
									<a href="contact.php">
										CONTACT US
									</a>
								</li>
								<!-- End Contact us -->

								<!-- Registration -->
								<li class="mega-menu-fullwidth">
									<a href="registration.php">
										REGISTRATION
									</a>
								</li>
								<!-- End registration -->

								<!-- login -->
								<li class="mega-menu-fullwidth">
									<a href="login.php">
										LOGIN
									</a>
								</li>
								<!-- End login -->

								<!-- Appointment -->
								<li class="mega-menu-fullwidth">
									<a href="appointment.php">
										BOOK APPOINTMENT
									</a>

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


		<!-- title -->

		<div style="text-align: center; margin-top: 50px;">
			<h2>LOGIN</h2>
		</div>
		<!--  title  -->


		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<form class="reg-page" action="" name="" method="post">
						<div class="reg-header">
							<h2>Login to your account</h2>
						</div>

						<div class="input-group " style="margin-bottom: 20px;">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="Email" name="email" placeholder="Email Address" class="form-control" required="">
						</div>
						<div class="input-group " style="margin-bottom: 20px;">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" class="form-control" required="">
						</div>

						<div class="row">
							<div class="col-md-6">
								<button class="btn-u pull-right" type="submit" name="login">Login</button>
							</div>
						</div>

						
					</form>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->

		<!--=== Footer ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.php"><img id="logo-footer" class="footer-logo"
									src="assets/img/logo/duet-logo.png" alt=""></a>
							<p>At DUET Medical Center, we are convinced that 'quality' and 'lowest cost' are
								not mutually exclusive when it comes to healthcare delivery.</p>
							<p>Our mission is to deliver high quality, affordable healthcare services to the broader
								population in Bangladesh.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3" style="margin-bottom: 40px;">
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
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Useful Links</h2>
							</div>
							<ul class="list-unstyled link-list">
								<li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Book Appointment</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Contact Us</h2>
							</div>
							<address class="md-margin-bottom-40">
								DUET Medical Center  <br />
								Gazipur, Bangladesh <br />
								Phone: +88 01991678434, +88-02-49274001-02 <br />
								Email: alikhan72@duet.ac.bd
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2024 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
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
			</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
	</div><!--/wrapper-->

	<!-- Login Javascript -->
	<script type="text/javascript" src="assets/plugins/jquery/validation.js"></script>

</body>

</html>