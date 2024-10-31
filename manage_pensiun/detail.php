<div class="row">
    <div class="col-md-12">
        <br>
        <?php



        if (isset($_GET['id'])) {
            $idseminar   = $_GET['id'];
            $query = mysqli_query($db, "SELECT seminar.*, user.nama, user.jabatan FROM seminar JOIN user ON user.nip = seminar.nip WHERE idseminar='$idseminar'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $idseminar        = $data['idseminar'];
                $nama             = $data['nama'];
                $nip              = $data['nip'];
                $file             = $data['file'];
                $status           = $data['status'];
                $ket              = $data['ket'];
                
                
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PENGUSULAN CUTI</b></li>
            <li class="list-group-item"><b>Id Pegawai : </b><?php echo $idseminar; ?></li>
            <li class="list-group-item"><b>Nama Pegawai : </b><?php echo $nama; ?></li>
            <li class="list-group-item"><b>File : </b><a href="seminar/files/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a></li>
            <li class="list-group-item"><b>Status : <?php echo $status; ?></b> (<?php echo $ket; ?>)</li>

        </ul>
        

        <div class="form-group">
            <a href="?page=<?php echo $kembali ?>" class="btn btn-default btn-reset">Kembali</a>
        </div>

    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->