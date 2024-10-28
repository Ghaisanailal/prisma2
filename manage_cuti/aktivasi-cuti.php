<?php
if (isset($_GET['id'])) {
    $idseminar   = $_GET['id'];
    $query = mysqli_query($db, "SELECT seminar.*, pegawai.nama, pegawai.jabatan FROM seminar JOIN pegawai ON pegawai.nip = seminar.nip WHERE idseminar='$idseminar'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $idseminar        = $data['idseminar'];
        $nama             = $data['nama'];
        $jabatan          = $data['jabatan'];
        $nip              = $data['nip'];
        $tautan           = $data['tautan'];
        $file             = $data['file'];
        $status           = $data['status'];
        $ket              = $data['ket'];
        
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=manage_data-tampil" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="idseminar" value="<?php echo $idseminar; ?>">

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
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=manage_cuti-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->