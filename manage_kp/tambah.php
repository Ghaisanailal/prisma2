<br>
<center>
    <p><label>Formulir Pendaftaran Seminar</label>
</center>
<div class=" row">
    <div class="col-md-12">
        <?php
        $ids = $_SESSION['id'];
        $jumlah_record1 = mysqli_query($db, "SELECT * FROM user where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
        $data = mysqli_fetch_assoc($jumlah_record1);
        $niss = $data['nis'];
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=seminar-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIS</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nis" value="<?php echo $niss; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Judul Seminar</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="judul" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">File Seminar</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="file" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tautan Aplikasi</label>
                        <div class="col-sm-3">
                            <input type="link" class="form-control" name="tautan" placeholder="ex: github.com/AhmadMauludin/PWEB12" required>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" name="statussem" value="Menunggu Persetujuan">
                    <input type="hidden" class="form-control" name="ket" value="">
                    <input type="hidden" class="form-control" name="pengujilap" value="">
                    <input type="hidden" class="form-control" name="pengujiapl" value="">
                    <input type="hidden" class="form-control" name="nilaiprakerin" value="">
                    <input type="hidden" class="form-control" name="nilailaporan" value="">
                    <input type="hidden" class="form-control" name="nilaiaplikasi" value="">

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