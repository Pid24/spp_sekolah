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
                <th>Id Petugas</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($petugas as $pt): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pt['id_petugas'] ?></td>
                <td><?php echo $pt['nama_petugas'] ?></td>
                <td><?php echo $pt['username'] ?></td>
                <td><?php echo $pt['password'] ?></td>
                <td><?php echo $pt['level'] ?></td>
                <td>
                  <a href="<?php echo base_url('kelas/ubah/' . $pt['id_petugas']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('kelas/hapus/' . $pt['nama_petugas'] ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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