<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Input data Pegawai
            </h4>
        </div> <!-- /.page-header -->

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=pegawai-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nip</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nip" autocomplete="off" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="username" autocomplete="off" required>
                        </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nama" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Level</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="level" autocomplete="off" required>
                        </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="jabatan" placeholder="Pilih Jabatan" required>
                                <option value="Pembimbing">Kepala Kantor</option>
                                <option value="Pembimbing">KASI</option>
                                <option value="Pembimbing">KASUBAG</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Bidang</label>
                        <div class="col-sm-3">
                        <select class="form-control" name="bidang" placeholder="Pilih Bidang" required>
                        <option value="<?php echo $bidang; ?>"><?php echo $bidang; ?></option>
                        <option value="Kepala Kantor">Kepala Kantor</option>
                        <option value="KA SUBAB TU">KA SUBAB TU</option>
                        <option value="KEUANGAN">KEUANGAN</option>
                        <option value="UP">UP</option>
                        <option value="PENMAD">PENMAD</option>
                        <option value="PD_PONTREN">PD_PONTREN</option>
                        <option value="PAIS">PAIS</option>
                        <option value="PHU">PHU</option>
                        <option value="BIMAS ISLAM">BIMAS ISLAM</option>
                        <option value="ZAKAT & WAKAF">ZAKAT & WAKAF</option>
                        
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Telp</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="telp" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" name="email" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="foto" autocomplete="off" required>
                        </div>
                    </div>

                    <hr />
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form>
                <a href="?page=pegawai-tampil" class="btn btn-default btn-reset">Batal</a>
            </div>
        </div>
        </form>
    </div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->