<?php
include 'config/database.php';

$nip             = $_POST['nip'];
$file           = $_POST['file'];
$tanggal           = $_POST['tanggal'];
$status          = $_POST['status'];
$ket             = $_POST['ket'];

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=kp-tampil&alert=1");
} else {
    if ($ukuran < 10044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], 'seminar/files/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO kp VALUES('null','$nip','$xx','$tanggal','$status','$ket')");
        header("location:?page=kp-tampil&alert=2");
    } else {
        header("location:?page=kp-tampil&alert=1");
    }
}
