<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Lost & Found PT.KAI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="img/L&F.png" rel="icon">
    <link href="img/L&F.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('/dashboard/../assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/../assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('/dashboard/css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background-color: #68b9de ;">
      <div class="container d-flex align-items-center">
        <a href="../index.html" class="logo me-auto">
          <img src="img/lostnfound.png" alt="" class="img-fluid">
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <a class="nav-link scrollto" href="#profile">Profile</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#report">Report List</a>
            </li>
            <li>
              <a class="nav-link scrollto active" href="{{route('welcome')}}">Back to Website</a>
            </li>
            <li>
              <a class="getstarted scrollto" href="../report/report.html">Reporting Form</a>
            </li>
            <li>
              <a class="getstarted scrollto" href="{{route('logout')}}">Logout</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <!-- ======= Profile Section ======= -->
    <br>
    <br>
    <main id="main">
      @yield('profile')
    </main>
    <!--Report List-->
    <main>
      @yield('report_list')
    </main>
    <!-- Vendor JS Files -->
    <script src="{{asset('/dashboard/../assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('/dashboard/../assets/vendor/php-email-form/validate.js')}}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Template Main JS File -->
    <script src="{{asset('/dashboard/../assets/js/main.js')}}"></script>
  </body>
</html>