<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <?php
                        if ($title == 'Data Pemeriksaan Umum') {
                        ?>
                            <li class="breadcrumb-item active">Pemeriksaan Umum</li>
                        <?php } elseif ($title == 'Data Pemeriksaan KIA / KB') { ?>
                            <li class="breadcrumb-item active">Pemeriksaan KIA / KB</li>
                        <?php } elseif ($title == 'Data Pemeriksaan Gigi dan Mulut') { ?>
                            <li class="breadcrumb-item active">Pemeriksaan Gigi dan Mulut</li>
                        <?php
                        } ?>
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
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th width="">No. Rm/Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Usia</th>
                                            <th>Tindakan</th>
                                            <th width="12%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($pemeriksaan as $data) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?>.</td>
                                                <td><?php echo $data->no_rm . ' / ' . $data->nama_lengkap; ?></td>
                                                <td width="15%">
                                                    <?php
                                                    if ($data->jenis_kelamin == 'L') {
                                                        echo 'Laki-laki';
                                                    } else {
                                                        echo 'Perempuan';
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php echo substr($date_now, 0, 4) - substr($data->tgl_lahir, 0, 4); ?> Tahun
                                                </td>
                                                <td width='10%' class="text-center">
                                                    <a href="" class="" data-toggle="modal" data-target="#modal_periksa<?php echo $data->no_rm; ?>">
                                                        <i class="nav-icon fas btn fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="" class="" data-toggle="modal" data-target="#modal_periksa<?php echo $data->poli_kode; ?>">
                                                        <i class="nav-icon fas btn fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('poliklinik/hapusPoliklinik/' . $data->poli_kode) ?>" onclick="return confirm('Hapus <?php echo $data->poli ?>?')" class="">
                                                        <i class="nav-icon fas btn fa-trash-alt"> </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
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
        </div>
    </section>
</div>

<!-- start modal upload -->
<?php
foreach ($pemeriksaan as $data) {
    $no_rm = $data->no_rm;
    $nama_lengkap = $data->nama_lengkap;
    $keluhan = $data->keluhan;
    $poli = $data->poli;
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_periksa<?php echo $no_rm; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo '(' . $no_rm . ') ' . $nama_lengkap; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <?php if ($poli == 'Poli Umum') { ?>
                    <form class="form-horizontal" action="<?php echo base_url('Pemeriksaan/asessmenUmum/' . $no_rm); ?>" method="post" enctype="multipart/form-data" role="form">
                    <?php } elseif ($poli == 'Poli KIA/KB') { ?>
                        <form class="form-horizontal" action="<?php echo base_url('Pemeriksaan/asessmenKiaKb/' . $no_rm); ?>" method="post" enctype="multipart/form-data" role="form">
                        <?php } elseif ($poli == 'Poli Gigi dan Mulut') { ?>
                            <form class="form-horizontal" action="<?php echo base_url('Pemeriksaan/asessmenGigiMulut/' . $no_rm); ?>" method="post" enctype="multipart/form-data" role="form">
                            <?php } ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Keluhan</label>
                                    <div class="col-xs-8">
                                        <textarea readonly name="" class="form-control" rows="5"><?php echo $keluhan; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success col-12">Lembar Asessmen</button>
                            </div>
                            </form>
            </div>
        </div>
    </div>
<?php } ?>