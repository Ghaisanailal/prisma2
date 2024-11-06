<style>
    .custom-bg {
        background-color: #4e83f3; /* Ganti dengan warna yang Anda inginkan */
        color: white; /* Ganti warna teks jika perlu */
    }
</style>
<br>

<?php
include "isi-dashboard-pegawai.php";
     /* Pagination */
                            $batas = 10;
                            $idu = $_SESSION['id'];
?>
<div class="row">
<img src="assets/images/welcome11.png" width="180" alt="">
</div>

<h4><?php echo $ucapan . ", " . $nama ?></h4>
<hr>
<div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS CUTI</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $idu. "," . $nama .","; ?> <b><?php echo $jum_cuti_disetujui; ?></b> sudah disetujui.
            </li>
        </div>
    </div>
<br>
    <div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS PENSIUN</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $idu. "," . $nama .","; ?> <b><?php echo $jum_pensiun_disetujui; ?></b> sudah disetujui.
            </li>
        </div>
    </div>
    <br>
    <div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS KENAIKAN PANGKAT</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $idu. "," . $nama .","; ?> <b> <b><?php echo $jum_kp_disetujui; ?></b>sudah disetujui.
            </li>
        </div>
    </div>
</div>