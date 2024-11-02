<?php
if (isset($_GET['id'])) {
    $idcuti   = $_GET['id'];
    $query = mysqli_query($db, "SELECT cuti.*, user.nama, user.jabatan FROM cuti JOIN user ON user.nip = cuti.nip WHERE idcuti='$idcuti'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $idcuti        = $data['idcuti'];
        $nama             = $data['nama'];
        $jabatan          = $data['jabatan'];
        $nip              = $data['nip'];
        $file             = $data['file'];
        $sk               = $data['sk'];
        $status           = $data['status'];
        $ket              = $data['ket'];
        
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=aktivasi-ct" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="idcuti" value="<?php echo $idcuti; ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama - Jabatan</label>
                <div class="col-sm-6">
                    <h5><?php echo $nama . " - " . $jabatan; ?></h5>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status Cuti</label>
                <div class="col-sm-3">
                    <select class="form-control" name="status" placeholder="Pilih statusus">
                        <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Tidak Disetujui"> Tidak Disetujui</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="ket" value="<?php echo $ket; ?>">
                </div>
            </div>
            
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dokumen Surat Keterangan</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="file" value="<?php echo $sk; ?>"required>
                        </div>
                    </div>
<br>
            <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="btn-group" role="group" aria-label="Basic example">
            <input type="submit" class="btn btn-primary m-1" name="update" value="Update">
            <a href="?page=kp-tampil" class="btn btn-outline-primary m-1">Kembali</a>
        </div>
    </div>
</div>
        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->