<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h4 class="box-title">Transaksi Pembayaran SPP</h4>
                <div class="pull-right">
                    <a href="<?php echo base_url('kelas') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="<?php echo base_url('siswa/aksi_ubah/' . $siswa['id_siswa']) ?>" method="post">
                            <div class="form-group">
                                <label for="nama_kelas">Nis</label>
                                <input type="text" class="form-control" name="nis" placeholder="Nis" value="<?php echo $siswa['nis'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" value="<?php echo $siswa['nama_siswa'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Tahun Pendaftaran</label>
                                <input type="text" class="form-control" name="tahun_pendaftaran" placeholder="Tahun Pendaftaran" value="<?php echo $siswa['tahun_pendaftaran'] ?>">
                            </div>
                            </select>
                    </div>

                    <div class=" form-group">
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