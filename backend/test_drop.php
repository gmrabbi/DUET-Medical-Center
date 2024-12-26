<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .info {
            padding: 10px;
            background-color: #e9ecef;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 10px;
        }

        .info div {
            margin: 5px 0;
            color: #555;
        }

        .info div span {
            font-weight: bold;
        }
    </style>
    <script>
        let doctorData = []; // Declare the doctorData array globally

        // Function to fetch doctor data from the PHP script
        function fetchDoctorData() {
            fetch('get_appointments.php')  // Replace with the actual path to your PHP file
                .then(response => response.json())
                .then(data => {
                    doctorData = data; // Store the fetched data globally
                    populateDoctorDropdown(data);  // Populate dropdown with doctor names
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }

        // Function to populate the doctor dropdown
        function populateDoctorDropdown(doctorData) {
            const doctorSelect = document.getElementById("doctor_name");
            doctorSelect.innerHTML = '<option value="" disabled selected>Select a doctor</option>'; // Reset dropdown

            // Populate dropdown with doctors
            doctorData.forEach(doctor => {
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
            const selectedDoctorData = doctorData.find(item => item.doc_name === selectedDoctor);

            if (selectedDoctorData) {
                // Update labels with the doctor's information
                departmentLabel.textContent = `Department: ${selectedDoctorData.doc_dep}`;
                timeslotLabel.textContent = `Timeslot: ${selectedDoctorData.doc_timeslot}`;
            } else {
                // Clear labels if no doctor is selected
                departmentLabel.textContent = "Department: Not selected";
                timeslotLabel.textContent = "Timeslot: Not selected";
            }
        }

        // Fetch data when the page loads
        document.addEventListener('DOMContentLoaded', fetchDoctorData);
    </script>
</head>
<body>
    <div class="container">
        <h1>Doctor Information</h1>
        <form>
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
        </form>
    </div>
</body>
</html>
