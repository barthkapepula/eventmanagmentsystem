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

  <title>   Faculties</title>
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
      
        /* Style for the container */
.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

/* Style for section titles */
h1, h2 {
    color: #333;
    font-weight: bold;
}

/* Style for facility categories */
.facility-category {
    margin-top: 20px;
}

.facility-category h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.facility-category ul {
    list-style-type: disc;
    padding-left: 20px;
}

.facility-category ul li {
    margin: 5px 0;
}

/* Style for lists */
ul {
    list-style: none;
}

/* Hover effect for lists */
ul li:hover {
    background-color: #f2f2f2;
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
    <h1>Facilities Available</h1>

    <div class="facility-category">
      <h2>Hall</h2>
      <ul>
        <li>Jubilee Hall - Capacity: 160</li>
        <li>Members Pavilion Hall 1 - Capacity: 250 (Fully air-conditioned, includes chairs and tables)</li>
        <li>Members Pavilion Hall 2 - Capacity: 250 (Fully air-conditioned, includes chairs and tables)</li>
        <li>Members Pavilion Hall 3 - Capacity: 150 (Fully air-conditioned, includes chairs and tables)</li>
        <li>C Michelo Hall - Capacity: 350-400 (Includes chairs and tables)</li>
        <li>D Mfula Hall - Capacity: 300 (Includes chairs and tables)</li>
        <li>American Dome - Capacity: 400 (Includes chairs and tables)</li>
      </ul>
    </div>

    <div class="facility-category">
      <h2>Arena</h2>
      <ul>
        <li>Main arena - Capacity: 20,000</li>
        <li>Yotamu Muleya arena</li>
        <li>Polo B Field</li>
        <li>New Band stand</li>
      </ul>
    </div>

    <div class="facility-category">
      <h2>Pavilion</h2>
      <ul>
        <li>Bankers Pavilion with 8 office spaces</li>
        <li>Comesa Village Chalets - CV1 to CV18</li>
        <li>Mulenga Pavilion</li>
        <li>African Pot Pavilion</li>
        <li>Kataya Pavilion</li>
        <li>Yotamu Muleya Pavilion</li>
        <li>Singer stand</li>
        <li>Zambia Hall Annex</li>
        <li>Zambia Pork Stand</li>
        <li>Cartridge stand</li>
        <li>Information Centre</li>
        <li>Lima Bank Hall</li>
      </ul>
    </div>
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