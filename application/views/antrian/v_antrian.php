<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <a href="" data-toggle="modal" data-target="#modal_Add" class="btn btn-default"><i class="fas fa-plus-circle"></i> Tambah <?php echo $title; ?></a>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Kunjungan/aksi_tambahKunjungan') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th>No antrian</th>
                                            <th>No RM / Nama Lengkap</th>
                                            <th>Jenis Poli</th>
                                            <th>Status</th>
                                            <th width="16%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($antrian)) {
                                            foreach ($antrian as $data) {
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $data->no_antrian; ?></td>
                                                    <td><?php echo $data->no_rm . ' / ' . $data->nama; ?></td>
                                                    <td><?php echo $data->poli ?></td>
                                                    <td align="center">
                                                        <?php
                                                        if ($data->status == 'Diperiksa') {
                                                            ?>
                                                            <span class="badge bg-warning"><?php echo $data->status; ?></span>
                                                            <?php
                                                        } elseif ($data->status == 'Selesai diperiksa') {
                                                            ?>
                                                            <span class="badge bg-success"><?php echo $data->status; ?></span>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <span class="badge bg-danger"><?php echo $data->status; ?></span>
                                                            <?php } ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="" class="" data-toggle="modal" data-target="#modal_detail<?php echo $data->id_kunjungan; ?>">
                                                                <i class="nav-icon fas btn fa-eye"></i>
                                                            </a>
                                                            <!-- <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_kunjungan; ?>">
                                                                <i class="nav-icon fas btn fa-edit"></i>
                                                            </a> -->
                                                            <a href="<?php echo base_url('kunjungan/hapusKunjungan/' . $data->no_rm) ?>" onclick="return confirm('Hapus <?php echo $data->no_rm ?>/<?php echo $data->nama ?>?')" class="">
                                                                <i class="nav-icon fas btn fa-trash-alt"> </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- start modal upload -->
    <?php
    foreach ($kunjungan as $data) {
        $id_kunjungan = $data->id_kunjungan;
        $no_rm = $data->no_rm;
        $nip_ktp_nrp = $data->nip_ktp_nrp;
        $nama_lengkap = $data->nama;
        $nobpjs = $data->no_bpjs;
        $alamat = $data->alamat;
        $waktuberkunjung = $data->waktu;
        $tempat = $data->tempat;
        $keluhan = $data->keluhan;
        $jeniskelamin = $data->jenis_kelamin;
        $tgl_lahir = $data->tanggal_lahir;
        $poli_kode = $data->poli_kode;
        $keterangan = $data->keterangan;
        $poli = $data->poli;
        ?>
        <!-- ============ MODAL DETAIL PASIEN =============== -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modal_detail<?php echo $id_kunjungan; ?>" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Detail Kunjungan No.RM(<?php echo $no_rm; ?>)</h3>
                    </div>
                    <form class="form-horizontal" method="" role="form" action="">
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" > Waktu Berkunjung</label>
                                        <div class="col-xs-8">
                                            <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $waktuberkunjung; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No RM</label>
                                        <div class="col-xs-8">
                                            <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $no_rm; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Poli</label>
                                        <div class="col-xs-8">
                                            <select name="jk" class="form-control" disabled value="">
                                                <option value="" ><?php echo $poli; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama Pasien</label>
                                        <div class="col-xs-8">
                                            <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $nama_lengkap; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No BPJS</label>
                                        <div class="col-xs-8">
                                            <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $nobpjs; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Tempat, Tanggal Lahir</label>
                                        <div class="col-xs-8">
                                            <input name="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" disabled value="<?php echo $tempat; ?>, <?php echo $tgl_lahir; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                        <div class="col-xs-8">
                                            <select name="jk" class="form-control" disabled value="">
                                                <option value="" ><?php echo $jeniskelamin; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >NIK/KTP/NRP</label>
                                        <div class="col-xs-8">
                                            <input name="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..." disabled value="<?php echo $nip_ktp_nrp; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Keterangan</label>
                                        <div class="col-xs-8">
                                            <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value="<?php echo $keterangan; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Alamat</label>
                                        <div class="col-xs-8">
                                            <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." disabled value=""><?php echo $alamat; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Keluhan</label>
                                        <div class="col-xs-8">
                                            <textarea name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value=""><?php echo $keluhan; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <!--<div class="form-group">
                                    <label class="control-label col-xs-3" >Satuan</label>
                                    <div class="col-xs-8">
                                         <select name="satuan" class="form-control" required>
                                            <option value="">-PILIH-</option>
                                            <option value="Unit">Unit</option>
                                            <option value="Kotak">Kotak</option>
                                            <option value="Botol">Botol</option>
                                            <option value="Sachet">Sachet</option>
                                            <option value="Pcs">Pcs</option>
                                            <option value="Dus">Dus</option>
                                         </select>
                                    </div>
                                </div>
             
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga" class="form-control" type="text" placeholder="Harga..." required>
                                    </div>
                                </div>
                            -->   
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Tutup</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL DETAIL PASIEN-->

        <!-- START EDIT -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_edit<?php echo $id_kunjungan; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit data <?php echo $no_rm; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="" enctype="" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor RM</label>
                                <div class="col-xs-8">
                                    <input name="poli_kode" class="form-control" type="text" value="<?php echo $no_rm; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Nama Lengkap</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $nama_lengkap; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">NIP/NRP/Pangkat</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $nik_pangkat_nrp; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Alamat</label>
                                <div class="col-xs-8">
                                    <textarea name="" class="form-control" id="" cols="3" rows=""><?php echo $alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Tempat, tanggal lahir</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $tempat . '-' . $tgl_lahir; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Jenis Poli</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $poli; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Selesai</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- START ADD -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_Add" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Kunjungan/tambahKunjungan') ?>">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">No. RM</label>
                                <div class="col-sm-8">

                                    <select name="ktb" id="" class="form-control select2">
                                        <option value="">--PILIH--</option>
                                        <?php
                                        if (!empty($pasien)) {
                                            foreach ($pasien as $data) {
                                                ?>
                                                <option value="<?php echo $data->no_rm; ?>">
                                                    <?php echo $data->no_rm . ' - ' . $data->nama; ?>
                                                </option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Poli</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2" name="poli">
                                            <option>--PILIH--</option>
                                            <?php
                                            if (!empty($poliklinik)) {
                                                foreach ($poliklinik as $data) {
                                                    ?>
                                                    <option value="<?php echo $data->poli_kode; ?>"><?php echo $data->poli; ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Keluhan</label>
                                        <div class="col-sm-8">
                                            <textarea name="keluhan" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Tambah Data">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <?php } ?>