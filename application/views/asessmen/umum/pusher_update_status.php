<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Pemeriksaan/pemeriksaanUmum') ?>"> Pemeriksaan Umum</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
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
                                ASESSMEN UMUM
                            </h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Asessmen/tambahAsessmenUmum') ?>">
                            <div class="card-body">
                                <?php
                                $no = 1;
                                if (!empty($asessmenUmum)) {
                                    foreach ($asessmenUmum as $data) {
                                    }
                                }
                                ?>

                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <table>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Perawat yang melakukan pengkajian</td>
                                            </tr>
                                            <tr>
                                                <td>*<i>Nama lengkap beserta gelar</i></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" class="btn btn-default col-sm-12" value="Lembar SOAP" name="submit"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        // // CALL FUNCTION SHOW PRODUCT
        // show_product();

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('8cf463b119a9af6cadec', {
            cluster: 'ap1',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            if (data.message === 'success') {
                window.setTimeout(function() {
                    location.reload()
                }, 1000);
            }
        });

    });
</script>