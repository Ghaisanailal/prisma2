<div class="panel-heading">
        <h3 class="panel-title">Data Cuti</h3>
        <?php
      if ($_SESSION['level'] == "Pegawai") {
        echo "<a class='btn btn-info' href='?page=cuti-tambah'>
      <i class='glyphicon glyphicon-plus'></i> Usul </a>";
      } else if ($_SESSION['level'] == "Admin") {
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
<?php
if ($_SESSION['level'] == "Admin") {
    echo '<form class="form-inline" method="POST" action="?page=cuti-tampil">
            <input type="text" name="cari" class="form-control" placeholder="cari ..." required="required" value="' . htmlspecialchars($cari) . '">
          </form>';
} else if ($_SESSION['level'] == "Pegawai") {
    // Tidak ada output untuk Pegawai
}
?>
        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
           
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
           
            <strong> Sukses!</strong> Data Cuti berhasil disimpan.
          </div>";
        } elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Cuti berhasil diubah.
          </div>";
        } elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            
            <strong><i class='ti ti-square-rounded-check'></i> Sukses!</strong> Data Cuti berhasil dihapus.
          </div>";
        } elseif ($_GET['alert'] == 5) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sorry!</strong> tipe file yg anda kirim harus pdf.
          </div>";
        }
        ?>

      
            </div>
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
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        
                            <?php

                            /* Pagination */
                            $batas = 10;
                            $idu = $_SESSION['id'];


                           $jumlah_record = mysqli_query($db, "SELECT cuti.*, user.nama, user.jabatan, user.bidang FROM cuti JOIN user ON user.nip = cuti.nip WHERE  jabatan LIKE '%$cari%' OR nama LIKE '%$cari%'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));

                            $jumlah  = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai   = ($page - 1) * $batas;
                            /*-------------------------------------------------------------------*/
                            $no = 1;

                            $query = mysqli_query($db, "SELECT cuti.*,user.nama, user.jabatan,  user.bidang FROM cuti,user WHERE  user.nip = cuti.nip AND cuti.nip = $idu LIMIT $mulai, $batas") or die('Ada kesalahan pada query cuti: ' . mysqli_error($db));

                            while ($data = mysqli_fetch_assoc($query)) {
                            

                                echo "  <tr>
                      <td width='15'>$no</td>
                      <td width='15'>$data[nip]</td>
                      <td width='75'>$data[nama]</td>
                      <td width='50'>$data[jabatan]</td>
                      <td width='50'>$data[bidang]</td>
                      <td width='50'>$data[tanggal]</td>
                      <td width='50'>$data[status]</td>
                      <td width='100' class='center'>
                        <div class=''>

                         <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=cuti-detail&id=$data[idcuti]'> <i class='ti ti-eye'></i> </a> 

                        


    
                                                
                                                ";
                                                ?>
                                                <?php
                                                if ($_SESSION['level'] == "Admin") {
                                                    echo " <a data-toggle='tooltip' data-placement='top' title='Akvitasi' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=aktivasi-cuti&id=$data[idcuti]'> <i class='ti ti-zoom-check'></i></a>";
                                                    echo "<a data-toggle='tooltip' data-placement='top' title='Hapus' class='btn btn-danger btn-sm' href='?page=cuti-hapus&id=$data[idcuti]' onclick='return confirm('Anda yakin ingin menghapus $data[nama]');'> <i class='ti ti-trash'></i></a>&nbsp";
                                                } else if ($_SESSION['level'] == "Pegawai") {
                                                    echo " <a data-toggle='tooltip' data-placement='top' title='Print' style='margin-right:5px' class='btn btn-warning btn-sm' href='?page=cuti-print-detail&id=$data[idcuti]' target='_blank'> <i class='ti ti-printer'></i> </a>";
                                                }
                                                ?>
                        
                        <?php
                        
                        
                                                
                        ;
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
                                    <a href="?page=manage_cuti-tampil&hal=<?php echo $page - 1 ?>" aria-label="Previous">
                                    <button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-caret-left"></i></button>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                            <!-- Link halaman 1 2 3 ... -->
                            <?php
                            for ($x = 1; $x <= $halaman; $x++) { ?>
                                 <button type="button" class="btn btn-outline-primary m-1"><a href="?page=manage_cuti-tampil&hal=<?php echo $x ?>"><?php echo $x ?></a></button>
                                    
                                
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
                                    <a href="?page=manage_cuti-tampil&hal=<?php echo $page + 1 ?>" aria-label="Next">
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