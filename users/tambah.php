<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Silahkan Lengkapi Data Diri Anda
                <?php
                $ids = $_SESSION['id'];
                $jumlah_record1 = mysqli_query($db, "SELECT * FROM user where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                $data = mysqli_fetch_assoc($jumlah_record1);
                $niss = $data['nis'];
                ?>
            </h4>
        </div> <!-- /.page-header -->

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=users-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIS</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nis" value="<?php echo $niss; ?>" autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Id Login</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="id" value="<?php echo $ids; ?>" autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nama" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="alamat" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Instansi</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="instansi" placeholder="Pilih Instansi" required>
                                <option value="">Pilih Instansi</option>
                                <option value="Diskominfosanditik">Diskominfosanditik</option>
                                <option value="BPKAD">BPKAD</option>
                                <option value="Dinas Arsip">Dinas Arsip</option>
                                <option value="Kementerian Agama">Kementerian Agama</option>
                                <option value="Disparbudpora">Disparbudpora</option>
                                <option value="Disdukcapil">Disdukcapil</option>
                                <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                                <option value="Diskoperindag">Diskoperindag</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Telp</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="telp" autocomplete="off" required>

                        </div>
                    </div>


                    <input type="hidden" class="form-control" name="stat" autocomplete="off" value="Belum Aktif">


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="foto" autocomplete="off" required>
                        </div>
                    </div>

                    <hr />
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form>
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
            </div>
        </div>
        </form>
    </div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->