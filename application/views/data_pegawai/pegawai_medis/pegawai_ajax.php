<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script> -->
<script src="assets/plugins/jquery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        setInterval(function() {
            $("#screen").load('<?php echo base_url('Pegawai/iklan') ?>')
        }, 8000);
    });
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title ?></li>
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
                        <div class="card-header">
                            <a href="" data-toggle="modal" data-target="#modal_Add" class="btn btn-default"><i class="fas fa-plus-circle"></i> Tambah <?php echo $title; ?></a>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr style="font-size: 90%;">
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th class="">Nama Lengkap</th>
                                            <th width="25%">Tempat/Tanggal Lahir</th>
                                            <th>Jabatan</th>
                                            <th width="15%">Reset Password</th>
                                            <th width="13%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="screen">

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
</div>
<?php
foreach ($pegawai as $data) {
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalDetail<?php echo $data->id_data_pegawai; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">NIP</label>
                                    <div class="col-xs-8">
                                        <input type="" class="form-control" value="<?php echo $data->nip; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Nama Lengkap</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" type="" value="<?php echo $data->nama_lengkap; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">No. Hp/Telp</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" readonly value="<?php echo $data->no_telp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Jenis Kelamin</label>
                                    <div class="col-xs-8">
                                        <input readonly value="<?php if ($data->jenis_kelamin == 'l') {
                                                                    echo "Laki-laki";
                                                                } else {
                                                                    echo "Perempuan";
                                                                } ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tempat Lahir</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" readonly value="<?php echo $data->tempat_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tanggal Lahir</label>
                                    <div class="col-xs-4">
                                        <input class="form-control" readonly value="<?php echo $data->tanggal_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea readonly class="form-control"><?php echo $data->alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jabatan</label>
                            <div class="col-xs-8">
                                <input readonly value="<?php echo $data->role; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php
}
