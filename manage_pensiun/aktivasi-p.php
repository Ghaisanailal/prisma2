<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idpensiun      = $_POST['idpensiun'];
$status      = $_POST['status'];
$ket            = $_POST['ket'];


// jalankan query UPDATE berdasarkan NIS yang pensiunnya kita edit
$query  = "UPDATE pensiun SET status = '$status', ket = '$ket'";
$query .= "WHERE idpensiun = '$idpensiun'";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=pensiun-tampil-admin&alert=3';</script>";
}
