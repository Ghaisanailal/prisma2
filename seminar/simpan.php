<?php
include 'config/database.php';

$nis             = $_POST['nis'];
$judul           = $_POST['judul'];
$tautan          = $_POST['tautan'];
$statussem       = $_POST['statussem'];
$ket             = $_POST['ket'];
$pengujilap      = $_POST['pengujilap'];
$pengujiapl      = $_POST['pengujiapl'];
$nilaiprakerin   = $_POST['nilaiprakerin'];
$nilailaporan    = $_POST['nilailaporan'];
$nilaiaplikasi   = $_POST['nilaiaplikasi'];

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=seminar&alert=1");
} else {
    if ($ukuran < 10044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], 'seminar/files/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO seminar VALUES('null','$nis','$judul','$xx','$tautan','$statussem','$ket','$pengujilap','$pengujiapl','$nilaiprakerin','$nilailaporan','$nilaiaplikasi')");
        header("location:?page=seminar&alert=2");
    } else {
        header("location:?page=seminar&alert=1");
    }
}
