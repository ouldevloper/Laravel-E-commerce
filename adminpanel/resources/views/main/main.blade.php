<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Store X | Dashboard</title>

  

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{ url('/ressourses/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('/ressourses/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <h4  class="nav-link">Dashboard</h1>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  New message
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-cogs"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Log out
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Store X</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abdellah OUlahyane  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-home"></i>
             <p>
               Dashboard
             </p>
           </a>
          </li>
          <!-- PRODUCTS-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Product's
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/product/new" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert New Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product/manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Products</p>
                </a>
              </li>
            </ul>
          </li> 

          <!-- CATEGORIS-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/category/new" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert New Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/category/manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li> 

          <!-- USERS-->
          <li class="nav-item">
            <a href="/user/manage" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User's
                <i class="fas fa-angle-left right"></i>
                <i class="fa-solid fa-user"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user/new" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/user/manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Users</p>
                </a>
              </li>
            </ul>
          </li> 

          <!-- ABOUT US-->
          <li class="nav-item">
            <a href="/aboutus" class="nav-link">
              <i class="nav-icon fa fa-info"></i>
              <p>
                About us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/aboutus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage About US</p>
                </a>
              </li>
            </ul>
          </li> 

          <!-- SOCIAL MEDIA-->
          <li class="nav-item">
            <a href="/socialmedia/manage" class="nav-link">
              <i class="nav-icon fa fa-barcode"></i>
              <p>
                Social Media
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/socialmedia/new" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert New Social Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/socialmedia/manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Social Media</p>
                </a>
              </li>
            </ul>
          </li> 
          <!-- SUBSCRIBERS-->
          <li class="nav-item">
            <a href="/subscribers" class="nav-link">
              <i class="nav-icon fa fa-info"></i>
              <p>
                SUBSCRIBERS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li> 
          <!-- CONTACT US-->
          <li class="nav-item">
            <a href="/contactus" class="nav-link">
              <i class="nav-icon fa fa-envolope"></i>
              <p>
                CONTACT US
                <i class="fas fa-angle-left right"></i>
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
    @yield('content')
    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <center>
      Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a href="https://facebook.com/maruki00">Abdellah Oulahyane</a>.
    All rights reserved.
    </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ url('/ressourses/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ url('/ressourses/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{ url('/ressourses/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{ url('/ressourses/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/moment/moment.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ url('/ressourses/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ url('/ressourses/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ url('/ressourses/dist/js/adminlte.js')}}"></script>
<script src="{{ url('/ressourses/dist/js/demo.js')}}"></script>
<script src="{{ url('/ressourses/dist/js/pages/dashboard.js')}}"></script>

<script src="{{ url('/ressourses/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('/ressourses/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script src="{{ url('/ressourses/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ url('/ressourses/dist/js/demo.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

</body>
</html>
