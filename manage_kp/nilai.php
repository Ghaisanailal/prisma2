<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idseminar      = $_POST['idseminar'];
$nilaiprakerin  = $_POST['nilaiprakerin'];
$nilailaporan   = $_POST['nilailaporan'];
$nilaiaplikasi  = $_POST['nilaiaplikasi'];

// jalankan query UPDATE berdasarkan NIS yang seminarnya kita edit
$query  = "UPDATE seminar SET nilaiprakerin = '$nilaiprakerin', nilailaporan = '$nilailaporan', nilaiaplikasi = '$nilaiaplikasi'";
$query .= "WHERE idseminar = '$idseminar'";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=tampil-nilai&alert=3';</script>";
}
