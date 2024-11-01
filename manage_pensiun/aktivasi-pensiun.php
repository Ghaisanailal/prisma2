<?php
if (isset($_GET['id'])) {
    $idseminar   = $_GET['id'];
    $query = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis WHERE idseminar='$idseminar'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $idseminar = $data['idseminar'];
        $nis       = $data['nis'];
        $judul     = $data['judul'];
        $statussem    = $data['statussem'];
        $ket       = $data['ket'];
        $pengujilap    = $data['pengujilap'];
        $pengujiapl    = $data['pengujiapl'];
        $nilaiprakerin = $data['nilaiprakerin'];
        $nilailaporan  = $data['nilailaporan'];
        $nilaiaplikasi = $data['nilaiaplikasi'];
        $nama = $data['nama'];
        $instansi = $data['instansi'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=aktivasi-sem" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="idseminar" value="<?php echo $idseminar; ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama - Instansi</label>
                <div class="col-sm-6">
                    <h5><?php echo $nama . " - " . $instansi; ?></h5>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Judul Seminar</label>
                <div class="col-sm-6">
                    <h5><?php echo $judul; ?></h5>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status Seminar</label>
                <div class="col-sm-3">
                    <select class="form-control" name="statussem" placeholder="Pilih statusus">
                        <option value="<?php echo $statussem; ?>"><?php echo $statussem; ?></option>
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
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
                <label class="col-sm-2 control-label">Penguji Laporan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="pengujilap" placeholder="Pilih" required>
                        <option value="<?php echo $pengujilap; ?>">Penguji Laporan - <?php echo $pengujilap; ?></option>

                        <?php
                        $query = "SELECT * FROM pegawai where bidang = 'Laporan' ";
                        $result = mysqli_query($db, $query);
                        foreach ($result as $data) { ?>
                            <option value=" <?php echo $data["nis"]; ?> "> <?php echo $data["nis"] . " - " . $data["nama"]; ?> </option>
                        <?php } ?>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Penguji Aplikasi</label>
                <div class="col-sm-3">
                    <select class="form-control" name="pengujiapl" placeholder="Pilih" required>
                        <option value="<?php echo $pengujiapl; ?>">Penguji Aplikasi - <?php echo $pengujiapl; ?></option>

                        <?php
                        $query = "SELECT * FROM pegawai where bidang = 'Aplikasi' ";
                        $result = mysqli_query($db, $query);
                        foreach ($result as $data) { ?>
                            <option value=" <?php echo $data["nis"]; ?> "> <?php echo $data["nis"] . " - " . $data["nama"]; ?> </option>
                        <?php } ?>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=seminar-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->