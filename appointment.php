<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Redirect to the login page if not logged in
  echo "<script>
        alert('You must log in first.');
        window.location.href = 'login.php'; // Redirect to login page
    </script>";
  // header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>DUET Medical Center | Appointment</title>

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
  <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css" />
  <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css" />

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css" />

  <!--// --------------------- --->
  <script>
    function validform() {


      //////////////

      document.getElementById('doctor_name').addEventListener('change', function() {
        var selectedDepartment = this.value; // Get the selected department
        
        // Update the department div
        var departmentDiv = document.getElementById('doctor_dep');
        if (selectedDepartment) {
            departmentDiv.textContent = selectedDepartment;
        } else {
            departmentDiv.textContent = 'Department: Not selected';
        }

        // Set the hidden input value to match the selected department
        var hiddenInput = document.getElementById('doctor_timeslot');
        hiddenInput.value = selectedDepartment;  // Set the hidden input value
        

        var TimeDiv = document.getElementById('doc_timeslotH');
        if (selectedDepartment) {
            TimeDiv.textContent =  selectedDepartment;
        } else {
            TimeDiv.textContent = 'Timeslot: Not selected';
        }

        // Set the hidden input value to match the selected department
        var hiddenInput = document.getElementById('doc_deptH');
        hiddenInput.value = selectedDepartment;  // Set the hidden input value
    
      });
    ////////////////////


      var y = document.forms["appo_form"]["doctor_name"].value;
      if (y == "") {
        alert("Select Doctor.");
        document.forms["appo_form"]["doctor_name"].focus();
        return false;
      }

      y = document.forms["appo_form"]["number"].value;
      if (y == "") {
        alert("Number is Empty");
        document.forms["appo_form"]["number"].focus();
        return false;
      }

      y = document.forms["appo_form"]["Department"].value;
      if (y == "") {
        alert("select department.");
        document.forms["appo_form"]["Department"].focus();
        return false;
      }

      y = document.forms["appo_form"]["Date"].value;
      if (y == "") {
        alert("Enter Date.");
        document.forms["appo_form"]["Date"].focus();
        return false;
      }

      var pass2 = document.forms["appo_form"]["Time"].value;
      if (pass2 == "") {
        alert("Select Time.");
        document.forms["appo_form"]["Time"].focus();
        return false;
      }


      

    }

    document.addEventListener("DOMContentLoaded", function () {
      // Get today's date in YYYY-MM-DD format
      const today = new Date().toISOString().split("T")[0];

      // Set the 'min' attribute of the date input to today's date
      const dateInput = document.getElementById("date");
      dateInput.setAttribute("min", today);
    });

    let doctorData = []; // Declare the doctorData array globally

    // Function to fetch doctor data from the PHP script
    function fetchDoctorData() {
      fetch("./backend/get_appointments.php") // Replace with the actual path to your PHP file
        .then((response) => response.json())
        .then((data) => {
          doctorData = data; // Store the fetched data globally
          populateDoctorDropdown(data); // Populate dropdown with doctor names
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    }

    // Function to populate the doctor dropdown
    function populateDoctorDropdown(doctorData) {
      const doctorSelect = document.getElementById("doctor_name");
      doctorSelect.innerHTML =
        '<option value="" disabled selected>Select a doctor</option>'; // Reset dropdown

      // Populate dropdown with doctors
      doctorData.forEach((doctor) => {
        const option = document.createElement("option");
        option.value = doctor.doc_name;
        option.textContent = doctor.doc_name;
        doctorSelect.appendChild(option);
      });
    }

    // Function to update department and timeslot when a doctor is selected
    function updateInfo() {
      const doctorSelect = document.getElementById("doctor_name");
      const departmentLabel = document.getElementById("doctor_dep");
      const timeslotLabel = document.getElementById("doctor_timeslot");

      // Get selected doctor
      const selectedDoctor = doctorSelect.value;

      // Find the selected doctor in the global doctorData array
      const selectedDoctorData = doctorData.find(
          (item) => item.doc_name === selectedDoctor
      );

      if (selectedDoctorData) {
          // Update labels with the doctor's information
          departmentLabel.textContent = `Department: ${selectedDoctorData.doc_dep}`;
          timeslotLabel.textContent = `Timeslot: ${selectedDoctorData.doc_timeslot}`;

          // Set hidden input fields to match the selected department and timeslot
          document.getElementById("doc_deptH").value = selectedDoctorData.doc_dep;
          document.getElementById("doc_timeslotH").value = selectedDoctorData.doc_timeslot;
      } else {
          // Clear labels if no doctor is selected
          departmentLabel.textContent = "Department: Not selected";
          timeslotLabel.textContent = "Timeslot: Not selected";

          // Reset hidden input fields
          document.getElementById("doc_deptH").value = "";
          document.getElementById("doc_timeslotH").value = "";
      }
}

    /*
    function updateInfo() {
      const doctorSelect = document.getElementById("doctor_name");
      const departmentLabel = document.getElementById("doctor_dep");
      const timeslotLabel = document.getElementById("doctor_timeslot");

      // Get selected doctor
      const selectedDoctor = doctorSelect.value;

      // Find the selected doctor in the global doctorData array
      const selectedDoctorData = doctorData.find(
        (item) => item.doc_name === selectedDoctor
      );

      if (selectedDoctorData) {
        // Update labels with the doctor's information
        departmentLabel.textContent = `Department: ${selectedDoctorData.doc_dep}`;
        timeslotLabel.textContent = `Timeslot: ${selectedDoctorData.doc_timeslot}`;
      } else {
        // Clear labels if no doctor is selected
        departmentLabel.textContent = "Department: Not selected";
        timeslotLabel.textContent = "Timeslot: Not selected";
      }

    }*/
    // Fetch data when the page loads
    document.addEventListener("DOMContentLoaded", fetchDoctorData);
    
  </script>
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

    <!--=== Heading ===-->
    <div class="container content">
      <div class="row" style="margin-bottom: 30px">
        <div class="col-md-9" style="margin-bottom: 30px">
          <div class="headline">
            <h2>Appointment Form</h2>
          </div>

          <!--=== APPOINTMENT FORM ===-->
          <form action="./backend/appoinment.php" onsubmit="return validform()" method="post" class="reg-page"
            name="appo_form">
            <fieldset>
              <section class="col col-6">
                <!-- Dropdown for Doctor Names -->
                <label for="doctor_name">Choose a Doctor:</label>
                <select id="doctor_name" name="doctor_name" onchange="updateInfo()">
                  <!-- Options will be populated dynamically -->
                </select>             
                
                
                <!-- Labels for Department and Timeslot -->
                <div class="info">
                  <div id="doctor_dep">Department: Not selected</div>
                  <div id="doctor_timeslot">Timeslot: Not selected</div>
                </div>
              
                <input type="hidden" name="Department" id="doc_deptH" required="" />
                <input type="hidden" name="Time" id="doc_timeslotH" required="" />

              </section>

              <div class="row">
                <section class="col col-6">
                  <label class="label">Emergency Number</label>
                  <label class="input">
                    <i class="icon-append fa fa-phone"></i>
                    <input type="text" name="number" id="number" required="" />
                  </label>
                </section>

                <section class="col col-6">
                  <label class="date">Select Date</label>
                  <label class="input">
                    <i class="icon-append fa fa-calendar"></i>
                    <input type="date" id="date" name="Date" required="" />
                  </label>
                </section>

                <section class="col col-6">
                </section>

                <section>
                  <label class="label">Comment</label>
                  <label class="input">
                    <i class="icon-append fa fa-tag"></i>
                    <input type="text" name="Comment" required="" />
                  </label>
                </section>
              </div>
            </fieldset>

            <footer>
              <button type="submit" name="book" class="btn-u">
                Send message
              </button>
            </footer>
          </form>
        </div>
        <!--/col-md-9-->

        <!-- side part of appointment -->
        <div class="col-md-3" style="margin-top: 56px">
          <!-- Address -->
          <div class="headline">
            <h2>Appointment Notes</h2>
          </div>
          <p>
            You Only Can Book Your Appointment Between
            <strong>8 AM to 10 PM.</strong>
          </p>
          <p>
            In Other Times You Can Call Our Ambulance Which Is Available 24/7.
          </p>

          <!-- Business Hours -->
          <div class="headline" style="margin-top: 20px">
            <h2>Business Hours</h2>
          </div>
          <ul class="list-unstyled" style="margin-bottom: 30px">
            <li><strong>Sunday-Thursday:</strong> 24/7 Available.</li>
            <li><strong>Friday-Saturday:</strong> Only Emergency.</li>
          </ul>

          <!-- Why choose us? -->
          <div class="headline">
            <h2>Why Choose Us?</h2>
          </div>
          <p>
            All healthcare facilities can be accessed here under one roof,
            making DUET Medical Center a one point contact for all your
            healthcare needs.
          </p>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-check color-green"></i> 24/7 Ambulance Support.
            </li>
            <li>
              <i class="fa fa-check color-green"></i> Eminent and Experienced
              Doctors.
            </li>
            <li>
              <i class="fa fa-check color-green"></i> Multiple Options For
              Treatment.
            </li>
          </ul>
        </div>
        <!--/col-md-3-->
      </div>
      <!--/row-->
    </div>
    <!--/container-->

    <!--=== Footer ===-->
    <div class="footer-v1">
      <div class="footer">
        <div class="container">
          <div class="row">
            <!-- About -->
            <div class="col-md-3 md-margin-bottom-40">
              <a href="index.php"><img id="logo-footer" class="footer-logo" src="assets/img/logo/duet-logo.png"
                  alt="" /></a>
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

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>
                2024 &copy; All Rights Reserved.
                <a href="privacy.php">Privacy Policy</a> |
                <a href="terms.php">Terms of Service</a>
              </p>
            </div>

            <!-- Social Links -->
            <div class="col-md-6">
              <ul class="footer-socials list-inline">
                <li>
                  <a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Skype">
                    <i class="fa fa-skype"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top"
                    title="" data-original-title="Google Plus">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Twitter">
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