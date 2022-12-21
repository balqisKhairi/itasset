 
 
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

.card {
    
    margin-top: 10rem;
}

.row {
  
    margin-top: 10px;
}


.card-header {
  
    background-color: #bde5ff;
}

.btn-primary {
   
    --bs-btn-padding-x: 100px;
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

  @yield('content')
  </body>
</html>

 