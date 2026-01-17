<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="swal-success" content="{{ session('success') }}">
    <meta name="swal-error" content="{{ session('error') }}">
     
  <title>GMNI Mataram | Dashboard</title>
  <!-- ICON BOOTSRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/dist/css/adminlte.min.css">
  
    <!-- NOTIF SWEETALERT2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.17/dist/sweetalert2.min.css">

  <!-- TRIX EDITOR -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('dashboard.admin.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('dashboard.user.layouts.sidebaruser')
  
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  

    <!-- Main content -->
    @yield('container')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Crack</b> 22
    </div>
    <strong>Copyright @2026 syarief <a href="https://adminlte.io">admin</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/css/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/css/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/css/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/css/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/css/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/css/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/css/plugins/jszip/jszip.min.js"></script>
<script src="/css/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/css/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/css/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/css/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/css/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/swall.js"></script>

<!-- AdminLTE App -->
<script src="/css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/css/dist/js/demo.js"></script>
<!-- Page specific script -->
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
