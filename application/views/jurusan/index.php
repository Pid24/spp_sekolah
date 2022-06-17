<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        <div class="pull-right">
          <a href="<?php echo base_url('jurusan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
      <div class="box-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($jurusan as $j): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $j['nama_jurusan'] ?></td>
                <td>
                  <a href="<?php echo base_url('jurusan/ubah/' . $j['id_jurusan']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('jurusan/hapus/' . $j['id_jurusan'] ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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