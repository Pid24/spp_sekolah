    <div class="box box-info">
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
</div>