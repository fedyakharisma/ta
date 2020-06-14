Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal_add_new"> <i class="fas fa-plus-circle"></i> Tambah <?php echo $title; ?></a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead style="background-color: #b3b3b3;">
                                <tr class="text-center">
                                    <th width="3%" class="text-center">No</th>
                                    <th width="15%">Tanggal Daftar</th>
                                    <th>No.RM</th>
                                    <th>No.BPJS</th>
                                    <th width="15%">Nama Pasien</th>
                                    <th>Tanggal Lahir</th>
                                    <th>NIP/KTP/NRP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (!empty($pasien)) {
                                    foreach ($pasien as $data) {
                                ?>
                                        <tr style="font-size: 90%;" class="text-center">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data->tanggal_daftar; ?></td>
                                            <td><?php echo $data->no_rm; ?></td>
                                            <td><?php echo $data->no_bpjs; ?></td>
                                            <td class="text-left"><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->tempat; ?>, <?php echo $data->tanggal_lahir; ?></td>
                                            <td><?php echo $data->nip_ktp_nrp; ?></td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-sm-4"><a href="" data-toggle="modal" data-target="#modal_detail<?php echo $data->no_rm; ?>"><i class="nav-icon fas btn fa-eye"></i></a></div>
                                                    <div class="col-sm-4"><a href="" data-toggle="modal" data-target="#modal_edit<?php echo $data->no_rm; ?>"><i class="nav-icon fas btn fa-edit"></i></a></div>
                                                    <div class="col-sm-4"><a href="<?php echo base_url('Pasien/hapusPasien/' . $data->no_rm) ?>" onclick="return confirm('Hapus <?php echo $data->nama ?>?')" ><i class="nav-icon fas btn fa-trash-alt"> </i></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <!-- ============ MODAL ADD BARANG =============== -->
                    <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Add New Pasien</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Pasien/tambahPasien') ?>">
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Nama Pasien</label>
                                            <div class="col-xs-8">
                                                <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No BPJS</label>
                                            <div class="col-xs-8">
                                                <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tempat Lahir</label>
                                            <div class="col-xs-8">
                                                <input name="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tanggal Lahir</label>    
                                            <div class="col-xs-4">
                                                <input name="tanggallahir" class="form-control" type="date" placeholder="Tanggal Lahir..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                            <div class="col-xs-8">
                                                 <select name="jk" class="form-control" required>
                                                    <option value="">-PILIH JENIS KELAMIN-</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >NIK/KTP/NRP</label>
                                            <div class="col-xs-8">
                                                <input name="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Alamat</label>
                                    <div class="col-xs-8">
                                        <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Keterangan</label>
                                    <div class="col-xs-8">
                                        <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..." required>
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
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-info">Simpan</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!--END MODAL ADD BARANG-->

<?php
foreach ($pasien as $data) {
    $tanggaldaftar = $data->tanggal_daftar;
    $norm = $data->no_rm;
    $nobpjs = $data->no_bpjs;
    $nama = $data->nama;
    $tempat = $data->tempat;
    $tanggallahir = $data->tanggal_lahir;
    $nipktpnrp = $data->nip_ktp_nrp;
    $alamatt= $data->alamat;
    $keterangan = $data->keterangan;
    $jeniskelamin = $data->jenis_kelamin;
?>
                    
                    <!-- ============ MODAL DETAIL PASIEN =============== -->
                    <div class="modal fade" tabindex="-1" role="dialog" id="modal_detail<?php echo $norm; ?>" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Detail Pasien <?php echo $norm; ?></h3>
                        </div>
                        <form class="form-horizontal" method="" role="form" action="">
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" > Tanggal Daftar</label>
                                            <div class="col-xs-8">
                                                <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $tanggaldaftar; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No RM</label>
                                            <div class="col-xs-8">
                                                <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $norm; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Nama Pasien</label>
                                            <div class="col-xs-8">
                                                <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No BPJS</label>
                                            <div class="col-xs-8">
                                                <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $nobpjs; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tempat Lahir</label>
                                            <div class="col-xs-8">
                                                <input name="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" disabled value="<?php echo $tempat; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tanggal Lahir</label>    
                                            <div class="col-xs-4">
                                                <input name="tanggallahir" class="form-control" type="date" placeholder="Tanggal Lahir..." disabled value="<?php echo $tanggallahir; ?>">
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
                                                <input name="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..." disabled value="<?php echo $nipktpnrp; ?>">
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
                                                <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." disabled value=""><?php echo $alamatt; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <label class="control-label col-xs-3" >Keterangan</label>
                                            <div class="col-xs-8">
                                                <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value="<?php echo $keterangan; ?>">
                                            </div>
                                        </div> -->
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

                    <!-- ============ MODAL EDIT PASIEN =============== -->
                    <div class="modal fade" tabindex="-1" role="dialog" id="modal_edit<?php echo $norm; ?>" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Edit Pasien <?php echo $norm; ?></h3>
                        </div>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" role="form" action="<?php echo base_url('Pasien/editPasien') ?>">
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" > Tanggal Daftar</label>
                                            <div class="col-xs-8">
                                                <input name="tanggaldaftar" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" readonly value="<?php echo $tanggaldaftar; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No RM</label>
                                            <div class="col-xs-8">
                                                <input name="norm" readonly class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" value="<?php echo $norm; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Nama Pasien</label>
                                            <div class="col-xs-8">
                                                <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No BPJS</label>
                                            <div class="col-xs-8">
                                                <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" value="<?php echo $nobpjs; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tempat Lahir</label>
                                            <div class="col-xs-8">
                                                <input name="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" value="<?php echo $tempat; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tanggal Lahir</label>    
                                            <div class="col-xs-4">
                                                <input name="tanggallahir" class="form-control" type="date" placeholder="Tanggal Lahir..." value="<?php echo $tanggallahir; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                            <div class="col-xs-8">
                                                 <select name="jk" class="form-control"  value="<?php echo $jeniskelamin; ?>">
                                                    <option value="<?php echo $jeniskelamin; ?>" ><?php echo $jeniskelamin; ?></option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >NIK/KTP/NRP</label>
                                            <div class="col-xs-8">
                                                <input name="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..."  value="<?php echo $nipktpnrp; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Keterangan</label>
                                            <div class="col-xs-8">
                                                <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..."  value="<?php echo $keterangan; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Alamat</label>
                                            <div class="col-xs-8">
                                                <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." value=""><?php echo $alamatt; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <label class="control-label col-xs-3" >Keterangan</label>
                                            <div class="col-xs-8">
                                                <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value="<?php echo $keterangan; ?>">
                                            </div>
                                        </div> -->
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
                                <button type="submit" class="btn btn-warning">Ubah</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!--END MODAL EDIT PASIEN-->

                    <?php } ?>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
        $(document).ready(function(){
            // // CALL FUNCTION SHOW PRODUCT
            // show_product();
 
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('8cf463b119a9af6cadec', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if(data.message === 'success'){
                    window.setTimeout(function(){location.reload()},1000);
                }
            });
 
        });
    </script>