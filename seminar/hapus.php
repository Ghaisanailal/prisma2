<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

    $idseminar = $_GET['id'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM seminar WHERE idseminar='$idseminar'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=seminar-tampil&alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=seminar-tampil&alert=1');
    }
}
