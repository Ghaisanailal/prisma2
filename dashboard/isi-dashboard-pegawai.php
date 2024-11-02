<?php
include 'config/database.php';

$ids = $_SESSION['id'];
$jumlah_record1 = mysqli_query($db, "SELECT user.id, pegawai.* FROM user JOIN pegawai ON pegawai.nip = user.nip where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$nips = $data['nip'];
$namas = $data['nama'];
$jabatans = $data['jabatan'];
$bidangs = $data['bidang'];
$statuss = $data['status'];

// dashboard pegawai
$jum_user_pegawai = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user where jabatan = '$statuss'"));
$jum_user_cuti = mysqli_num_rows(mysqli_query($db, "SELECT * FROM cuti where status = '$nips'"));
$jum_user_pensiun = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pensiun where status = '$nips'"));
$jum_user_kp = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kp where status = '$nips'"));

if ($bidangs == "Disetujui") {
    $jum = $jum_user_cuti;
    $label = "Laporan";
    $pegnil = $pegnil_laporan;
} else if ($bidangs == "Menunggu Persetujuan") {
    $jum = $jum_user_cuti;
    $label = "Aplikasi";
    $pegnil = $pegnil_aplikasi;
} else {
    $jum = $jum_user_cuti;
    $label = "Prakerin";
    $pegnil = $pegnil_prakerin;
}

$waktu = gmdate("H:i", time() + 7 * 3600);
$t = explode(":", $waktu);
$jam = $t[0];
$menit = $t[1];

if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Pagi";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Siang";
    }
} else if ($jam >= 15 and $jam < 18) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Sore";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Malam";
    }
} else {
    $ucapan = "Error";
}
