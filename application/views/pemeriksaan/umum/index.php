<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Pemeriksaan Umum</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $title; ?></h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th width="">No. Rm/Nama Lengkap</th>
                                            <th class="">Poli</th>
                                            <th>Tindakan</th>
                                            <th width="12%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($pemeriksaan)) {
                                            foreach ($pemeriksaan as $data) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->no_rm . ' / ' . $data->nama_lengkap; ?></td>
                                                    <td><?php echo $data->poli; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('Pemeriksaan/tindakanPeriksa/' . $data->no_rm); ?>">Periksa</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->poli_kode; ?>">
                                                            <i class="nav-icon fas btn fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('poliklinik/hapusPoliklinik/' . $data->poli_kode) ?>" onclick="return confirm('Hapus <?php echo $data->poli ?>?')" class="">
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
foreach ($poliklinik as $data) {
    $poli_kode = $data->poli_kode;
    $poli_nama = $data->poli;
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_edit<?php echo $poli_kode; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('Poliklinik/editPoliklinik') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Kode Poli</label>
                            <div class="col-xs-8">
                                <input name="poli_kode" class="form-control" type="text" value="<?php echo $poli_kode ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Nama Poli</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" value="<?php echo $poli_nama ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Ubah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php } ?>