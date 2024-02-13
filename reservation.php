<?php
// Start a PHP session to manage user authentication
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reservation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        /* Style the form labels */
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Style the input fields and dropdowns */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style the submit button */
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Style the submit button on hover */
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    .profile {
      position: relative;
    }

    .profile .profile-icon {
      position: absolute;
      right: 10px;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
 <header id="header">
  
             

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="facilities.php" class="nav-link scrollto active"><i class="bi bi-house-door"></i> <span>Home</span></a></li>
        <li><a href="reservation.php" class="nav-link scrollto"><i class="bi bi-calendar"></i> <span>Make Reservation</span></a></li>
        <li><a href="getquotation.php" class="nav-link scrollto"><i class="bi bi-currency-dollar"></i> <span>Get a quotation</span></a></li>
        <li><a href="facilities.php" class="nav-link scrollto"><i class="bi bi-building"></i> <span>Facilities</span></a></li>
        <li><a href="../index.php" class="nav-link scrollto"><i class="bi bi-box-arrow-left"></i> <span>Log out</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Clients dashboard</li>
          </ol>
        </div>
        <div class="d-flex flex-column">
          <div class="profile">
            <i class="bi bi-person-circle profile-icon"></i>
            <h1 class="text-light"><a href="index.html"></a></h1>
      </div>
      
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <h1>Booking Form</h1>
        <form action="process_booking.php" method="POST">
            <label>Select Facility Category:</label>
            <select id="facilityCategory" name="facilityCategory">
                <option value="hall">Hall</option>
                <option value="arena">Arena</option>
                <option value="pavilion">Pavilion</option>
                <option value="chair">Chair Rental</option>
            </select><br>
    
            <label>Select Facility:</label>
            <select id="facility" name="facility">
                <!-- The options will be populated dynamically using JavaScript -->
            </select><br>
    
            <label>Reservation Date:</label>
            <input type="date" name="reservation_date" required><br>
    
            <label>Email:</label>
            <input type="email" name="email" required><br>
    
            <input type="submit" value="Submit Booking">
        </form>
    
        <script>
            // JavaScript to populate the "Select Facility" dropdown based on the chosen category
            const facilityCategory = document.getElementById('facilityCategory');
            const facilityDropdown = document.getElementById('facility');
    
            const facilities = {
                hall: [
                    "Jubilee Hall capacity 160",
                    "Members Pavilion Hall 1 capacity 250, fully air-conditioned",
                    "Members Pavilion Hall 2 capacity 250, fully air-conditioned",
                    "Members Pavilion Hall 3 capacity 150, fully air-conditioned",
                    "C Michelo Hall capacity 350-400",
                    "D Mfula Hall capacity 300",
                    "American Dome capacity 400"
                ],
                arena: [
                    "Main arena, capacity 20,000",
                    "Yotamu Muleya arena",
                    "Polo B Field",
                    "New Band stand"
                ],
                pavilion: [
                    "Bankers Pavilion with 8 office spaces",
                    "18 chalets in Comesa Village (CV1 to CV18)",
                    "Mulenga Pavilion",
                    "African Pot Pavilion",
                    "Kataya Pavilion",
                    "Yotamu Muleya Pavilion",
                    "Singer stand",
                    "Zambia Hall Annex",
                    "Zambia Pork Stand",
                    "Cartridge stand",
                    "Information Centre",
                    "Lima Bank Hall"
                ],
                chair: ["Chair Rental"]
            };
    
            facilityCategory.addEventListener('change', () => {
                const selectedCategory = facilityCategory.value;
                const categoryFacilities = facilities[selectedCategory];
    
                // Clear the existing options
                facilityDropdown.innerHTML = "";
    
                // Populate the options for the selected category
                categoryFacilities.forEach((facility) => {
                    const option = document.createElement('option');
                    option.value = facility;
                    option.text = facility;
                    facilityDropdown.appendChild(option);
                });
            });
        </script>
      </div>
    </section>

  </main><!-- End #main -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>