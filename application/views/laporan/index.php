<?php if(!isset($laporan_sudah)): ?>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form action="">
                <div class="form-group">
                  <label for="id_kelas">Cari Kelas</label>
                  <select name="id_kelas" id="id_kelas" class="form-control" required="">
                    <option>-- Pilih Kelas --</option>
                    <?php foreach ($kelas as $j): ?>
                      <option value="<?php echo $j['id_kelas'] ?>"><?php echo $j['nama_kelas'] ?></option>
                    <?php endforeach ?>
                  </select>  
                </div>
                <div class="form-group">
                  <label for="tahun_pendaftaran">Tahun Pendaftaran</label>
                  <input type="text" class="form-control" name="tahun_pendaftaran" placeholder="Tahun Pendaftaran" required="">
                </div>
                <div class="form-group">
                  <label for="bulan_dibayar">Bulan Dibayar</label>
                  <select name="bulan_dibayar" id="bulan_dibayar " class="form-control" required="">
                    <option>-- Pilih Bulan --</option>
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
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="box-footer">
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4 class="box-title">Data siswa yang sudah melakukan pembayaran</h4>
              <div class="pull-right">
                <a target="_blank" href="<?php echo base_url('laporan/cetak_sudah_bayar/' . $tahun_pendaftaran . '/' . $id_kelas . '/' . $bulan_dibayar) ?>" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                <a href="<?php echo base_url('laporan') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Kelas</th>
                      <th>Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($laporan_sudah as $lap): ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lap['nis'] ?></td>
                        <td><?php echo $lap['nama_kelas'] ?></td>
                        <td><?php echo $lap['nama_siswa'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <div class="box-footer">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4 class="box-title">Data siswa yang belum melakukan pembayaran</h4>
              <div class="pull-right">
                <a target="_blank" href="<?php echo base_url('laporan/cetak_belum_bayar/' . $tahun_pendaftaran . '/' . $id_kelas . '/' . $bulan_dibayar) ?>" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                <a href="<?php echo base_url('laporan') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Kelas</th>
                      <th>Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($laporan_belum as $lap): ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lap['nis'] ?></td>
                        <td><?php echo $lap['nama_kelas'] ?></td>
                        <td><?php echo $lap['nama_siswa'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <div class="box-footer">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>