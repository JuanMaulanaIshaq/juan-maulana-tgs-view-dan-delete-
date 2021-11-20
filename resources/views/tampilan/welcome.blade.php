<!DOCTYPE html>
<html lang="en">
@include('tampilan.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('tampilan.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tampilan.sidebar')
  <!-- /.Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
  @yield('contant')
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  @include('tampilan.footer')
  <!-- /.footer -->

  <!-- Control Sidebar -->
  @include('tampilan.control')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- script -->
@include('tampilan.script')
<!-- /.script -->

</body>
</html>