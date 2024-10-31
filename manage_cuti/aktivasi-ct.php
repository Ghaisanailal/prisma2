<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idseminar      = $_POST['idseminar'];
$status      = $_POST['status'];
$ket            = $_POST['ket'];


// jalankan query UPDATE berdasarkan NIS yang seminarnya kita edit
$query  = "UPDATE seminar SET status = '$status', ket = '$ket'";
$query .= "WHERE idseminar = '$idseminar'";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=cuti-tampil&alert=3';</script>";
}
