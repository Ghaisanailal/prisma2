<div class="panel-heading">
        <h3 class="panel-title">Data Pegawai</h3>
        <?php
      if ($_SESSION['level'] == "Admin") {
        echo "<a class='btn btn-info' href='?page=pegawai-tambah'>
      <i class='glyphicon glyphicon-plus'></i> Tambah </a>";
      } else if ($_SESSION['level'] == "Pegawai") {
        echo "Gak boleh masukin data";
      }
      ?>
      </div>
<?php
if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = "";
}
?>

<div class="row">
  <div class="col-md-12">
    <div class="page-header">



<br>
<form class="form-inline" method="POST" action="?page=pegawai-tampil">
<input type="text" name="cari" class="form-control" placeholder="cari ..." required="required" value="<?php echo $cari; ?>">
    </form>
        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='ti ti-exclamation-circle'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class=ti ti-zoom-check'></i> Sukses!</strong> Data Pegawai berhasil disimpan.
          </div>";
        } elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class=ti ti-zoom-check'></i> Sukses!</strong> Data Pegawai berhasil diubah.
          </div>";
        } elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class=ti ti-zoom-check'></i> Sukses!</strong> Data Pegawai berhasil dihapus.
          </div>";
        } elseif ($_GET['alert'] == 5) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class=ti ti-zoom-check'></i> Hampura mang euy!</strong> Kedahna tipe file na jpg, jpeg, png atanapi pdf.
          </div>";
        }
        ?>

        
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Bidang</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            /* Pagination */
                            $batas = 5;

                            if (isset($cari)) {
                                $jumlah_record = mysqli_query($db, "SELECT * FROM user WHERE nip LIKE '%$cari%' OR nama LIKE '%$cari%'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            } else {
                                $jumlah_record = mysqli_query($db, "SELECT * FROM user") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            }

                            $jumlah  = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai   = ($page - 1) * $batas;
                            /*-------------------------------------------------------------------*/
                            $no = 1;
                            if (isset($cari)) {
                                $query = mysqli_query($db, "SELECT * FROM user WHERE nip LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY nip LIMIT $mulai, $batas")
                                    or die('Ada kesalahan pada query user: ' . mysqli_error($db));
                            } else {
                                $query = mysqli_query($db, "SELECT * FROM user ORDER BY nip LIMIT $mulai, $batas") or die('Ada kesalahan pada query user: ' . mysqli_error($db));
                            }

                            while ($data = mysqli_fetch_assoc($query)) {

                                echo "  <tr>
                      <td width='20'>$no</td>
                      <td width='100'>$data[nip]</td>
                      <td width='150'>$data[nama]</td>
                      <td width='150'>$data[jabatan]</td>
                      <td width='150'>$data[bidang]</td>
                      <td width='150' class='center'>
                        <div class=''>

                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=pegawai-detail&id=$data[nip]'> <i class='ti ti-eye'></i> </a> 

                        <a data-toggle='tooltip' data-placement='top' title='Print' style='margin-right:5px' class='btn btn-warning btn-sm' href='?page=pegawai-print-detail&id=$data[nip]' target='_blank'> <i class='ti ti-printer'></i> </a>


                        
                        <a data-toggle='tooltip' data-placement='top' title='Kirim' style='margin-right:5px' class='btn btn-info btn-sm' href='?page=pegawai-kirim&id=$data[nip]'><i class='ti ti-share'></i></a>  
                                                
                                                ";
                                                ?>
                                                <?php
                                                if ($_SESSION['level'] == "Admin") {
                                                    echo "<a data-toggle='tooltip' data-placement='top' title='Edit' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=pegawai-edit&id=$data[nip]'> <i class='ti ti-edit'></i></a>";
                                                    echo "<a data-toggle='tooltip' data-placement='top' title='Hapus' class='btn btn-danger btn-sm' href='?page=pegawai-hapus&id=$data[nip]' onclick='return confirm('Anda yakin ingin menghapus $data[nama]');'> <i class='ti ti-trash'></i></a>&nbsp";
                                                } else if ($_SESSION['level'] == "Pegawai") {
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
                                    <button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-caret-left"></i></button>
                                    </a>
                                </li>
                            <?php
                            } else { ?>
                                <li>
                                    <a href="?page=pegawai-tampil&hal=<?php echo $page - 1 ?>" aria-label="Previous">
                                    <button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-caret-left"></i></button>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                            <!-- Link halaman 1 2 3 ... -->
                            <?php
                            for ($x = 1; $x <= $halaman; $x++) { ?>
                                 <button type="button" class="btn btn-outline-primary m-1"><a href="?page=pegawai-tampil&hal=<?php echo $x ?>"><?php echo $x ?></a></button>
                                    
                                
                            <?php
                            }
                            ?>

                            <!-- Button untuk halaman selanjutnya -->
                            <?php
                            if ($halaman_aktif >= $halaman) { ?>
                                <li class="disabled">
                                    <a href="" aria-label="Next">
                                    <button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-caret-right"></i></button>
                                    </a>
                                </li>
                            <?php
                            } else { ?>
                                <li>
                                    <a href="?page=pegawai-tampil&hal=<?php echo $page + 1 ?>" aria-label="Next">
                                    <button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-caret-right"></i></button>
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