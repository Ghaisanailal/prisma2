<?php

$ids = $_SESSION['id'];
$jumlah_record1 = mysqli_query($db, "SELECT user.id, pegawai.* FROM user JOIN pegawai ON pegawai.nis = user.nis where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$niss = $data['nis'];

if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <div class="pull-right btn-tambah">
                <form class="form-inline" method="POST" action="?page=seminar-tampil">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </div>
                            <input type="text" class="form-control" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Nilai berhasil disimpan.
          </div>";
        } elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Nilai berhasil diubah.
          </div>";
        } elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Nilai berhasil dihapus.
          </div>";
        } elseif ($_GET['alert'] == 5) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Hampura mang euy!</strong> Kedahna tipe file na pdf.
          </div>";
        }
        ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Penilaian Prakerin & Seminar</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th class='center'>N. Prakerin</th>
                                <th class='center'>N. Laporan</th>
                                <th class='center'>N. Aplikasi</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            /* Pagination */
                            $batas = 10;

                            if (isset($cari)) {
                                $jumlah_record = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis WHERE instansi LIKE '%$cari%' OR nama LIKE '%$cari%'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            } else {
                                $jumlah_record = mysqli_query($db, "SSELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            }

                            $jumlah  = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai   = ($page - 1) * $batas;
                            /*-------------------------------------------------------------------*/
                            $no = 1;
                            if (isset($cari)) {
                                $query = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis WHERE instansi LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY nis LIMIT $mulai, $batas")
                                    or die('Ada kesalahan pada query seminar: ' . mysqli_error($db));
                            } else {
                                $query = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis ORDER BY nis LIMIT $mulai, $batas") or die('Ada kesalahan pada query seminar: ' . mysqli_error($db));
                            }

                            while ($data = mysqli_fetch_assoc($query)) {

                                echo "  <tr>
                      <td width='20'>$no</td>
                      <td width='100'>$data[nama]</td>
                      <td width='75'>$data[instansi]</td>
                      <td width='200'>$data[judul]</td>
                      <td width='50'>$data[statussem]</td>
                      <td width='25' align='center'>$data[nilaiprakerin]</td>
                      <td width='25' align='center'>$data[nilailaporan]</td>
                      <td width='25' align='center'>$data[nilaiaplikasi]</td>

                      <td width='100' class='center'>
                        <div class=''>
                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=seminar-detail&id=$data[idseminar]'> <i class='glyphicon glyphicon-eye-open'></i></a>
                        <a data-toggle='tooltip' data-placement='top' title='Print Detail' style='margin-right:5px' class='btn btn-warning btn-sm' href='?page=seminar-print-detail&id=$data[idseminar]' target='_blank'> <i class='glyphicon glyphicon-print'></i></a>";;
                            ?>
                                <?php
                                if ($_SESSION['level'] == "Pegawai") {
                                    echo " <a data-toggle='tooltip' data-placement='top' title='Nilai' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=nilai-seminar&id=$data[idseminar]'> <i class='glyphicon glyphicon-check'></i></a>";
                                } else if ($_SESSION['level'] == "User") {
                                }
                                ?>
                            <?php
                                echo "
                        </div>
                      </td>
                    </tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($_GET['hal'])) {
                        $halaman_aktif = '1';
                    } else {
                        $halaman_aktif = $_GET['hal'];
                    }
                    ?>

                    <a>
                        Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> |
                        Total <?php echo $jumlah; ?> data
                    </a>

                    <nav>
                        <ul class="pagination pull-right">
                            <!-- Button untuk halaman sebelumnya -->
                            <?php
                            if ($halaman_aktif <= '1') { ?>
                                <li class="disabled">
                                    <a href="" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php
                            } else { ?>
                                <li>
                                    <a href="?page=seminar-tampil&hal=<?php echo $page - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                            <!-- Link halaman 1 2 3 ... -->
                            <?php
                            for ($x = 1; $x <= $halaman; $x++) { ?>
                                <li class="">
                                    <a href="?page=seminar-tampil&hal=<?php echo $x ?>"><?php echo $x ?></a>
                                </li>
                            <?php
                            }
                            ?>

                            <!-- Button untuk halaman selanjutnya -->
                            <?php
                            if ($halaman_aktif >= $halaman) { ?>
                                <li class="disabled">
                                    <a href="" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php
                            } else { ?>
                                <li>
                                    <a href="?page=seminar-tampil&hal=<?php echo $page + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- /.panel -->
    </div> <!-- /.col -->
</div> <!-- /.row -->