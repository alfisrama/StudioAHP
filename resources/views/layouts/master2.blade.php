<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$halaman}}</title>
  
  <!-- Icon -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('bootstrap/dist/img/musicLogo.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('bootstrap/dist/img/musicLogo.png') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- X-Editable -->
  <link rel="stylesheet" href="{{ asset('bootstrap4-editable/css/bootstrap-editable.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- Timepicker -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('bootstrap/dist/img/musicLogoo.png') }}" alt="Logo" height="150" width="150">
    </div>
    
      @yield('polos')
    
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('bootstrap/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('bootstrap/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('bootstrap/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('bootstrap/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('bootstrap/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('bootstrap/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('bootstrap/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('bootstrap/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('bootstrap/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('bootstrap/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('bootstrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('bootstrap/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('bootstrap/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('bootstrap/dist/js/pages/dashboard.js') }}"></script>
  <!-- X-editable -->
  <script src="{{ asset('bootstrap4-editable/js/bootstrap-editable.js') }}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('bootstrap/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- Select2 -->
  <script src="{{ asset('bootstrap/plugins/select2/js/select2.full.min.js')}}"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="{{ asset('bootstrap/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{ asset('bootstrap/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('bootstrap/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{ asset('bootstrap/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Bootstrap Switch -->
  <script src="{{ asset('bootstrap/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
  <!-- BS-Stepper -->
  <script src="{{ asset('bootstrap/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
  <!-- dropzonejs -->
  <script src="{{ asset('bootstrap/plugins/dropzone/min/dropzone.min.js')}}"></script>
  <!-- timepicker -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <!-- mask -->
  <script src="{{ asset('js/jquery.mask.js')}}"></script>
  <script src="{{ asset('js/jquery.mask.min.js')}}"></script>
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @yield('script')
</body>
</html>
