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
  <link rel="stylesheet" href="<?php echo base_url('assets/lte/') ?>dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print()">
      <div class="box">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
          <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-university"></i> SMK ANGKASA 1 MARGAHAYU
            <small class="pull-right">Tanggal : <?php echo date('d-m-Y') ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-6 table-responsive">
          <table class="table">
            <tr>
              <th>Telah Diterima Dari</th>
              <td><?php echo $data['nama_siswa'] ?></td>
            </tr>
            <tr>
              <th>Tahun Dibayar</th>
              <td><?php echo $data['tahun_dibayar'] ?></td>
            </tr>
            <tr>
              <th>Bulan Dibayar</th>
              <td><?php echo $data['bulan_dibayar'] ?></td>
            </tr>
            <tr>
              <th>Jumlah Bayar</th>
              <td><?php echo "Rp. " . number_format($data['jumlah_bayar']) ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <th>Dibayar</th>
            </tr>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a target="_blank" href="<?php echo base_url('transaksi/cetak_invoice/' . $this->uri->segment(3)) ?>" class="btn btn-success pull-right"><i class="fa fa-print"></i> Cetak</a>
          <a href="<?php echo base_url('transaksi') ?>" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-arrow-left"></i> kembali
          </a>
        </div>
      </div>
    </div>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/lte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/lte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/lte/') ?>dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>