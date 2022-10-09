  <?php 
    include '../koneksi.php';
    session_start();
    if($_SESSION['status'] != "administrator_logedin"){
      header("location:../index.php?alert=belum_login");
    }
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keuangan | Hasbuna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/vendor/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Datepicker -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="assets/vendor/adminlte/plugins/datetime/dataTables.dateTime.min.css"> -->
  <style>
    .blink_me {
      animation: blinker 1s linear infinite;
    }

    @keyframes blinker {  
      50% { opacity: 0; }
    } 
 </style>

  <!-- fullCalendar -->
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fullcalendar-interaction/main.min.css">
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="assets/vendor/adminlte/plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link" role="button" href="http://192.168.1.19:5000/">
            <i class="fab fa-lg fa-whatsapp"></i>
          </a>
        </li>
        <li>
          <a class="nav-link" role="button" href="logout.php">
            <i class="fas fa-lg fa-sign-out-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>

  </nav>
  <!-- /.navbar -->

  <?php include 'leftside.php'; ?>



