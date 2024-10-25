<br>
<?php

$ids = $_SESSION['id'];
$jabbid = mysqli_query($db, "SELECT user.id, pegawai.* FROM user JOIN pegawai ON pegawai.nis = user.nis where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$jb = mysqli_fetch_assoc($jabbid);
$niss = $jb['nis'];
$nama = $jb['nama'];
$jab = $jb['jabatan'];
$bid = $jb['bidang'];

if (isset($_GET['id'])) {
    $idseminar   = $_GET['id'];
    $query = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis WHERE idseminar='$idseminar'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $idseminar = $data['idseminar'];
        $nis       = $data['nis'];
        $judul     = $data['judul'];
        $statussem = $data['statussem'];
        $ket       = $data['ket'];
        $pengujilap    = $data['pengujilap'];
        $pengujiapl    = $data['pengujiapl'];
        $nilaiprakerin = $data['nilaiprakerin'];
        $nilailaporan  = $data['nilailaporan'];
        $nilaiaplikasi = $data['nilaiaplikasi'];
        $nama          = $data['nama'];
        $instansi      = $data['instansi'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=nilai-sem" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="idseminar" value="<?php echo $idseminar; ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama - Instansi :</label>
                <div class="col-sm-6">
                    <h5><?php echo $nama . " - " . $instansi; ?></h5>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Judul Seminar :</label>
                <div class="col-sm-6">
                    <h5><?php echo $judul; ?></h5>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status Seminar :</label>
                <div class="col-sm-6">
                    <h5><?php echo $statussem; ?></h5>
                </div>
            </div>

            <?php

            if ($jab == "Pembimbing" and $bid == $instansi) {
                $type1 = "";
            } else {
                $type1 = "readonly";
            }

            if ($jab == "Penguji" and $bid == "Laporan" and $niss == $pengujilap) {
                $type2 = "";
            } else {
                $type2 = "readonly";
            }

            if ($jab == "Penguji" and $bid == "Aplikasi" and $niss == $pengujiapl) {
                $type3 = "";
            } else {
                $type3 = "readonly";
            }

            ?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nilai Prakerin :</label>
                <div class="col-sm-1">
                    <input type="number" class="form-control" name="nilaiprakerin" value="<?php echo $nilaiprakerin; ?>" <?php echo $type1; ?>>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Nilai Laporan :</label>
                <div class="col-sm-1">
                    <input type="number" class="form-control" name="nilailaporan" value="<?php echo $nilailaporan; ?>" <?php echo $type2; ?>>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nilai Aplikasi :</label>
                <div class="col-sm-1">
                    <input type="number" class="form-control" name="nilaiaplikasi" value="<?php echo $nilaiaplikasi; ?>" <?php echo $type3; ?>>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=tampil-nilai" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->