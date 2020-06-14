<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb" style="font-size: 15px;">
                        <?php
                        foreach ($soap as $data) {
                        ?>
                            <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i> Home</a></li>
                            <?php if ($poli == 'umum') { ?>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/pemeriksaanUmum') ?>"> Cek Pemeriksaan Umum</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/cekUmum/' . $data->id_pemeriksaan) ?>"> Hasil Asessmen Awal Ruang Pemeriksaan Umum</a></li>
                            <?php } elseif ($poli == 'kiakb') { ?>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/pemeriksaanKiaKb') ?>"> Cek Pemeriksaan Kia dan Kb</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/cekKiaKb/' . $data->id_pemeriksaan) ?>"> Hasil Asessmen Awal Ruang Pemeriksaan Kia dan Kb</a></li>
                            <?php } elseif ($poli == 'gigimulut') { ?>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/pemeriksaanGigiMulut') ?>"> Cek Pemeriksaan Gigi dan Mulut</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/cekGigiMulut/' . $data->id_asessmen_gigi_mulut); ?>"> Hasil Asessmen Awal Ruang Pemeriksaan Gigi dan Mulut</a></li>
                            <?php } else {
                            } ?>
                            <li class="breadcrumb-item active">Form data <?php echo $judul; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php if ($poli == 'umum') { ?>
        <form action="<?php echo site_url('Soap/tambahSoap') ?>" class="form-horizontal" method="post" id="add_name" name="add_name">
        <?php } elseif ($poli == 'kiakb') { ?>
            <form action="<?php echo site_url('Soap/tambahSoapKiaKb') ?>" class="form-horizontal" method="post" id="add_name" name="add_name">
            <?php } elseif ($poli == 'gigimulut') { ?>
                <form action="<?php echo site_url('Soap/tambahSoapGigiMulut') ?>" class="form-horizontal" method="post" id="add_name" name="add_name">
                <?php } else {
                            } ?>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-default">
                                    <div class="card-header" style="background-color: brown">
                                        <div class="row">
                                            <h3 class="card-title" style="color: black">
                                                <?php if ($poli == 'umum') { ?>
                                                    POLI UMUM
                                                <?php } elseif ($poli == 'kiakb') { ?>
                                                    POLI KIA DAN KB
                                                <?php } elseif ($poli == 'gigimulut') { ?>
                                                    POLI GIGI DAN MULUT
                                                <?php } ?>
                                            </h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="card-title" style="color: black">Nomor Rekam Medik : <?php echo $data->no_rm; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Nama</label>
                                                <div class="col-sm-7">
                                                    <input type="hidden" value="<?php echo $data->no_rm; ?>" name="no_rm">
                                                    <?php
                                                    if ($poli == 'gigimulut') { ?>
                                                        <input type="hidden" value="<?php echo $data->id_asessmen_gigi_mulut; ?>" name="id_pemeriksaan">
                                                    <?php } else { ?>
                                                        <input type="hidden" value="<?php echo $data->id_pemeriksaan; ?>" name="id_pemeriksaan">
                                                    <?php }
                                                    ?>
                                                    <input type="text" class="form-control" value="<?php echo $data->nama_lengkap; ?>" name="nama_lengkap" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Tanggal Lahir / Usia</label>
                                                <div class="col-sm-5">
                                                    <input type="hidden" value="<?php echo $data->tgllahir; ?>" name="tgllahir">
                                                    <input type="text" class="form-control" value="<?php echo date('d F Y', strtotime($data->tgllahir)); ?>" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" value="<?php echo $data->usia; ?>" readonly>
                                                </div>
                                            </div>
                                            <?php echo $this->session->flashdata('jenisKelaminKosong') ?>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-7">
                                                    <input type="radio" class="" name="jenis_kelamin" value="l"> <label class="form-check-label">Laki-laki</label>
                                                    <input type="radio" class="" name="jenis_kelamin" value="p"> <label class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Alamat</label>
                                                <div class="col-sm-7">
                                                    <textarea name="alamat" value="<?php echo $data->alamat; ?>" rows="1" class="form-control" readonly><?php echo $data->alamat; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Tanggal / Jam periksa</label>
                                                <div class="col-sm-5">
                                                    <input type="hidden" value="<?php echo $data->tgl_jam_pengkajian; ?>" name="tgl_jam_pengkajian">
                                                    <input type="text" class="form-control" value="<?php echo date('d F Y', strtotime(substr($data->tgl_jam_pengkajian, 0, 10))); ?>" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" value="<?php echo substr($data->tgl_jam_pengkajian, 11, 5); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label">Nama Kepala Keluarga</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <table class="table table-bordered" id="dynamic_field">
                                                    <thead>
                                                        <tr>
                                                            <td align="center">#</td>
                                                            <td><b>Anamnesa dan Pemeriksaan</b></td>
                                                            <td><b>Diagnosa, Therapy, dan Paraf Dokter</b></td>
                                                            <td><b>ICD 10</b></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <input type="hidden" value="<?php echo $date_now . ' ' . $time_now ?>" name="tgl_jam">
                                                            <td></td>
                                                            <td>
                                                                <div class="field_wrapper">
                                                                    <div>
                                                                        <input type="text" class="form-control" placeholder="Masukan anamnesa" required name="anamnesa_dan_pemeriksaan[]" autocomplete="off" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><input type="text" autocomplete="off" class="form-control" name="diagnosa_therapy_dan_paraf_dokter[]" required placeholder="Masukan diagnosa"></td>
                                                            <td>
                                                                <select class="form-control select2" name="icd10" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($icd10 as $data_icd10) { ?>
                                                                        <option value="<?php echo $data_icd10->id_icd; ?>"><?php echo $data_icd10->kode; ?></option>
                                                                    <?php }
                                                                    ?>
                                                                    <?php ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-12 control-label" style="color: red; font-size: 95%"><i>*beri tanda - jika tidak di isi</i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label"><button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button></label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="card-footer">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-3 control-label">
                                            <input type="submit" class="btn btn-primary col-md-12" value="Selesai" name="submit">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</section>
</div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        var postURL = "/addmore.php";
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td align="center"><button type="button" name="remove" id="' + i + '" class="btn-sm btn-danger btn_remove">X</button></td><td><input type="text" name="anamnesa_dan_pemeriksaan[]" placeholder="Masukan anamnesa" class="form-control name_list" autocomplete="off" required/><td><input type="text" name="diagnosa_therapy_dan_paraf_dokter[]" placeholder="Masukan diagnosa" class="form-control name_list" autocomplete="off" required/></td><td></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: postURL,
                method: "POST",
                data: $('#add_name').serialize(),
                type: 'json',
                success: function(data) {
                    i = 1;
                    $('.dynamic-added').remove();
                    $('#add_name')[0].reset();
                    alert('Record Inserted Successfully.');
                }
            });
        });
    });
</script>