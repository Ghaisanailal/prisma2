<?php
include 'config/database.php';

$nip        = $_POST['nip'];
$id        = $_POST['id'];
$username        = $_POST['username'];
$nama       = $_POST['nama'];
$level       = $_POST['level'];
$password       = $_POST['password'];
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
        mysqli_query($db, "INSERT INTO user VALUES('$nip','$nip','$username','$nama','$level','$password','$jabatan','$bidang','$telp','$email','$photo')");
        header("location:?page=pegawai-tampil&alert=2");
    } else {
        header("location:?page=pegawai-tampil&alert=1");
    }
}
