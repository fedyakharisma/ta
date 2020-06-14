<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Hasil Pemeriksaan Umum</li>
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
                                            <th>Jam / Tanggal</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($pemeriksaan)) {
                                            foreach ($pemeriksaan as $data) {
                                        ?>
                                                <tr style="font-size: 82%;">
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->no_rm . ' / ' . $data->nama_lengkap; ?></td>
                                                    <td><?php echo substr($data->tgl_jam_pengkajian, 11, 5) . ' / ' . date('d F Y', strtotime($data->tgl_jam_pengkajian)) ?></td>
                                                    <td align="center">
                                                        <a href="<?php echo base_url('HasilPemeriksaan/cekKiaKb/' . $data->id_pemeriksaan); ?>">Cek</a>
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