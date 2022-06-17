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
                  <th>Id Siswa</th>
                  <th>Id Kelas</th>
                  <th>Id Jurusan</th>
                  <th>Nis</th>
                  <th>Nama Siswa</th>
                  <th>Tahun Pendafataran</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($siswa as $sw) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $sw['id_siswa'] ?></td>
                    <td><?php echo $sw['id_kelas'] ?></td>
                    <td><?php echo $sw['id_jurusan'] ?></td>
                    <td><?php echo $sw['nis'] ?></td>
                    <td><?php echo $sw['nama_siswa'] ?></td>
                    <td><?php echo $sw['tahun_pendaftaran'] ?></td>
                    <td>
                      <a href="<?php echo base_url('siswa/ubah/' . $sw['id_siswa']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                      <a href="<?php echo base_url('siswa/hapus/' . $sw['id_siswa']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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