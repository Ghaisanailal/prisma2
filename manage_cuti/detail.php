<div class="row">
    <div class="col-md-12">
        <br>
        <?php



        if (isset($_GET['id'])) {
            $idcuti   = $_GET['id'];
            $query = mysqli_query($db, "SELECT cuti.*, user.nama, user.jabatan FROM cuti JOIN user ON user.nip = cuti.nip WHERE idcuti='$idcuti'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $idcuti           = $data['idcuti'];
                $nama             = $data['nama'];
                $nip              = $data['nip'];
                $file             = $data['file'];
                $sk               = $data['sk'];
                $tanggal          = $data['tanggal'];
                $status           = $data['status'];
                $ket              = $data['ket'];

                
                
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PENGUSULAN CUTI</b></li>
            <li class="list-group-item"><b>Id Pegawai : </b><?php echo $idcuti; ?></li>
            <li class="list-group-item"><b>Nama Pegawai : </b><?php echo $nama; ?></li>
            <li class="list-group-item"><b>File : </b><a href="cuti/files/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a></li>
            <li class="list-group-item"><b>SK : </b><a href="cuti/files/<?php echo $sk; ?>" target="_blank"><?php echo $sk; ?></a></li>
            <li class="list-group-item"><b>Tanggal : </b><?php echo $tanggal; ?></li>
            <li class="list-group-item"><b>Status : <?php echo $status; ?></b> (<?php echo $ket; ?>)</li>

        </ul>
        

        <br>
        <div class="form-group">
            <a href="?page=cuti-tampil" class="btn btn-primary m-1">Kembali</a>
        </div>


    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->