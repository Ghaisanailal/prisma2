<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

    $idpensiun = $_GET['id'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM pensiun WHERE idpensiun='$idpensiun'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=pensiun-tampil&alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=pensiun-tampil&alert=1');
    }
}
