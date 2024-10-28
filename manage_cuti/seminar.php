<br>
<center>
    <?php

    // Memanghil nip pegawai
    $ids = $_SESSION['id'];
    $pegawai = mysqli_query($db, "SELECT * FROM pegawai where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $pegawai1 = mysqli_fetch_assoc($pegawai);
    $nips = $pegawai1['nip'];
    $nama = $pegawai1['nama'];
    $instansi = $pegawai1['instansi'];

    // Mencari record seminar berdasarkan nip pegawai
    $jumlah_record = mysqli_query($db, "SELECT * FROM seminar where nip = $nips") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $jumlah  = mysqli_num_rows($jumlah_record);

    // Jika tidak ditemukan maka tampilkan form tambah Seminar
    if ($jumlah == 0) {
        include "manage_cuti/tambah.php";

        // Jika ditemukan
    } else {

        $jumlah_record1 = mysqli_query($db, "SELECT * FROM seminar where nip = $nips") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
        $data = mysqli_fetch_assoc($jumlah_record1);
        $idseminar = $data['idseminar'];
        $nip = $data['nip'];
        $judul = $data['judul'];
        $file = $data['file'];
        $tautan = $data['tautan'];
        $statussem = $data['statussem'];
        $jumlah1  = mysqli_num_rows($jumlah_record1);

        // Jika Belum disetujui
        if ($status == "Menunggu Persetujuan") {
            echo "<p>Seminar anda sudah terdaftar, Namun belum disetujui admin, 
            <p> Judul : <b> $data[judul] </b> 
            <p>Silahkan konfirmasi kepada admin untuk disetujui. <hr>";
            include "linkwa.php";


            // Jika sudah disetujui
        } else {
            echo "<p>Seminar anda yang berjudul : <b>$data[judul]</b> sudah terdaftar";
            echo "<p><a data-toggle='tooltip' data-placement='top' title='Edit' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=manage_cuti-detail&id=$data[idseminar]'> <i class='glyphicon glyphicon-eye-open'></i>&nbsp Lihat Detail Cuti</a>";
        }
    }
    ?>
    <br>

</center>
<br>