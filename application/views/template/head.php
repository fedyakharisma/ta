<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jquery utk ajax-->
<<<<<<< HEAD
  <script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.js"></script>
=======
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.js"></script>
>>>>>>> 1e0a6ec831046be2c046241bd3c33d30561df3a9
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <?php echo $this->session->userdata("nama"); ?>
            <i class="fas fa-user"></i>
          </a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu dropdown-menu-sm dropdown-menu-right border-0 shadow">
            <li><a href="<?php echo site_url('Profil/') ?>" class="dropdown-item dropdown-footer">Ubah Profil</a></li>
            <li><a href="<?php echo site_url('Profil/ubahPassword') ?>" class="dropdown-item dropdown-footer">Ubah Password</a></li>
            <li><a href="<?php echo site_url('Login/logout/') ?>" class="dropdown-item dropdown-footer">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->