<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Soap') ?>"></i>Data Soap</a></li>
                        <li class="breadcrumb-item active"> <?php echo $title; ?></li>
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
                            <h3 class="card-title">
                                <a href="<?php echo base_url('Soap') ?>">
                                    <button class="btn btn-sm btn-default"><i class="fas fa-arrow-left"></i> Kembali</button>
                                </a>
                            </h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th>Poli</th>
                                            <th width="25%">Nama</th>
                                            <th>Jam / Tgl Periksa</th>
                                            <th width="12%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 90%;">
                                        <?php
                                        $no = 1;
                                        if (!empty($PemeriksaanGigiMulut)) {
                                            foreach ($PemeriksaanGigiMulut as $data) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td>
                                                        <?php
                                                        if ($PemeriksaanGigiMulut > 0) {
                                                            echo 'Poli Gigi';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $data->nama_lengkap ?></td>
                                                    <td><?php echo substr($data->tgl_jam_pengkajian, 11, 5) . ' / ' . date('d F Y', strtotime($data->tgl_jam_pengkajian)) ?></td>
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('Soap/cekPemeriksaanGigi/' . $data->no_rm); ?>" class="">
                                                            Lihat
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