<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Data <?php echo $title; ?></li>
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
                            <h3 class="card-title"><?php echo $title; ?></h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th width="35%">No. RM / Nama</th>
                                            <td><b>Poli</b></td>
                                            <th class="">Tanggal Lahir</th>
                                            <th class="">Tanggal Periksa</th>
                                            <!-- <th width="12%" class="text-center">Aksi</th> -->
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 90%;">
                                        <?php
                                        $no = 1;
                                        if (!empty($soap)) {
                                            foreach ($soap as $data) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->no_rm . ' / ' . $data->nama ?></td>
                                                    <td><?php echo $data->poli; ?></td>
                                                    <td><?php echo date('d F Y', strtotime($data->tanggal_lahir)) ?></td>
                                                    <td><?php echo date('d F Y', strtotime($data->tgl_jam)) . ' / ' . substr($data->tgl_jam, 11, 5) ?></td>
                                                    <!-- <td class="text-center">
                                                        <a href="<?php echo site_url('Soap/dataSoap/' . $data->no_rm); ?>" class="">
                                                            <i class="nav-icon fas btn-sm fa-sign-in-alt" title="Cek"></i>
                                                        </a>
                                                    </td> -->
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