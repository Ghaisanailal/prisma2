<br>

<?php
include "isi-dashboard-admin.php";
?>

<h4><?php echo $ucapan . ", " . $nama ?></h4>
<hr>
<div class="row">

    <div class="col-md-2">
        <div class="list-group">

            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_user; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>ACCOUNT</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_user_pegawai; ?></span>Pegawai</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_user_admin; ?></span>Admin</li>
        </div>
    </div>


    <div class="col-md-4">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_cuti; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>CUTI</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_cuti_disetujui; ?></span>Disetujui</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_cuti_belum; ?></span>Belum Disetujui</li>
        </div>
    </div>

    
        </div>
    </div>
</div>