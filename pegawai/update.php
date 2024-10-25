<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jabatan    = $_POST['jabatan'];
$bidang     = $_POST['bidang'];
$telp       = $_POST['telp'];
$email      = $_POST['email'];
$foto       = $_FILES['foto']['name'];

//cek dulu jika merubah foto pegawai jalankan coding ini
if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'pdf'); //ekstensi file foto yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_foto_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'pegawai/gambar/' . $nama_foto_baru); //memindah file foto ke folder foto

        // jalankan query UPDATE berdasarkan NIS yang pegawainya kita edit
        $query  = "UPDATE pegawai SET nama = '$nama', jabatan = '$jabatan', bidang = '$bidang', telp = '$telp', email = '$email', foto = '$nama_foto_baru'";
        $query .= "WHERE nis = '$nis'";
        $result = mysqli_query($db, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($db) .
                " - " . mysqli_error($db));
        } else {
            echo "<script>window.location='?page=pegawai-tampil&alert=3';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>window.location='?page=pegawai-tampil&alert=5';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan NIS yang pegawainya kita edit
    $query  = "UPDATE pegawai SET nama = '$nama', jabatan = '$jabatan', bidang = '$bidang', telp = '$telp', email = '$email'";
    $query .= "WHERE nis = '$nis'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=pegawai-tampil&alert=3';</script>";
    }
}
