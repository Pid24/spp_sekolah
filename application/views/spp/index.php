  <div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        <div class="pull-right">
          
        </div>
      </div>
      <div class="box-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Spp</th>
                <th>Jurusan</th>
                <th>Tahun Pendaftaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($spp as $s): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $s['id_spp'] ?></td>
                <td><?php echo $s['id_jurusan'] ?></td>
                <td><?php echo $s['tahun_pendaftaran'] ?></td>
                <td>
                  <a href="<?php echo base_url('kelas/ubah/' . $s['id_spp']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('kelas/hapus/' . $s['id_jurusan'] ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
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