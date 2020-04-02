<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">Malibu, California</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php echo $title; ?>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="<?php echo site_url('Profil/ubahDataProfil/') ?>">
                                <?php
                                foreach ($profil as $data) {
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">Nip</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $data->nip; ?>" name="nip" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">Nama Lengkap</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $data->nama_lengkap; ?>" name="nama_lengkap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">Tempat / Tempat Lahir</label>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="" value="<?php echo $data->tempat_lahir; ?>" name="tempat_lahir" style="text-align: center">
                                                    </div>
                                                    <label for="">/</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control" placeholder="" value="<?php echo $data->tanggal_lahir; ?>" name="tanggal_lahir" style="text-align: center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">Usia</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" value="<?php echo substr(date('Y-m-d'), 0, 4) - substr($data->tanggal_lahir, 0, 4); ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">Jenis Kelamin</label>
                                                <div class="col-sm-12">
                                                    <select name="jenis_kelamin" id="" class="form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option <?php
                                                                if ($data->jenis_kelamin == 'l') {
                                                                    echo 'Selected';
                                                                }
                                                                ?> value="l">Laki-laki</option>
                                                        <option <?php
                                                                if ($data->jenis_kelamin == 'p') {
                                                                    echo 'Selected';
                                                                }
                                                                ?> value="p">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col control-label">No. Telp/Hp</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" value="<?php echo $data->no_telp; ?>" name="no_telp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col control-label">Alamat</label>
                                        <div class="col-sm-12">
                                            <textarea name="alamat" id="" rows="2" class="form-control"><?php echo $data->alamat; ?></textarea>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>