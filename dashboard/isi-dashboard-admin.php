<?php
include 'config/database.php';

$ids = $_SESSION['id'];
$levels = $_SESSION['level'];
$jumlah_record1 = mysqli_query($db, "SELECT user.id, pegawai.* FROM user JOIN pegawai ON pegawai.nis = user.nis where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$niss = $data['nis'];
$namas = $data['nama'];
$jabatans = $data['jabatan'];
$bidangs = $data['bidang'];

// jumlah data
$jum_user = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user"));
$jum_user_pegawai = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user where level = 'Pegawai'"));
$jum_user_users = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user where level = 'User'"));

$jum_users = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users"));
$jum_users_aktif = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users where stat = 'Aktif'"));
$jum_users_belum_aktif = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users where stat != 'Aktif'"));

$jum_pegawai = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pegawai"));
$jum_pembimbing = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pegawai where jabatan = 'Pembimbing'"));
$jum_penguji = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pegawai where jabatan = 'Penguji'"));

$jum_seminar = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar"));
$jum_seminar_lulus = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where statussem = 'Lulus'"));
$jum_seminar_disetujui = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where statussem = 'Disetujui'"));
$jum_seminar_belum = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where statussem = 'Menunggu Persetujuan'"));

$nilai_prakerin = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where nilaiprakerin != '0'"));
$nilai_laporan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where nilailaporan != '0'"));
$nilai_aplikasi = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where nilaiaplikasi != '0'"));


// alert dashboard admin
if ($jum_users_belum_aktif != 0) {
    echo "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Perhatian!</strong> $jum_users_belum_aktif users (siswa) baru belum diaktifkan.</div>";
} else {
    "";
}

if ($jum_seminar_belum != 0) {
    echo "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Perhatian!</strong> $jum_seminar_belum pendaftaran seminar belum disetujui.</div>";
} else {
    "";
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
