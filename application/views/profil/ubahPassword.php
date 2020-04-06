<form class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title" style="color: black"><?php echo $title; ?></h3>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label">Password lama</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control" name="password_lama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label">Password baru</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control" name="password_baru">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label">Ulangi password baru</label>
                                            <div class="col-sm-7 mb-3">
                                                <input id="password-field" type="password" class="form-control" name="ulangi_password_baru">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</form>