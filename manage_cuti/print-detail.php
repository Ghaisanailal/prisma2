<script>
    window.print();
</script>
<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $idseminar   = $_GET['id'];
            $query = mysqli_query($db, "SELECT seminar.*, users.nama, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis WHERE idseminar='$idseminar'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $idseminar        = $data['idseminar'];
                $nis              = $data['nis'];
                $judul            = $data['judul'];
                $tautan           = $data['tautan'];
                $file             = $data['file'];
                $statussem        = $data['statussem'];
                $ket              = $data['ket'];
                $pengujilap       = $data['pengujilap'];
                $pengujiapl       = $data['pengujiapl'];
                $nilaiprakerin    = $data['nilaiprakerin'];
                $nilailaporan     = $data['nilailaporan'];
                $nilaiaplikasi    = $data['nilaiaplikasi'];
                $nama             = $data['nama'];
                $instansi         = $data['instansi'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA SEMINAR</b></li>
            <li class="list-group-item"><b>Id Seminar : </b><?php echo $idseminar; ?></li>
            <li class="list-group-item"><b>Nama Peserta : </b><?php echo $nama . " - " . $instansi; ?></li>
            <li class="list-group-item"><b>Judul : </b><?php echo $judul; ?></li>
            <li class="list-group-item"><b>Tautan : </b><a href="https:<?php echo $tautan; ?>" target="_blank"><?php echo $tautan; ?></a></li>
            <li class="list-group-item"><b>File : </b><a href="seminar/files/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a></li>
            <li class="list-group-item"><b>Status: </b><?php echo $statussem; ?></li>
            <li class="list-group-item"><b>Keterangan : </b><?php echo $ket; ?></li>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item active"><b>NILAI PRAKERIN & SEMINAR</b></li>
            <li class="list-group-item"><b>Nilai PKL : </b><?php echo $nilaiprakerin; ?></li>
            <li class="list-group-item"><b>Nilai Laporan : </b><?php echo $nilailaporan; ?></li>
            <li class="list-group-item"><b>Nilai Aplikasi : </b><?php echo $nilaiaplikasi; ?></li>
            </li>
        </ul>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->