<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>DUET Medical Center | Home</title>

    <!-- Web Fonts -->
    <link
      rel="stylesheet"
      href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin"
    />

    <!-- CSS Global Compulsory -->
    <link
      rel="stylesheet"
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css" />
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css" />
    <link
      rel="stylesheet"
      href="assets/plugins/font-awesome/css/font-awesome.min.css"
    />

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

                  <!-- About Us (have to edit here) -->
                  <li class="mega-menu-fullwidth">
                    <a href="about.php">
                      <!--Not complete here-->
                      ABOUT US
                    </a>
                  </li>
                  <!-- End About us -->

                  <!-- Doctors (have to edit here)-->
                  <li class="mega-menu-fullwidth">
                    <a href="doctors.php">
                      <!--Not complete here-->
                      DOCTORS
                    </a>
                  </li>
                  <!-- End Doctors -->

                  <!-- Gallery (have to edit here) -->
                  <li class="mega-menu-fullwidth">
                    <a href="gallery.php">
                      <!--Not complete here-->
                      GALLERY
                    </a>
                  </li>
                  <!-- End Gallery -->

                  <!-- Blog (have to edit here)-->
                  <li class="mega-menu-fullwidth">
                    <a href="blog.php">
                      <!--Not complete here-->
                      BLOGS
                    </a>
                  </li>
                  <!-- End Blog -->

                  <!-- Contact Us (have to edit here) -->
                  <li class="mega-menu-fullwidth">
                    <a href="contact.php"
                      ><!--Not complete here-->
                      CONTACT US
                    </a>
                  </li>
                  <!-- End Contact us -->

                  <!-- Registration -->
                  <li class="mega-menu-fullwidth">
                    <a href="registration.php"
                      ><!--Not complete here-->
                      REGISTRATION
                    </a>
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

                  <!-- Appointment (have to edit here) -->
                  <li class="mega-menu-fullwidth">
                    <a href="appointment.php">
                      <!--Not complete here-->
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

      <!-- Slider -->
      <div id="slide">
        <div
          class="slideshow-container"
          style="border-radius: 50px; margin-left: 30px"
        >
          <div class="mySlides fade">
            <img
              src="assets/img/slider/s1.jpg"
              alt="Slider1"
              style="width: 100%"
            />
          </div>
          <div class="mySlides fade">
            <img
              src="assets/img/slider/s2.jpg"
              alt="Slider2"
              style="width: 100%"
            />
          </div>
          <div class="mySlides fade">
            <img
              src="assets/img/slider/s3.jpg"
              alt="Slider3"
              style="width: 100%"
            />
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br />
        <div style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
      </div>

      <script>
        var slideIndex = 0;
        showSlides();
        var slides, dots;

        function showSlides() {
          var i;
          slides = document.getElementsByClassName("mySlides");
          dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1;
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          setTimeout(showSlides, 8000); // Change image every 8 seconds
        }

        function plusSlides(position) {
          slideIndex += position;
          if (slideIndex > slides.length) {
            slideIndex = 1;
          } else if (slideIndex < 1) {
            slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
        }

        function currentSlide(index) {
          if (index > slides.length) {
            index = 1;
          } else if (index < 1) {
            index = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[index - 1].style.display = "block";
          dots[index - 1].className += " active";
        }
      </script>

      <!-- End of Slider -->

      <!--=== Welcome to Unity===-->
      <div class="container content-md welcomeSection">
        <div class="row section1">
          <div
            class="col-md-6"
            style="margin-bottom: 40px"
            style="border:2px solid black background: green;"
          >
            <h2 class="title-v2">
              WELCOME TO
              <span style="color: #72c02c"> DUET Medical Center </span>
            </h2>
            <p style="text-align: justify; font-size: 14px">
              DUET Medical Center serves as a vital healthcare resource for the
              university, dedicated to enhancing the health and wellness of
              students, faculty, and staff.
            </p>
            <p style="text-align: justify; font-size: 14px">
              Equipped with experienced medical professionals and essential
              facilities, the center offers a range of services, including
              consultations, emergency response, and preventive care, all
              designed to promote a healthier campus environment.
            </p>
            <p style="text-align: justify; font-size: 14px">
              Committed to compassionate and quality care, DUET Medical Center
              is here to support the physical and mental well-being of the
              entire DUET community, fostering a safe and supportive space for
              all.
            </p>
            <br />
            <a href="about.php" class="btn-u btn-brd btn-brd-hover"
              >Read More</a
            >
          </div>
          <div class="col-md-6 overflow-h">
            <img
              style="border-radius: 50px; margin-left: 30px"
              src="assets/img/bg/2s2.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
      <!--=== End About Us ===-->

      <!-- Specialities -->
      <div class="container" style="margin-top: 50px">
        <div class="headline-center" style="margin-bottom: 60px">
          <h2>Our Specialities</h2>
          <div class="line"></div>
          <p>
            DUET Medical Center offers a range of specialized healthcare
            services designed to meet the needs of our university community. Our
            specialties include general medicine for routine and chronic care,
            emergency services for urgent situations, preventive health services
            like screenings and vaccinations, mental health support for
            emotional well-being, and nutrition counseling to promote balanced
            lifestyles. Our dedicated team of professionals is committed to
            providing compassionate and quality care, fostering a healthy and
            supportive environment for students, faculty, and staff.
          </p>
        </div>
        <!--end Spciallities-->

        <div class="row" style="margin-bottom: 40px">
          <div class="col-md-4">
            <div class="content-boxes-v5" style="margin-bottom: 30px">
              <i class="icon-medical-005" style="border-radius: 50%"></i>
              <div class="overflow-h">
                <h3 class="no-top-space">24/7 Ambulance support</h3>
                <p>
                  24 Hours Ambulance Service, Emergency Ambulance Service
                  Providers in Bangladesh.
                </p>
              </div>
            </div>
            <div class="content-boxes-v5" style="margin-bottom: 30px">
              <i style="border-radius: 50%" class="icon-medical-054"></i>
              <div class="overflow-h">
                <h3 class="no-top-space">Dengue Vision Correction Treatment</h3>
                <p>
                  We have dengue Vision treatment which is the latest in the
                  Bangladesh.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="content-boxes-v5" style="margin-bottom: 30px">
              <i style="border-radius: 50%" class="icon-medical-042"></i>
              <div class="overflow-h">
                <h3 class="no-top-space">Dedicated Stroke Centre</h3>
                <p>
                  We specially have dedicated stroke centre which is very handy
                  in critical situations.
                </p>
              </div>
            </div>
            <div class="content-boxes-v5" style="margin-bottom: 30px">
              <i style="border-radius: 50%" class="icon-medical-019"></i>
              <div class="overflow-h">
                <h3 class="no-top-space">Operation Theatres</h3>
                <p>
                  These Operation Theatres are full of latest technologies and
                  equipments.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="content-boxes-v5" style="margin-bottom: 30px">
              <i style="border-radius: 50%" class="icon-medical-069"></i>
              <div class="overflow-h">
                <h3 class="no-top-space">Joint Replacement Centre</h3>
                <p>
                  We have have Joint Replacement Centre in Shaheed Tajuddin
                  Ahmad Medical College Hospital.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--/end row-->
      </div>
      <!--/end container-->
      <!-- End Content Part -->

      <!-- Plans Start -->
      <section class="pricingSection">
        <div class="container" style="margin-top: 20px">
          <div class="headline-center">
            <h2>Health Packages</h2>
            <div class="line"></div>
            <div class="row">
              <!-- Pricing Item -->
              <div class="col-md-3 col-xs-6 col-2xs-12">
                <div
                  style="border-radius: 10px"
                  class="pricing-v9 hover-effect"
                >
                  <div class="pricing-v9-head">
                    <h3 class="h3">
                      <span class="g-color-default">Dangu</span> Basic Test
                    </h3>
                  </div>
                  <ul style="list-style-type: none">
                    <li>CBC</li>
                    <li>Blood Group & RH</li>
                    <li>Urine (Routine & Micro)</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                  </ul>
                  <div class="pricing-v9-price">
                    For <span class="g-color-default">tk:200/-</span>
                  </div>
                </div>
              </div>
              <!-- /Pricing Item -->
              <!-- Pricing Item -->
              <div class="col-md-3 col-xs-6 col-2xs-12">
                <div
                  style="border-radius: 10px"
                  class="pricing-v9 hover-effect"
                >
                  <div class="pricing-v9-head">
                    <h3 class="h3">
                      <span class="g-color-default">Blood</span> test
                    </h3>
                  </div>
                  <ul style="list-style-type: none">
                    <li>CBC</li>
                    <li>Blood Group & RH</li>
                    <li>Urine (Routine & Micro)</li>
                    <li>SGPT</li>
                    <li>&nbsp;</li>
                  </ul>
                  <div class="pricing-v9-price">
                    For <span class="g-color-default">tk:300/-</span>
                  </div>
                </div>
              </div>
              <!-- /Pricing Item -->
              <!-- Pricing Item -->
              <div class="col-md-3 col-xs-6 col-2xs-12">
                <div
                  style="border-radius: 10px"
                  class="pricing-v9 hover-effect"
                >
                  <div class="pricing-v9-head">
                    <h3 class="h3">
                      <span class="g-color-default">Cold</span> Test
                    </h3>
                  </div>
                  <ul style="list-style-type: none">
                    <li>Lipid Profile</li>
                    <li>ECG</li>
                    <li>Chest X-RAY</li>
                    <li>FBS</li>
                    <li>Basic Wellness Included</li>
                    <li>&nbsp;</li>
                  </ul>
                  <div class="pricing-v9-price">
                    For <span class="g-color-default">tk:400/-</span>
                  </div>
                </div>
              </div>
              <!-- /Pricing Item -->
              <!-- Pricing Item -->
              <div class="col-md-3 col-xs-6 col-2xs-12">
                <div
                  style="border-radius: 10px"
                  class="pricing-v9 hover-effect"
                >
                  <div class="pricing-v9-head">
                    <h3 class="h3">
                      <span class="g-color-default">Eye</span> Test
                    </h3>
                  </div>
                  <ul style="list-style-type: none">
                    <li>Basic Wellness Plan</li>
                    <li>Lung Function Tests</li>
                    <li>USG Abdomen</li>
                    <li>Thyroid All Tests</li>
                    <li>Lung Efficiency Tests</li>
                  </ul>
                  <div class="pricing-v9-price">
                    For <span class="g-color-default">tk:100/-</span>
                  </div>
                </div>
              </div>
              <!-- /Pricing Item -->
            </div>
          </div>
        </div>
      </section>
      <!-- End PLANS -->

      <!--=== Footer ===-->
      <div class="footer-v1">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- About -->
              <div class="col-md-3 md-margin-bottom-40">
                <a href="index.php"
                  ><img
                    id="logo-footer"
                    class="footer-logo"
                    src="assets/img/logo/duet-logo.png"
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
                    <a href="about.php">About us</a
                    ><i class="fa fa-angle-right"></i>
                  </li>
                  <li>
                    <a href="Contact.php">Contact us</a
                    ><i class="fa fa-angle-right"></i>
                  </li>
                  <li>
                    <a href="appointment.php">Book Appointment</a
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
    </div>
    <!--/wrapper-->
  </body>
</html>
