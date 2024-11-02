<?php
// Memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// Cek apakah key 'sk' ada di dalam POST
$idcuti = $_POST['idcuti'];
$status = $_POST['status'];
$sk = isset($_POST['sk']) ? $_POST['sk'] : ''; // Cek apakah ada 'sk'
$ket = $_POST['ket'];
$rand = rand();

// Mendapatkan file yang diupload
$ekstensi = array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Memeriksa ekstensi file
if (!in_array($ext, $ekstensi)) {
    die("Ekstensi file tidak diizinkan. Hanya PDF yang diperbolehkan.");
}

// Pastikan direktori tujuan ada
$uploadDir = 'cuti/files/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true); // Membuat direktori jika belum ada
}

// Memindahkan file ke direktori tujuan
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $rand . '_' . $filename)) {
    // Menyimpan nama file di database
    $filenameSk = $rand . '_' . $filename; // Menyimpan nama file yang sudah dipindah

    // Menjalankan query UPDATE berdasarkan idcuti
    $query = "UPDATE cuti SET status = '$status', ket = '$ket', sk = '$filenameSk' WHERE idcuti = '$idcuti'";
    $result = mysqli_query($db, $query);

    // Memeriksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) . " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=cuti-tampil&alert=3';</script>";
    }
} else {
    die("File gagal diupload.");
}
?>
