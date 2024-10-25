<br>
<center>
    <?php

    // Memanghil NIS Users
    $ids = $_SESSION['id'];
    $users = mysqli_query($db, "SELECT * FROM users where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $users1 = mysqli_fetch_assoc($users);
    $niss = $users1['nis'];
    $nama = $users1['nama'];
    $instansi = $users1['instansi'];

    // Mencari record seminar berdasarkan NIS Users
    $jumlah_record = mysqli_query($db, "SELECT * FROM seminar where nis = $niss") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $jumlah  = mysqli_num_rows($jumlah_record);

    // Jika tidak ditemukan maka tampilkan form tambah Seminar
    if ($jumlah == 0) {
        include "seminar/tambah.php";

        // Jika ditemukan
    } else {

        $jumlah_record1 = mysqli_query($db, "SELECT * FROM seminar where nis = $niss") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
        $data = mysqli_fetch_assoc($jumlah_record1);
        $idseminar = $data['idseminar'];
        $nis = $data['nis'];
        $judul = $data['judul'];
        $file = $data['file'];
        $tautan = $data['tautan'];
        $statussem = $data['statussem'];
        $jumlah1  = mysqli_num_rows($jumlah_record1);

        // Jika Belum disetujui
        if ($statussem == "Menunggu Persetujuan") {
            echo "<p>Seminar anda sudah terdaftar, Namun belum disetujui admin, 
            <p> Judul : <b> $data[judul] </b> 
            <p>Silahkan konfirmasi kepada admin untuk disetujui. <hr>";
            include "linkwa.php";


            // Jika sudah disetujui
        } else {
            echo "<p>Seminar anda yang berjudul : <b>$data[judul]</b> sudah terdaftar";
            echo "<p><a data-toggle='tooltip' data-placement='top' title='Edit' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=seminar-detail&id=$data[idseminar]'> <i class='glyphicon glyphicon-eye-open'></i>&nbsp Lihat Detail Seminar</a>";
        }
    }
    ?>
    <br>

</center>
<br>