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
                        <form action="<?php echo base_url('kelas/aksi_tambah') ?>" method="post">
                            <div class="form-group">
                                <label for="nama_kelas">Nama kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" placeholder="Nama kelas">
                            </div>
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <select name="id_jurusan" class="form-control">
                                    <?php foreach ($jurusan as $j) : ?>
                                        <option value="<?php echo $j['id_jurusan'] ?>"><?php echo $j['nama_jurusan'] ?></option>
                                    <?php endforeach ?>
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