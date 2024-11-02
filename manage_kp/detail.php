<div class="row">
    <div class="col-md-12">
        <br>
        <?php



        if (isset($_GET['id'])) {
            $idkp   = $_GET['id'];
            $query = mysqli_query($db, "SELECT kp.*, user.nama, user.jabatan FROM kp JOIN user ON user.nip = kp.nip WHERE idkp='$idkp'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $idkp        = $data['idkp'];
                $nama             = $data['nama'];
                $nip              = $data['nip'];
                $file             = $data['file'];
                $status           = $data['status'];
                $ket              = $data['ket'];
                
                
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PENGAJUAN kp</b></li>
            <li class="list-group-item"><b>Id Pegawai : </b><?php echo $idkp; ?></li>
            <li class="list-group-item"><b>Nama Pegawai : </b><?php echo $nama; ?></li>
            <li class="list-group-item"><b>File : </b><a href="kp/files/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a></li>
            <li class="list-group-item"><b>Status : <?php echo $status; ?></b> (<?php echo $ket; ?>)</li>

        </ul>
        

        <br>
        <div class="form-group">
            <a href="?page=kp-tampil" class="btn btn-primary m-1">Kembali</a>
        </div>


    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->