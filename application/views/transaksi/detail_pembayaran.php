<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Detail Pembayaran</h4>
        <div class="pull-right">
          <a href="<?php echo base_url('transaksi') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="box-body">
        <form action="<?php echo base_url('transaksi/aksi_transaksi') ?>" method="post">
        <input type="hidden" name="nis" value="<?php echo $siswa['nis'] ?>">
        <input type="hidden" name="bulan_dibayar" value="<?php echo $bulan_dibayar ?>">
        <div class="row">
          <div class="col-md-6">
            <table class="table">
              <tr>
                <th>NIS</th>
                <td><?php echo $siswa['nis'] ?></td>
              </tr>
              <tr>
                <th>Nama Siswa</th>
                <td><?php echo $siswa['nama_siswa'] ?></td>
              </tr>
              <tr>
                <th>Kelas</th>
                <td><?php echo $siswa['nama_kelas'] ?></td>
              </tr>
              <tr>
                <th>Jurusan</th>
                <td><?php echo $siswa['nama_jurusan'] ?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table">
              <tr>
                <th>Nominal</th>
                <td><?php echo "Rp. " . number_format($spp['nominal']) ?></td>
              </tr>
              <tr>
                <th>Sudah Dibayar</th>
                <td><?php echo "Rp. " . number_format($sudah_dibayar) ?></td>
              </tr>
              <tr>
                <th>Sisa Tagihan</th>
                <td><?php echo "Rp. " . number_format($sisa_tagihan) ?></td>
              </tr>
              <tr>
                <th>Bulan Dibayar</th>
                <td><?php echo $bulan_dibayar ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <th><?php echo $status ?></th>
              </tr>
              <tr>
                <th>Lunas</th>
                <th><?php echo $lunas ?></th>
              </tr>
              <?php if ($status == 'Belum Dibayar' && $lunas == 'Belum Lunas'): ?>
              <tr>
                <th>Jumlah Bayar</th>
                <td><input type="text" class="form-control" name="jumlah_bayar" placeholder="Jumlah Bayar"></td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit" class="btn btn-primary btn-block">Konfirmasi</button></td>
              </tr>
              <?php endif ?>
            </table>
            </form>
          </div>
        </div>
      </div>
      <div class="box-footer">
      </div>
    </div>
  </div>
</div>