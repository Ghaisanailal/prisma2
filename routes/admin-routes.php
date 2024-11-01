<?php
// file admin-routes.php ini berfungsi sebagai perutean tampilan yang diminta oleh pengguna. nantinya file ini dipanggil ke dalam body file index.php yang berfungsi sebagai wadah/frame bagi konten yang diminta oleh pengguna.


if (empty($_GET["page"])) {
    include "dashboard/dashboard-admin.php"; // Tampilan default jika tidak ada permintaan halaman tertentu pada index., maka pada index akan ditampilkan halaman dashboard-admin.php yang ada pada folder dashboard.

    // Manage Data
    }elseif ($_GET['page'] == 'pegawai-tampil') {
        include "pegawai/tampil.php";
    } elseif ($_GET['page'] == 'pegawai-tambah') {
        include "pegawai/tambah.php";
    } elseif ($_GET['page'] == 'pegawai-simpan') {
        include "pegawai/simpan.php";
    } elseif ($_GET['page'] == 'pegawai-detail') {
        include "pegawai/detail.php";
    } elseif ($_GET['page'] == 'pegawai-edit') {
        include "pegawai/edit.php";
    } elseif ($_GET['page'] == 'pegawai-update') {
        include "pegawai/update.php";
    } elseif ($_GET['page'] == 'pegawai-hapus') {
        include "pegawai/hapus.php";
    } elseif ($_GET['page'] == 'pegawai-print-detail') {
        include "pegawai/print-detail.php";
    } elseif ($_GET['page'] == 'pegawai-kirim') {
        include "pegawai/kirim.php";

    // manage cuti

} elseif ($_GET['page'] == 'cuti-tampil-admin') {
    include "manage_cuti/tampil-admin.php";
} elseif ($_GET['page'] == 'cuti-detail') {
    include "manage_cuti/detail.php";
} elseif ($_GET['page'] == 'cuti-print-detail') {
    include "manage_cuti/print-detail.php";
} elseif ($_GET['page'] == 'aktivasi-cuti') {
    include "manage_cuti/aktivasi-cuti.php";
} elseif ($_GET['page'] == 'aktivasi-ct') {
    include "manage_cuti/aktivasi-ct.php";
} elseif ($_GET['page'] == 'cuti-hapus') {
    include "manage_cuti/hapus.php";
} elseif ($_GET['page'] == 'tampil-sk') {
    include "manage_cuti/tampil-sk.php";
}

// manage pensiun

 elseif ($_GET['page'] == 'pensiun-tampil') {
    include "manage_pensiun/tampil-admin.php";
} elseif ($_GET['page'] == 'pensiun-detail') {
    include "manage_pensiun/detail.php";
} elseif ($_GET['page'] == 'pensiun-print-detail') {
    include "manage_pensiun/print-detail.php";
} elseif ($_GET['page'] == 'aktivasi-pensiun') {
    include "manage_pensiun/aktivasi-pensiun.php";
} elseif ($_GET['page'] == 'aktivasi-sem') {
    include "manage_pensiun/aktivasi.php";
} elseif ($_GET['page'] == 'pensiun-hapus') {
    include "manage_pensiun/hapus.php";
} elseif ($_GET['page'] == 'tampil-sk') {
    include "manage_pensiun/tampil-sk.php";
}


// manage kenaikan pangkat

elseif ($_GET['page'] == 'kp-tampil') {
    include "manage_kp/tampil-admin.php";
} elseif ($_GET['page'] == 'kp-detail') {
    include "manage_kp/detail.php";
} elseif ($_GET['page'] == 'kp-print-detail') {
    include "manage_kp/print-detail.php";
} elseif ($_GET['page'] == 'aktivasi-kp') {
    include "manage_kp/aktivasi-kp.php";
} elseif ($_GET['page'] == 'aktivasi-sem') {
    include "manage_kp/aktivasi.php";
} elseif ($_GET['page'] == 'kp-hapus') {
    include "manage_kp/hapus.php";
} elseif ($_GET['page'] == 'tampil-sk') {
    include "manage_kp/tampil-sk.php";
}

// Account
elseif ($_GET['page'] == 'users-edit') {
    include "users/edit.php";
}
   

    // Seminar
  elseif ($_GET['page'] == 'seminar-tampil') {
    include "seminar/tampil.php";
} elseif ($_GET['page'] == 'seminar-detail') {
    include "manage_cuti/detail.php";
} elseif ($_GET['page'] == 'seminar-print-detail') {
    include "seminar/print-detail.php";
} elseif ($_GET['page'] == 'aktivasi-seminar') {
    include "manage_cuti/aktivasi-cuti.php";
} elseif ($_GET['page'] == 'aktivasi-ct') {
    include "manage_cuti/aktivasi-ct.php";
} elseif ($_GET['page'] == 'seminar-hapus') {
    include "seminar/hapus.php";
} elseif ($_GET['page'] == 'tampil-nilai') {
    include "seminar/tampil-nilai.php";
}

