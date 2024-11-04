<?php
include 'config/database.php';

$nip      = $_POST['nip'];
$tanggal  = $_POST['tanggal'];
$status   = $_POST['status'];
$ket      = $_POST['ket'];

$rand = rand();
$ekstensi = array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Cek ekstensi file
if (!in_array($ext, $ekstensi)) {
    header("location:?page=cuti-tampil&alert=1");
    exit;
} else {
    // Cek ukuran file
    if ($ukuran < 10044070) {
        $xx = $rand . '_' . $filename;

        // Pindahkan file yang diupload
        if (move_uploaded_file($_FILES['file']['tmp_name'], 'cuti/files/' . $xx)) {
            // Persiapkan dan jalankan pernyataan SQL
            $sql = "INSERT INTO cuti (nip, file, tanggal, status, ket) VALUES (?, ?, ?, ?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("sssss", $nip, $xx, $tanggal, $status, $ket);
            
            if ($stmt->execute()) {
                header("location:?page=cuti-tampil&alert=2");
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        header("location:?page=cuti-tampil&alert=1");
    }
}
