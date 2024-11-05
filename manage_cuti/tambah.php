<br>
<center>
    <p><label>Formulir Pengusulan Cuti</label>
</center>
<div class=" row">
    <div class="col-md-12">
        <?php
        $ids = $_SESSION['id'];

        
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=cuti-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nip" value="<?php echo $ids; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal" value="" required>
    </div>
</div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dokumen Persyaratan Cuti</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" name="file" value="<?php echo $file; ?>" required>
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
                <a href="index.php" class="btn btn-outline-primary m-1">Batal</a>
            </div>
        </div>
        </form>
    </div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->