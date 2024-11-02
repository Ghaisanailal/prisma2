<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idkp      = $_POST['idkp'];
$status      = $_POST['status'];
$ket            = $_POST['ket'];


// jalankan query UPDATE berdasarkan NIS yang kpnya kita edit
$query  = "UPDATE kp SET status = '$status', ket = '$ket'";
$query .= "WHERE idkp = '$idkp'";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=kp-tampil-admin&alert=3';</script>";
}
