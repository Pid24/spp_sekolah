<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
      </div>
      <div class="box-body">
        <form action="<?php echo base_url('transaksi/detail_pembayaran') ?>" method="post">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_siswa">Cari Siswa</label>
                    <select name="id_siswa" id="id_siswa" class="form-control">
                      <option value="pilih_jenis">-- Pilih Jenis --</option>
                      <?php foreach ($siswa as $j): ?>
                        <option value="<?php echo $j['id_siswa'] ?>"><?php echo $j['nama_siswa'] ?></option>
                      <?php endforeach ?>
                    </select>  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bulan_dibayar">Bulan Dibayar</label>
                    <select name="bulan_dibayar" id="bulan_dibayar " class="form-control">
                      <option value="pilih_bulan">-- Pilih Bulan --</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>  
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="box-footer">

      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Terakhir</h4>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Bayar</th>
                <th>Nama Siswa</th>
                <th>Bulan Dibayar</th>
                <th>Tahun Dibayar</th>
                <th>Jumlah Bayar</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($transaksi as $row): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['tgl_bayar'] ?></td>
                <td><?php echo $row['nama_siswa'] ?></td>
                <td><?php echo $row['bulan_dibayar'] ?></td>
                <td><?php echo $row['tahun_dibayar'] ?></td>
                <td><?php echo "Rp. " . number_format($row['jumlah_bayar']) ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>