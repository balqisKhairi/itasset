<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IT Asset KPJBP</title>
 
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin2/assets/img/logo1.jpeg') }}">

  <!-- Favicons -->
  <link href="{{ asset('admin2/assets/img/logo1.jpeg') }}" rel="icon">
  <link href="{{ asset('admin2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin2/assets/css/style.css') }}" rel="stylesheet">

  
</head>

<style>


#hero {
    width: 100%;
    height: 70vh;
    margin-top: 70px;
    background-color: #316c99;
}


#hero h1 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: white;
    font-family: 'bootstrap-icons';
}


#hero h2 {
    color: #ffffff;
    margin-bottom: 50px;
    font-size: 24px;
    font-style: italic;
    text-align: center;
}

.navbar .getstarted, .navbar .getstarted:focus {
    background: #316c99;
    padding: 8px 25px;
    margin-left: 30px;
    border-radius: 50px;
    color: #fff;
}
  </style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="">Information Technology</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        @if (Route::has('login'))
          @auth
        <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
            <ul>
               
                  
              </li>
              
            </ul>
          </li>
        
                    @else
          <li><a class="getstarted scrollto" href="{{ route('login') }}">LOGIN</a></li>
          @if (Route::has('register'))
          <li><a class="getstarted scrollto" href="{{ route('register') }}">REGISTER</a></li>
          @endif
                    @endauth
                </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Save Your Data Here</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Let The System Do Their Work</h2>
          <div data-aos="fade-up" data-aos-delay="800">
           
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('admin2
      /assets/img/hero.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    

    

          </main>
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>KPJ Batu Pahat</h3>
              <p>Specialist Hospital</p>
              <div class="social-links">
                <a href="https://www.facebook.com/people/KPJ-Batu-Pahat-Specialist-Hospital/100063458937086/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/kpjbatupahat/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>No 1, Jalan Mutiara Gading 1 Taman Mutiara Gading Sri Gading, <br>83000 Batu Pahat, Johor</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>bpsh@kpjbatupahat.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>07-459 1000</p>
              </div>

            </div>
          </div>

       

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright for <strong>IT Department KPJBp</strong>. All Rights Reserved by BK
          </div>
          
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin2/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('admin2/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin2/assets/js/main.js') }}"></script>

</body>

</html>