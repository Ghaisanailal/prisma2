<?php
if (isset($_GET['id'])) {
    $nip   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM users WHERE nip='$nip'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $nip      = $data['nip'];
        $nama     = $data['nama'];

        $telp     = $data['telp'];

        $stat    = $data['stat'];
        $foto     = $data['foto'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=users-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">NIP</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-5">
                    <select class="form-control" name="stat" placeholder="Pilih status">
                        <option value="<?php echo $stat; ?>"><?php echo $stat; ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telp" autocomplete="off" value="<?php echo $telp; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-5">
                    <div class="text-center">
                        <?php echo "<img src='users/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                    </div>
                    <br>
                    <input type="file" class="form-control" name="foto" value="<?php echo $foto; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                    <a href="?page" class="btn btn-default btn-reset">Kembali</a>
                </div>
            </div>
        </form>
        

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->