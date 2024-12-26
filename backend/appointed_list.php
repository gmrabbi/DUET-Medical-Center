<!-- PHP code to establish connection with the localserver -->
<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Redirect to the login page if not logged in
  echo "<script>
        alert('You must log in first.');
        window.location.href = '../login.php'; // Redirect to login page
    </script>";
  // header("Location: login.php");
  exit();
}

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'duet_medical_database';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// Get the current date
$current_date = date('Y-m-d');

// SQL query to select data from the appointment_form where the date is greater than or equal to today's date
$sql = "SELECT Doctor, Department, number, Date, Time, Comment 
        FROM appointment_form 
        WHERE Date >= '$current_date'
        ORDER BY Date, Time ASC";
        
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">


<head>

<title>DUET Medical Center | Appointed List</title>

<!-- Web Fonts -->
<link
  rel="stylesheet"
  href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin"
/>

<!-- CSS Global Compulsory -->
<link
  rel="stylesheet"
  href="../assets/plugins/bootstrap/css/bootstrap.min.css"
/>
<link rel="stylesheet" href="../assets/css/style.css" />

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="../assets/css/header.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="../assets/plugins/line-icons-pro/styles.css" />
<link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css" />
<link
  rel="stylesheet"
  href="../assets/plugins/font-awesome/css/font-awesome.min.css"
/>

<!-- CSS Customization -->
<link rel="stylesheet" href="../assets/css/custom.css" />


	<meta charset="UTF-8">
	<!-- 
	<title>GFG User Details</title>
    CSS FOR STYLING THE PAGE 
    -->

	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>

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
              <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-responsive-collapse"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="navbar-brand">
                <a href="index.php">
                  <img src="../assets/img/logo/duet-logo.png" alt="Logo" />
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
                    <a href="../index.php"> HOME </a>
                  </li>
                  <!-- End Home-->

                  <!-- About Us -->
                  <li class="mega-menu-fullwidth">
                    <a href="../about.php"> ABOUT US </a>
                  </li>
                  <!-- End About us -->

                  <!-- Doctors -->
                  <li class="mega-menu-fullwidth">
                    <a href="../doctors.php"> DOCTORS </a>
                  </li>
                  <!-- End Doctors -->

                  <!-- Gallery -->
                  <li class="mega-menu-fullwidth">
                    <a href="../gallery.php"> GALLERY </a>
                  </li>
                  <!-- End Gallery -->

                  <!-- Blog -->
                  <li class="mega-menu-fullwidth">
                    <a href="../blog.php"> BLOGS </a>
                  </li>
                  <!-- End Blog -->

                  <!-- Contact Us -->
                  <li class="mega-menu-fullwidth">
                    <a href="../contact.php"> CONTACT US </a>
                  </li>
                  <!-- End Contact us -->

                  <!-- Registration -->
                  <li class="mega-menu-fullwidth">
                    <a href="../registration.php"> REGISTRATION </a>
                  </li>
                  <!-- End registration -->

                  <!-- Check if the session is active -->
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
      <li class="mega-menu-fullwidth">
        <a href="../logout.php">LOGOUT</a>
        <!-- Show Logout if session is active -->
      </li>
      <?php else: ?>
        <li class="mega-menu-fullwidth">
        
        <a href="../login.php">LOGIN</a>
        <!-- Show Login if no session -->
      </li>
      <?php endif; ?>
  <!-- Other content of your page -->

                  <!-- Appointment -->
                  <li class="mega-menu-fullwidth">
                    <a href="../appointment.php"> BOOK APPOINTMENT </a>
                  </li>
                  <!-- End Appointment -->

				  <!-- Appointed list -->
                  <li class="mega-menu-fullwidth">
                    <a href="appointed_list.php"> APPOINTED LIST </a>
                  </li>
                  <!-- End Appointed list -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->


	<section>
		<h1>Appointed</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Doctor name</th>
				<th>Department</th>
				<th>Patient Number</th>
				<th>Appointed Date</th>
				<th>Appointed Time</th>
				<th>Patient Comment</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php 
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Doctor'];?></td>
				<td><?php echo $rows['Department'];?></td>
				<td><?php echo $rows['number'];?></td>
				<td><?php echo $rows['Date'];?></td>
				<td><?php echo $rows['Time'];?></td>
				<td><?php echo $rows['Comment'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>

	
	<!--=== Footer ===-->
	<div class="footer-v1" style="margin-top: 50px">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- About -->
              <div class="col-md-3" style="margin-bottom: 40px">
                <a href="index.php"
                  ><img
                    id="logo-footer"
                    class="footer-logo"
                    src="../assets/img/logo/duet-logo.png"
                    alt=""
                /></a>
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
                    <a href="../about.php">About us</a
                    ><i class="fa fa-angle-right"></i>
                  </li>
                  <li>
                    <a href="../Contact.php">Contact us</a
                    ><i class="fa fa-angle-right"></i>
                  </li>
                  <li>
                    <a href="../appointment.php">Book Appointment</a
                    ><i class="fa fa-angle-right"></i>
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
                <address class="" style="margin-bottom: 40px">
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

        <div class="copyright" >
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>
                  2024 &copy; All Rights Reserved.
                  <a href="../privacy.php">Privacy Policy</a> |
                  <a href="../terms.php">Terms of Service</a>
                </p>
              </div>

              <!-- Social Links -->
              <div class="col-md-6">
                <ul class="footer-socials list-inline">
                  <li>
                    <a
                      href="http://www.facebook.com"
                      class="tooltips"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Facebook"
                    >
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="http://www.skype.com"
                      class="tooltips"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Skype"
                    >
                      <i class="fa fa-skype"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="http://www.googleplus.com"
                      class="tooltips"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Google Plus"
                    >
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="http://www.linkedin.com"
                      class="tooltips"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Linkedin"
                    >
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="http://www.twitter.com"
                      class="tooltips"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Twitter"
                    >
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


</body>



</html>
