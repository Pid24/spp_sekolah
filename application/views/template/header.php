<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Pembayaran Spp Sekolah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition red sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Aplikasi</b>Spp</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Aplikasi</b>Spp</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN MENU</li>
          <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="header">MASTER DATA</li>
          <li><a href="<?php echo base_url('jurusan') ?>"><i class="fa fa-university"></i> <span>Data Jurusan</span></a></li>
          <li><a href="<?php echo base_url('kelas') ?>"><i class="fa fa-sitemap"></i> <span>Data Kelas</span></a></li>
          <li><a href="<?php echo base_url('siswa') ?>"><i class="fa fa-users"></i> <span>Data Siswa</span></a></li>
          <li><a href="<?php echo base_url('spp') ?>"><i class="fa fa-database"></i> <span>Data Spp</span></a></li>
          <li><a href="<?php echo base_url('petugas') ?>"><i class="fa fa-lock"></i> <span>Data Petugas</span></a></li>
          <li class="header">TRANSAKSI</li>
          <li><a href="<?php echo base_url('transaksi') ?>"><i class="fa fa-credit-card"></i> <span>Transaksi</span></a></li>
          <li class="header">LAPORAN</li>
          <li><a href="<?php echo base_url('laporan') ?>"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
          <li class="header">LAPORAN</li>
          <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          APLIKASI PEMBAYARAN SPP
          <small>Aplikasi Spp</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->