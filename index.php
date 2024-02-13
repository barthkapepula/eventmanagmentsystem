<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ACSZ<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="./admin/">Admin</a></li>
          <li><a href="./Booking/login.php">Book a facility</a></li>
          <li><a href="./Booking/login.php">Sign Up/Log In</a></li>
          <
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>ACSZ Event Management System</span></h2>
            <p data-aos="fade-up">A system designed to handle bookings for various halls, arenas, and pavilions owned by the show society.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="./booking/login.php" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/ar1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/ar1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/welcome.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/slides/mc.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

   
    <!-- ======= Service Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>We provide a wide range of services such as;</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/hall\ one1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Hall</h4>
                    <p>
                      <ul>                      
                      <li> Jubilee Hall: With a capacity of 160, Jubilee Hall is a suitable choice for medium-sized events.</li>
                      <li> Members Pavilion Halls 1, 2, and 3: These fully air-conditioned halls have capacities ranging from 150 to 250.
                      They come equipped with chairs and tables, making them ideal for various gatherings.</li>
                    </ul>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/main\ arena4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Arenas</h4>
                    <p>
                      <ul>
                        <li> Main Arena: With a substantial capacity of 20,000, the Main Arena is perfect for hosting sports events, concerts,
                           government functions, holiday commemorations, crusades, and music concerts.</li>
                          <li>Yotamu Muleya Arena: A versatile space for various events.</li>
                          <li> Polo B Field: Ideal for outdoor sporting events.</li>
                      </ul>
                      <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/pavilion7.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Pavilions</h4>
                    <p>
                      <ul>
                        <li>Bankers Pavilion: This pavilion features 8 office spaces, making it suitable for businesses and organizations.</li>
                          <li>Comesa Village Chalets (CV1 to CV18): Offering 18 chalets, Comesa Village is perfect for accommodations and lodging for guests.</li>
                      </ul>
                      <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/hall\ one3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Chairs and linen cloth rental service</h4>
                    <p>
                      We also provide chair and linen cloth rental services  to enhance your event experience.
                      We have a variety of chairs and high quality linen cloth options to complement your event decor and seating requirements.
                    <br>
                    <br>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </p>
                  <br>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Our Gallery Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Gallery</h2>
          <p> Here is a collection of our services.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Pavilion</li>
            <li data-filter=".filter-construction">Arenas</li>
            <li data-filter=".filter-repairs">Hall</li>
            <li data-filter=".filter-design">Chairs</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pa.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/projects/pa.jpg" title="pavilion" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  
                </div>
              </div>
            </div><!-- End Projects Item -->


            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/cosmas Michello Hall.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Hall</h4>
                  <a href="assets/img/projects/cosmas Michello Hall.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/hall two.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Chairs</h4>
                  <a href="assets/img/projects/hall two.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pavilion05.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pavilion</h4>
                  <a href="assets/img/projects/pavilion05.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/main arena 4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Arena</h4>
                  <a href="assets/img/projects/main arena 4.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/cosmas Michello Hall.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Hall</h4>
                  <a href="assets/img/projects/cosmas Michello Hall.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/hall deco.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Decor</h4>
                  <a href="assets/img/projects/hall deco.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/chana house.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Chena</h4>
                  <a href="assets/img/projects/chana house.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/main arena1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Arena</h4>
                  <a href="assets/img/projects/main arena1.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/hall one.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Hall</h4>
                  <a href="assets/img/projects/hall one.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/hall one1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Decor </h4>
                  <a href="assets/img/projects/hall one1.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>
      </div>
    </section><!-- End Our Projects Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>ACSZ</h3>
              <p>
                Showgrounds Great East Rd <br>
                Lusaka, Zambia<br><br>
                <strong>Phone:</strong> +260978050698<br>
                <strong>Email:</strong> info@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ACSZ</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>