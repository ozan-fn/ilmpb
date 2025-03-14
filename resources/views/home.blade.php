<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Informasi Mudik Polresta Banyumas</title>
  <meta name="description" content="Informasi lengkap untuk mudik aman dan nyaman dari Polresta Banyumas">
  <meta name="keywords" content="mudik, polresta, banyumas, keamanan, lalu lintas">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <!-- Header -->
  <header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <img src="{{ asset('assets/images/logo polresta.png') }}" alt="Logo Polresta">
          <img src="{{ asset('assets/images/logo bebrayan3.png') }}" alt="Logo Bebrayan">
          <h4 class="sitename">Informasi Mudik Polresta Banyumas</h4>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="active">Home</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h4 align="center">Selamat Mudik! Pastikan Perjalanan Anda Aman & Nyaman</h4>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('assets/images/selamat-datang.jpg') }}" class="d-block w-100" alt="Selamat Datang">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/images/pengingat.jpg') }}" class="d-block w-100" alt="Pengingat">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Icon Boxes -->
      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="layanan-mudik" class="stretched-link">Layanan Mudik</a></h4>
              </div>
            </div>
            
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="/pos-pengamanan-mudik" class="stretched-link">Posko Pengamanan Mudik</a></h4>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="update-lalu-lintas" class="stretched-link">Update Lalu Lintas</a></h4>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="tips-mudik" class="stretched-link">Tips Mudik</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Polresta Banyumas</h2>
        <h5>Mudik Aman, Keluarga Nyaman</h5>
      </div>

      <!-- Bottom Carousel -->
      <div id="bottomCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/2.jpg') }}" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="Image 3">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/4.jpg') }}" class="d-block w-100" alt="Image 4">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/5.jpg') }}" class="d-block w-100" alt="Image 5">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/6.jpg') }}" class="d-block w-100" alt="Image 6">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/7.jpg') }}" class="d-block w-100" alt="Image 7">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/8.jpg') }}" class="d-block w-100" alt="Image 8">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/9.jpg') }}" class="d-block w-100" alt="Image 9">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bottomCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bottomCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </main>

  <!-- Footer Spacer -->
  <div class="hero"></div>

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>