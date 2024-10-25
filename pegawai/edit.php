<?php
if (isset($_GET['id'])) {
    $nis   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $nis      = $data['nis'];
        $nama     = $data['nama'];
        $jabatan  = $data['jabatan'];
        $bidang   = $data['bidang'];
        $telp     = $data['telp'];
        $email    = $data['email'];
        $foto     = $data['foto'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=pegawai-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">NIS</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan</label>
                <div class="col-sm-2">
                    <select class="form-control" name="jabatan" placeholder="Pilih Jabatan" required>
                        <option value="<?php echo $jabatan; ?>"><?php echo $jabatan; ?></option>
                        <option value="Pembimbing">Pembimbing</option>
                        <option value="Penguji">Penguji</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Bidang</label>
                <div class="col-sm-2">
                    <select class="form-control" name="bidang" placeholder="Pilih Bidang" required>
                        <option value="<?php echo $bidang; ?>"><?php echo $bidang; ?></option>
                        <option value="Diskominfosanditik">Diskominfosanditik</option>
                        <option value="BPKAD">BPKAD</option>
                        <option value="Dinas Arsip">Dinas Arsip</option>
                        <option value="Kementerian Agama">Kementerian Agama</option>
                        <option value="Disparbudpora">Disparbudpora</option>
                        <option value="Disdukcapil">Disdukcapil</option>
                        <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                        <option value="Diskoperindag">Diskoperindag</option>
                        <option value="Laporan">Laporan</option>
                        <option value="Aplikasi">Aplikasi</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="telp" autocomplete="off" value="<?php echo $telp; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-2">
                    <input class="form-control" name="email" autocomplete="off" value="<?php echo $email; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-2">
                    <div class="text-center">
                        <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                    </div>
                    <br>
                    <input type="file" class="form-control" name="foto" value="<?php echo $foto; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=pegawai-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->