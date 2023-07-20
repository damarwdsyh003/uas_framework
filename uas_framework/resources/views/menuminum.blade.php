<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kan - Append Bootstrap Temlate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- File CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="menu-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index2.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Airlangga's Canteen</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="{{ route('menu')}}">Menu</a></li>
            <li><a href="{{ route('keranjang')}}">Keranjang</a></li>
            <li><a href="{{ route('riwayat')}}">Riwayat</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

    </div>
  </header><!-- End Header -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
  }

    h1 {
      text-align: center;
      color: #1a5a96;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 20px 0;
    }

    li {
      margin-bottom: 10px;
    }

    .food-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .food-name {
      font-weight: bold;
    }

    .food-price {
      color: #777;
    }

    .order-button {
      background-color: #1a5a96;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .order-button:hover {
      background-color: #1a5a96;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Menu Minuman</h1>
    <section id="menu-makanan" class="menu-makanan">
        <div class="container" >
          <h1>Menu Makanan</h1>
          <div class="row">
            @foreach($minuman as $minumanItem)
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $minumanItem->nama_minuman }}</h5>
                  <p class="card-text">Rp {{ $minumanItem->harga_minuman }}</p>
                  <button class="order-button">Pesan</button>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Airlanga's Canteen</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/unair_official"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/universitasairlangga"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/univ_airlangga"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl. Airlangga No.4 - 6, Airlangga, Kec. Gubeng, Kota SBY</p>
          <p>Jawa Timur, 60115</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>(031) 5915551</span></p>
          <p><strong>Email:</strong> <span>adm@pkip.unair.ac.id</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Airlangga's Canteen</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>