<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idcuti      = $_POST['idcuti'];
$status      = $_POST['status'];
$ket            = $_POST['ket'];


// jalankan query UPDATE berdasarkan NIS yang cutinya kita edit
$query  = "UPDATE cuti SET status = '$status', ket = '$ket'";
$query .= "WHERE idcuti = '$idcuti'";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=cuti-tampil&alert=3';</script>";
}
