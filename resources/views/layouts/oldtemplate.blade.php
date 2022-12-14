<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IT Asset KPJBP</title>
  
  <style>
    .body{
      line-height: none;
    }

    .layout-fixed .main-sidebar {
    background-color: #002a56;
}

.inline-block {
    color: #ffffff;

}

.navbar-light .navbar-nav .nav-link {
    color: rgb(0 0 0);
}
    </style>
 
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/dist/img/logo1.jpeg') }}">
     

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('admin/dist/img/logo1.jpeg') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
</ul>
   
 

       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->


  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/logo1.jpeg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IT ASSET</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('showStati') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>      
          <li class="nav-item">
            <a href="{{ route('categorys.index') }}"class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Category
              </p>
            </a>
          </li>   
          
          <li class="nav-item">
            <a href="{{ route('departments.index') }}"class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Department
              </p>
            </a>
          </li>  


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
                Record
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('desktops.index') }}" class="nav-link">
                  <i class="fa fa-desktop"></i>
                  <p>Desktops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('osdesktops.index') }}" class="nav-link">
                  <i class="fa fa-desktop"></i>
                  <p>OS Desktops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('imageviewers.index') }}" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>Image Viewer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('aiodesktops.index') }}"  class="nav-link">
                  <i class="fa fa-window-maximize"></i>
                  <p>AiO Desktops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tablets.index') }}" class="nav-link">
                  <i class="fa fa-tablet"></i>
                  <p>Tablet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('laptops.index') }}"class="nav-link">
                  <i class="fa fa-laptop"></i>
                  <p>Laptop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('printers.index') }}" class="nav-link">
                  <i class="fa fa-print"></i>
                  <p>Printer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tvsharps.index') }}" class="nav-link">
                  <i class="fa fa-window-maximize"></i>
                  <p>TV Sharp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cardReaders.index') }}" class="nav-link">
                  <i class="fa fa-credit-card"></i>
                  <p>Card Reader</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('biometrics.index') }}" class="nav-link">
                  <i class="fa fa-eye-slash"></i>
                  <p>Biometric</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('encoremeds.index') }}" class="nav-link">
                  <i class="fa fa-medkit"></i>
                  <p>Encoremed</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('powers.index') }}" class="nav-link">
                  <i class="fa fa-battery-three-quarters"></i>
                  <p>UPS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mposs.index') }}"class="nav-link">
                  <i class="fa fa-book"></i>
                  <p>MPOS</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('vendors.index') }}"class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Vendor
              </p>
            </a>
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <main class="py-4">
            @yield('content')
        </main>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <br></br>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 IT Department KPJBP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!--<b>Version</b> 3.1.0-->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
