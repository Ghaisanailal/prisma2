<br>
<center>
    <p><label>Formulir Pengusulan Pensiun</label>
</center>
<div class=" row">
    <div class="col-md-12">
        <?php
        $ids = $_SESSION['id'];
        $jumlah_record1 = mysqli_query($db, "SELECT * FROM user where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
        $data = mysqli_fetch_assoc($jumlah_record1);
        $nips = $data['nip'];
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=pensiun-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nip" value="<?php echo $nips; ?>" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dokumen Persyaratan pensiun</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="file" required>
                        </div>
                    </div>

                   
                    </div>

                    <input type="hidden" class="form-control" name="status" value="Menunggu Persetujuan">
                    <input type="hidden" class="form-control" name="ket" value="">
                   
                    
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