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
                        <h2 class="text-center">Real Time CRUD Codeigniter</h2>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalAdd">Add New Product</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="record" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Daftar</th>
                                    <th>No.RM</th>
                                    <th>No.BPJS</th>
                                    <th>Nama Pasien</th>
                                    <th>Tempat</th>
                                    <th>Tanggal lahir</th>
                                    <th>NIP/KTP/NRP</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
         
                            </tbody>  
                        </table>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
                    <!-- /.card-body -->

                    <!-- ============ MODAL ADD BARANG =============== -->
                    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Add New Pasien</h3>
                        </div>
                        <form class="form-horizontal" id="form" method="post" action="<?php echo base_url('Pasienn/create') ?>">     
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Nama Pasien</label>
                                            <div class="col-xs-8">
                                                <input name="namapasien" id="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >No BPJS</label>
                                            <div class="col-xs-8">
                                                <input name="nobpjs" id="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tempat Lahir</label>
                                            <div class="col-xs-8">
                                                <input name="tempat" id="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Tanggal Lahir</label>    
                                            <div class="col-xs-4">
                                                <input name="tanggallahir" id="tanggallahir" class="form-control" type="date" placeholder="Tanggal Lahir..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                            <div class="col-xs-8">
                                                 <select name="jk" id="jk" class="form-control" required>
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
                                                <input name="nipktpnrp" id="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Alamat</label>
                                    <div class="col-xs-8">
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Keterangan</label>
                                    <div class="col-xs-8">
                                        <input name="keterangan" id="keterangan" class="form-control" type="text" placeholder="Keterangan..." required>
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
                                <button class="btn btn-info" id="add">Simpan</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!--END MODAL ADD BARANG-->

<!-- <?php
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
?> -->
                    
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
                    <div class="modal fade" tabindex="-1" role="dialog" id="modal_edit" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Edit Pasien</h3>
                        </div>
                        <form class="form-horizontal" method="post" role="form" id="edit_form">
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

<!--<?php } ?> -->           
</div>

<!-- /.content-wrapper -->
    
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>$(document).on("click", "#add", function(e){
        e.preventDefault();
        var date = new Date();
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        var tanggal = date.getDate();
        var hari = date.getDay();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        switch(hari) {
         case 0: hari = "Minggu"; break;
         case 1: hari = "Senin"; break;
         case 2: hari = "Selasa"; break;
         case 3: hari = "Rabu"; break;
         case 4: hari = "Kamis"; break;
         case 5: hari = "Jum'at"; break;
         case 6: hari = "Sabtu"; break;
        }
        switch(bulan) {
         case 0: bulan = "Januari"; break;
         case 1: bulan = "Februari"; break;
         case 2: bulan = "Maret"; break;
         case 3: bulan = "April"; break;
         case 4: bulan = "Mei"; break;
         case 5: bulan = "Juni"; break;
         case 6: bulan = "Juli"; break;
         case 7: bulan = "Agustus"; break;
         case 8: bulan = "September"; break;
         case 9: bulan = "Oktober"; break;
         case 10: bulan = "November"; break;
         case 11: bulan = "Desember"; break;
        }
        var tampilTanggal = "Tanggal: " + hari + ", " + tanggal + " " + bulan + " " + tahun;
        var tampilWaktu = "Jam: " + jam + ":" + menit + ":" + detik;

        
        var namapasien = $("#namapasien").val();
        var nobpjs = $("#nobpjs").val();
        var tempat = $("#tempat").val();
        var tanggallahir = $("#tanggallahir").val();
        var jk = $("#jk").val();
        var nipktpnrp = $("#nipktpnrp").val();
        var alamat = $("#alamat").val();
        var keterangan = $("#keterangan").val();
        var tanggal= tanggal+"-"+bulan+"-"+tahun+" "+jam+"-"+menit+"-"+ detik ;
        if (namapasien == "" || nobpjs == ""|| tempat == ""|| tanggallahir == ""|| jk == "" || nipktpnrp == ""|| alamat == ""|| keterangan =="") {
            alert("harus diisi");
        }else{
            
            $.ajax({
                url: "<?php echo base_url() ?>Pasienn/insert",
                type: "post",
                dataType: "json",
                data: {
                    tanggal_daftar: tanggal,
                    nama: namapasien,
                    no_bpjs : nobpjs,
                    tempat : tempat,
                    tanggal_lahir : tanggallahir,
                    jenis_kelamin : jk,
                    nip_ktp_nrp : nipktpnrp,
                    alamat : alamat,
                    keterangan : keterangan
                },
                success: function(data){
                    if (data.responce === "success") {
                        $('#record').DataTable().destroy();
                        fecth();
                        $('#ModalAdd').modal('hide');
                        $('.modal-backdrop').remove();
                        toastr["success"](data.message);
                        
                    }else{
                        toastr["error"](data.message);
                    }
                }
            });
            $("#form")[0].reset();
        }
    });
    //fecth record
    function fecth(){
        $.ajax({
            url: "<?php echo base_url() ?>Pasienn/fetch",
            type: "post",
            dataType: "json",
            success: function(data){
                var i = "1";
                $('#record').DataTable( {
                "data": data.posts,
                "responsive": true,
                "columns": [
                    { "render":function(){
                        return a = i++;
                    } },
                    { "data": "tanggal_daftar" },
                    { "data": "no_rm" },
                    { "data": "no_bpjs" },
                    { "data": "nama" },
                    { "data": "tempat" },
                    { "data": "tanggal_lahir" },
                    { "data": "nip_ktp_nrp" },
                    { "render": function ( data, type, row, meta ) {
                      var a = `
                                <a href="#" value="${row.no_rm}" id="del" class="btn btn-sm btn-outline-danger">Delete</a>
                                <a href="#" value="${row.no_rm}" id="edit" class="btn btn-sm btn-outline-warning">edit</a>
                      `;
                      return a;
                    } }
                ]
                } );
            }
        });
    }
    //update record
    $(document).on("click", "#edit", function(e){
        e.preventDefault();
        var edit_id = $(this).attr("value");
        var namapasien = $("#namapasien").val();
        var nobpjs = $("#nobpjs").val();
        var tempat = $("#tempat").val();
        var tanggallahir = $("#tanggallahir").val();
        var jk = $("#jk").val();
        var nipktpnrp = $("#nipktpnrp").val();
        var alamat = $("#alamat").val();
        var keterangan = $("#keterangan").val();

        $ajax({
            url: "<?php echo base_url() ?>Pasienn/update?>",
            type: "post",
            dataType: "json",
            data:{
                edit_id:edit_id
            },
            success: function(data){
                console.log(data);
            }
        });
    });

    fecth();
</script>
<!-- <script>
        $(document).ready(function(){
            // CALL FUNCTION SHOW PRODUCT
            show_product();
 
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('8cf463b119a9af6cadec', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if(data.message === 'success'){
                    show_product();
                }
            });
 
            // FUNCTION SHOW PRODUCT
            function show_product(){
                 $.ajax({
                    url   : '<?php echo site_url("pasienn/get_pasienn");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+ count++ +'</td>'+
                                    '<td>'+ data[i].tanggal_daftar +'</td>'+
                                    '<td>'+ data[i].no_rm +'</td>'+
                                    '<td>'+ data[i].no_bpjs +'</td>'+
                                    '<td>'+ data[i].nama +'</td>'+
                                    '<td>'+ data[i].tempat+data[i].tanggal_lahir +'</td>'+
                                    
                                    '<td>'+ data[i].nip_ktp_nrp +'</td>'+
                                    '<td>'+
                                        '<a href="#modal_edit" class="btn btn-sm btn-info item_edit" data-toggle="modal" data-id=".data[i].no_rm.">Edit</a>'+
                                        '<a href="javascript:void(0);" class="btn btn-sm btn-danger item_delete" data-id="'+ data[i].product_id +'">Delete</a>'+
                                    '</td>'+
                                    '</tr>';
                        }
                        $('.show_product').html(html);
                    }
 
                });
            } 
 
            // CREATE NEW PRODUCT
            $('.btn-save').on('click',function(){
                var product_name = $('.name').val();
                var product_price = $('.price').val();
                $.ajax({
                    url    : '<?php echo site_url("product/create");?>',
                    method : 'POST',
                    data   : {product_name: product_name, product_price: product_price},
                    success: function(){
                        $('#ModalAdd').modal('hide');
                        $('.name').val("");
                        $('.price').val("");
                    }
                });
            });
            // END CREATE PRODUCT
 
            // UPDATE PRODUCT
            $('#mytable').on('click','.item_edit',function(){
                var product_id = $(this).data('id');
                $('#ModalEdit').modal('show');
                $('.id_edit').val(product_id);
                $('.name_edit').val(product_name);
                $('.price_edit').val(product_price);
            });
 
            // $('.btn-edit').on('click',function(){
            //     var product_id = $('.id_edit').val();
            //     var product_name = $('.name_edit').val();
            //     var product_price = $('.price_edit').val();
            //     $.ajax({
            //         url    : '<?php echo site_url("product/update");?>',
            //         method : 'POST',
            //         data   : {product_id: product_id, product_name: product_name, product_price: product_price},
            //         success: function(){
            //             $('#ModalEdit').modal('hide');
            //             $('.id_edit').val("");
            //             $('.name_edit').val("");
            //             $('.price_edit').val("");
            //         }
            //     });
            // });
            // // END EDIT PRODUCT
 
            // // DELETE PRODUCT
            // $('#mytable').on('click','.item_delete',function(){
            //     var product_id = $(this).data('id');
            //     $('#ModalDelete').modal('show');
            //     $('.product_id').val(product_id);
            // });
 
            // $('.btn-delete').on('click',function(){
            //     var product_id = $('.product_id').val();
            //     $.ajax({
            //         url    : '<?php echo site_url("product/delete");?>',
            //         method : 'POST',
            //         data   : {product_id: product_id},
            //         success: function(){
            //             $('#ModalDelete').modal('hide');
            //             $('.product_id').val("");
            //         }
            //     });
            // });
            // // END DELETE PRODUCT
        });
    </script> -->

