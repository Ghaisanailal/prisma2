<style>
    .custom-bg {
        background-color: #4e83f3; /* Ganti dengan warna yang Anda inginkan */
        color: white; /* Ganti warna teks jika perlu */
    }
</style>
<br>

<?php
include "isi-dashboard-pegawai.php";
?>

<h4><?php echo $ucapan . ", " . $nama ?></h4>
<hr>
<div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS CUTI</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_cuti_disetujui; ?></b> sudah disetujui.
            </li>

            <li class="list-group-item">
                <b>Tidak Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_cuti_belum; ?></b> tidak disetujui.
            </li>
        </div>
    </div>

    <div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS PENSIUN</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_pensiun_disetujui; ?></b> sudah disetujui.
            </li>

            <li class="list-group-item">
                <b>Tidak Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_pensiun_belum; ?></b> tidak disetujui.
            </li>
        </div>
    </div>
    
    <div class="row">
  <div class="col-md-10">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>STATUS KENAIKAN PANGKAT</b></li>
            <li class="list-group-item">
                <b>Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_kp_disetujui; ?></b>
            </li>

            <li class="list-group-item">
                <b>Tidak Disetujui</b> <?php echo $nama .","; ?> <b><?php echo $jum_kp_belum; ?></b>
            </li>
        </div>
    </div>
</div>