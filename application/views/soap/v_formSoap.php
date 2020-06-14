<!-- Content Wrapper. Contains page content -->
<form class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Soap/') ?>">Data <?php echo $title; ?></a></li>
                        <li class="breadcrumb-item active">Form data <?php echo $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header" style="background-color: brown">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title" style="color: black">POLI UMUM</h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="card-title" style="color: black">Nomor Rekam Medik : </h3>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Nama</label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Tanggal Lahir/Umur</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" value="00/00/0000">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" value="00">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-7">
                                                <input type="radio" class=""> <label class="form-check-label">Laki-laki</label>
                                                <input type="radio" class=""> <label class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Tlp/Hp</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">No. Kartu Peserta</label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Alamat</label>
                                            <div class="col-sm-7">
                                                <textarea name="" rows="1" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Riwayat Penyakit</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Alergi</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead style="background-color: #b3b3b3;">
                                            <tr>
                                                <th class="text-center">
                                                    Tgl/Jam
                                                </th>
                                                <th width="">Anamnesa dan Pemeriksaan</th>
                                                <th class="">Diagnosa, Therapy, dan Paraf Dokter</th>
                                                <th width="12%" class="text-center">ICD 10</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><?php echo $date_now . ' / ' . $time_now; ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="anamnesa_dan_pemeriksaan">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="anamnesa_dan_pemeriksaan">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <select name="" class="form-control select2">
                                                        <option value="">--</option>
                                                        <?php
                                                        foreach ($icd10 as $data) {
                                                        ?>
                                                            <option value=""><?php echo $data->kode; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
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
</form>
<!-- /.content-wrapper -->