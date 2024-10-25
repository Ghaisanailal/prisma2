<?php
include 'config/database.php';

$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jabatan    = $_POST['jabatan'];
$bidang     = $_POST['bidang'];
$telp       = $_POST['telp'];
$email      = $_POST['email'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=pegawai-tampil&alert=1");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'pegawai/gambar/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO pegawai VALUES('$nis','$nama','$jabatan','$bidang','$telp','$email','$xx')");
        header("location:?page=pegawai-tampil&alert=2");
    } else {
        header("location:?page=pegawai-tampil&alert=1");
    }
}
