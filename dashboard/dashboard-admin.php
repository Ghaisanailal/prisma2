<style>

    .custom-bg {
        background-color: #bacdf5; /* Ganti dengan warna yang Anda inginkan */
        color: white; /* Ganti warna teks jika perlu */
    }
    .custom-badge {
        background-color: #bacdf5; /* Ganti dengan warna yang Anda inginkan */
        color: white; /* Ganti warna teks jika perlu */
    }
</style>
<br>

<?php
include "isi-dashboard-admin.php";
?>




<h4><?php echo $ucapan . ", " . $nama ?></h4>
<hr>
 <div class="row">

    <div class="col-md-2">
        <div class="list-group bg-primary rounded-3 fw-semibold">

            <li class="list-group-item custom-bg text-center">
                <h1><b><?php echo $jum_user; ?></b></h1>
            </li>
            <li class="list-group-item bg-light text-center"><b>ACCOUNT</b></li>
            <li class="list-group-item"> <span class="badge custom-badge rounded-3 fw-semibold"><?php echo $jum_user_pegawai; ?></span>  Pegawai</li>
            <li class="list-group-item"> <span class="badge custom-badge rounded-3 fw-semibold"><?php echo $jum_user_admin; ?></span>  Admin</li>
        </div>
    </div>

    <div class="col-md-3">
        <div class="list-group">
            <li class="list-group-item custom-bg text-center">
                <h1><b><?php echo $jum_cuti; ?></b></h1>
            </li>
            <li class="list-group-item bg-light text-center"><b>CUTI</b></li>
            <li class="list-group-item"> <span class="badge custom-badge rounded-3 fw-semibold"><?php echo $jum_cuti_disetujui; ?></span>    Disetujui</li>
            <li class="list-group-item"> <span class="badge custom-badge rounded-3 fw-semibold"><?php echo $jum_cuti_belum; ?></span>   Belum Disetujui</li>
        </div>
    </div>

</div>