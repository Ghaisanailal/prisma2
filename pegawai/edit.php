<?php
if (isset($_GET['id'])) {
    $nip   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nip='$nip'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $nip      = $data['nip'];
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
                <label class="col-sm-2 control-label">Nip</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan</label>
                <div class="col-sm-5">
                    <select class="form-control" name="jabatan" placeholder="Pilih Jabatan" required>
                        <option value="<?php echo $jabatan; ?>"><?php echo $jabatan; ?></option>
                        <option value="Pembimbing">Pembimbing</option>
                        <option value="Penguji">Penguji</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Bidang</label>
                <div class="col-sm-5">
                    <select class="form-control" name="bidang" placeholder="Pilih Bidang" required>
                        <option value="<?php echo $bidang; ?>"><?php echo $bidang; ?></option>
                        <option value="Kepala Kantor">Kepala Kantor</option>
                        <option value="KA SUBAB TU">KA SUBAB TU</option>
                        <option value="KEUANGAN">KEUANGAN</option>
                        <option value="UP">UP</option>
                        <option value="PENMAD">PENMAD</option>
                        <option value="PD_PONTREN">PD_PONTREN</option>
                        <option value="PAIS">PAIS</option>
                        <option value="PHU">PHU</option>
                        <option value="BIMAS ISLAM">BIMAS ISLAM</option>
                        <option value="ZAKAT & WAKAF">ZAKAT & WAKAF</option>
                        
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telp" autocomplete="off" value="<?php echo $telp; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                    <input class="form-control" name="email" autocomplete="off" value="<?php echo $email; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-5">
                    <div class="text-center">
                        <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                    </div>
                    <br>
                    <input type="file" class="form-control" name="foto" value="<?php echo $foto; ?>">
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                    <a href="?page=pegawai-tampil" class="btn btn-outline-primary m-1">Kembali</a>
                </div>
            </div>
        </form>
        

        
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->