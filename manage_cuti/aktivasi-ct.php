<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';
$idcuti      = $_POST['idcuti'];
$status      = $_POST['status'];
$ket            = $_POST['ket'];$rand = rand();

$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// jalankan query UPDATE berdasarkan NIS yang cutinya kita edit
$query  = "UPDATE cuti SET status = '$status', ket = '$ket'";
$query .= "WHERE idcuti = '$idcuti'";
$result = mysqli_query($db, $query);

// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>window.location='?page=cuti-tampil-admin&alert=3';</script>";
}

if (!in_array($ext, $ekstensi)) {
    header("location:?page=cuti-tampil&alert=1");
} else {
    if ($ukuran < 10044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], 'seminar/files/' . $rand . '_' . $filename);
        
        header("location:?page=cuti-tampil&alert=2");
    } else {
        header("location:?page=cuti-tampil&alert=1");
    }
}
