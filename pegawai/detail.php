<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $nip   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM user WHERE nip='$nip'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $nip        = $data['nip'];
                $nama       = $data['nama'];
                $jabatan    = $data['jabatan'];
                $bidang     = $data['bidang'];
                $telp       = $data['telp'];
                $email      = $data['email'];
                $foto       = $data['foto'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PEGAWAI</b></li>
            <li class="list-group-item">Nip : <b><?php echo $nip; ?></b></li>
            <li class="list-group-item">Nama : <b><?php echo $nama; ?></b></li>
            <li class="list-group-item">Jabatan : <b><?php echo $jabatan; ?></b></li>
            <li class="list-group-item">Bidang : <b><?php echo $bidang; ?></b></li>
            <li class="list-group-item">No. Telp : <b><?php echo $telp; ?></b></li>
            <li class="list-group-item">email : <b><?php echo $email; ?></b></li>
            <li class="list-group-item">
                <div class="text-center">
                    <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='Cinque Terre'>"; ?>
                </div>
            </li>
        </ul>
        <br>
        <div class="form-group">
            <a href="?page=pegawai-tampil" class="btn btn-primary m-1">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->