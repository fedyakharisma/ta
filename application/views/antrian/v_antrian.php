<script>
  $(document).ready(function(){
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
  if(data.message === 'success'){
      window.setTimeout(function(){location.reload()},1000);
  }
    });
  });
    function playumum() {
        
        var a = document.getElementById("NOU").value;
        // var a = document.getElementById("NOG").value;
        if (a==1) {
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio1").play();
              
            }, 2500)
        }else if(a==2){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio2").play();
              
            }, 2500)
        }else if(a==3){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio3").play();
              
            }, 2500)
        }else if(a==4){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio4").play();
              
            }, 2500)
        }else if(a==5){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio5").play();
              
            }, 2500)
        }else if(a==6){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio6").play();
              
            }, 2500)
        }else if(a==7){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio7").play();
              
            }, 2500)
        }else if(a==8){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio8").play();
              
            }, 2500)
        }else if(a==9){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio9").play();
              
            }, 2500)
        }else if(a==10){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio10").play();
              
            }, 2500)
        }else if(a==11){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio11").play();
              
            }, 2500)
        }
    }
    function playgigi() {
        
        var a = document.getElementById("NOG").value;
        // var a = document.getElementById("NOG").value;
        if (a==1) {
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio1").play();
              
            }, 2500)
        }else if(a==2){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio2").play();
              
            }, 2500)
        }else if(a==3){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio3").play();
              
            }, 2500)
        }else if(a==4){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio4").play();
              
            }, 2500)
        }else if(a==5){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio5").play();
              
            }, 2500)
        }else if(a==6){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio6").play();
              
            }, 2500)
        }else if(a==7){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio7").play();
              
            }, 2500)
        }else if(a==8){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio8").play();
              
            }, 2500)
        }else if(a==9){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio9").play();
              
            }, 2500)
        }else if(a==10){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio10").play();
              
            }, 2500)
        }else if(a==11){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio11").play();
              
            }, 2500)
        }
    }
    function playkia() {
        
        var a = document.getElementById("NOK").value;
        // var a = document.getElementById("NOG").value;
        if (a==1) {
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio1").play();
              
            }, 2500)
        }else if(a==2){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio2").play();
              
            }, 2500)
        }else if(a==3){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio3").play();
              
            }, 2500)
        }else if(a==4){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio4").play();
              
            }, 2500)
        }else if(a==5){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio5").play();
              
            }, 2500)
        }else if(a==6){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio6").play();
              
            }, 2500)
        }else if(a==7){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio7").play();
              
            }, 2500)
        }else if(a==8){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio8").play();
              
            }, 2500)
        }else if(a==9){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio9").play();
              
            }, 2500)
        }else if(a==10){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio10").play();
              
            }, 2500)
        }else if(a==11){
            document.getElementById("dingdong").play();
            setTimeout(function(){
              document.getElementById("audionomorantrian").play();
              
            }, 1000)
            setTimeout(function(){
              document.getElementById("audio11").play();
              
            }, 2500)
        }
    }

      

    </script>
    <audio id="dingdong" ><source src="<?php echo base_url('assets/') ?>mp3/dingdong.wav" type="audio/wav"></audio> 
    <audio id="audio0" ><source src="<?php echo base_url('assets/') ?>mp3/nol.mp3" type="audio/mp3"></audio>
    <audio id="audio1" ><source src="<?php echo base_url('assets/') ?>mp3/satu.mp3" type="audio/mp3"></audio>
    <audio id="audio2" ><source src="<?php echo base_url('assets/') ?>mp3/dua.mp3" type="audio/mp3"></audio>
    <audio id="audio3" ><source src="<?php echo base_url('assets/') ?>mp3/tiga.mp3" type="audio/mp3"></audio>
    <audio id="audi04" ><source src="<?php echo base_url('assets/') ?>mp3/empat.mp3" type="audio/mp3"></audio>
    <audio id="audio5" ><source src="<?php echo base_url('assets/') ?>mp3/lima.mp3" type="audio/mp3"></audio>
    <audio id="audi6" ><source src="<?php echo base_url('assets/') ?>mp3/enam.mp3" type="audio/mp3"></audio>
    <audio id="audio7" ><source src="<?php echo base_url('assets/') ?>mp3/tujuh.mp3" type="audio/mp3"></audio>
    <audio id="audio8" ><source src="<?php echo base_url('assets/') ?>mp3/delapan.mp3" type="audio/mp3"></audio>
    <audio id="audio9" ><source src="<?php echo base_url('assets/') ?>mp3/sembilan.mp3" type="audio/mp3"></audio>
    <audio id="audio10" ><source src="<?php echo base_url('assets/') ?>mp3/sepuluh.mp3" type="audio/mp3"></audio>
    <audio id="audio100" ><source src="<?php echo base_url('assets/') ?>mp3/seratus.mp3" type="audio/mp3"></audio>
    <audio id="audioratus" ><source src="<?php echo base_url('assets/') ?>mp3/ratus.mp3" type="audio/mp3"></audio>
    <audio id="audiopuluh" ><source src="<?php echo base_url('assets/') ?>mp3/puluh.mp3" type="audio/mp3"></audio>
    <audio id="audionomorantrian" ><source src="<?php echo base_url('assets/') ?>mp3/nomorantrian.mp3" type="audio/mp3"></audio>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content" >
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12" >
                    <div class="card card-default">
                        <div class="card-header">

                        </div>
                        <div class="card-body" >
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="text-center" style=" padding: 10px; border: 2px solid; border-color: darkgrey; height: 130px" >
                                        <form method="post" action="<?php echo site_url('antrian/next') ?>">
                                            POLI UMUM <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantriumumm)) {
                                                        foreach ($noantriumumm as $data) {
                                                        $noantrian = $data->no_antrian; ?>
                                                        menunggu
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>"" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                     menunggu
                                                     <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php  }?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantriumums)) {
                                                        foreach ($noantriumums as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        sekarang
                                                        <input name="idkunjunganumums" class="form-control"  type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text" id="NOU" name="noantri" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 80px";>
                                                        <?php }
                                                    }else{?>
                                                    sekarang
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php 
                                                    if (is_array($noantriumumd)) {
                                                        foreach ($noantriumumd as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        diperiksa
                                                        <input name="idkunjunganumumd" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                    diperiksa
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <input type="submit" class=" btn btn-sm btn-default" name="btnBack" value="back"/>
                                            <button class=" btn btn-sm btn-default" onclick="playumum()" type="button">Panggil</button>
                                            <?php if (empty($noantriumumd)) {?>
                                                <input type="submit" class=" btn btn-sm btn-default" name="btnNext" value="next"/>
                                            <?php }else{ ?>
                                            <input type="submit" class=" btn btn-sm btn-default" disabled="disabled" name="btnNext" value="next"/>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    <div class="table">
                                        <table class="table table-bordered table-hover " >
                                            <thead style="background-color: #b3b3b3;">
                                                <tr height="10px">
                                                    <th width="10px"; style="font-size: 12px">No antrian</th>
                                                    <th width="10px"; style="font-size: 12px">No RM / Nama Lengkap</th>
                                                    <th width="10px"; style="font-size: 12px">Status</th>
                                                    <th width="10px"; style="font-size: 12px"class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                if (!empty($antrianUMUM)) {
                                                    foreach ($antrianUMUM as $data) {
                                                        ?>
                                                        <tr height="10px">
                                                            <td  width="10px"; style="font-size: 12px" class="text-center"><?php echo $data->no_antrian; ?></td>
                                                            <td  width="10px"; style="font-size: 12px"><?php echo $data->no_rm . ' / ' . $data->nama; ?></td>
                                                            <td  width="10px"; style="font-size: 12px" align="center">
                                                                <?php
                                                                if ($data->status == 'Diperiksa') {
                                                                    ?>
                                                                    <span class="badge bg-warning"><?php echo $data->status; ?></span>
                                                                    <?php
                                                                } elseif ($data->status == 'Selesai diperiksa') {
                                                                    ?>
                                                                    <span class="badge bg-success"><?php echo $data->status; ?></span>
                                                                    <?php
                                                                } elseif ($data->status == 'Dalam Antrian') {
                                                                    ?>
                                                                    <span class="badge bg-info"><?php echo $data->status; ?></span>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <span class="badge bg-danger"><?php echo $data->status; ?></span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td  width="10px"; style="font-size: 12px"class="text-center">
                                                                    <a href="" class="" data-toggle="modal" data-target="#modal_detail<?php echo $data->id_kunjungan; ?>">
                                                                        <i class="nav-icon fas btn btn-sm fa-eye"></i>
                                                                    </a>
                                                                    <!-- <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_kunjungan; ?>">
                                                                        <i class="nav-icon fas btn fa-edit"></i>
                                                                    </a> -->
                                                                    <a href="<?php echo base_url('kunjungan/hapusKunjungan/' . $data->no_rm) ?>" onclick="return confirm('Hapus <?php echo $data->no_rm ?>/<?php echo $data->nama ?>?')" class="">
                                                                        <i class="nav-icon fas btn btn-sm fa-trash-alt"> </i>
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
                                </div>

                                <div class="col-md-4">
                                    <div class="text-center" style="padding: 10px; border: 2px solid; border-color: darkgrey; height: 130px" >
                                        <form method="post" action="<?php echo site_url('antrian/next') ?>">
                                            POLI GIGI <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrigigim)) {
                                                        foreach ($noantrigigim as $data) {
                                                        $noantrian = $data->no_antrian; ?>
                                                        menunggu
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>"" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                     menunggu
                                                     <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php  }?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrigigis)) {
                                                        foreach ($noantrigigis as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        sekarang
                                                        <input name="idkunjunganumums" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text" id="NOG" name="noantri" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 80px";>
                                                        <?php }
                                                    }else{?>
                                                    sekarang
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php 
                                                    if (is_array($noantrigigid)) {
                                                        foreach ($noantrigigid as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        diperiksa
                                                        <input name="idkunjunganumumd" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                    diperiksa
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <input type="submit" class=" btn btn-sm btn-default" name="btnBack" value="back"/>
                                            <button class=" btn btn-sm btn-default" onclick="playgigi()" type="button">Panggil</button>
                                            <?php if (empty($noantrigigid)) {?>
                                                <input type="submit" class=" btn btn-sm btn-default" name="btnNext" value="next"/>
                                            <?php }else{ ?>
                                            <input type="submit" class=" btn btn-sm btn-default" disabled="disabled" name="btnNext" value="next"/>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    <table class="table table-bordered table-hover " >
                                        <thead style="background-color: #b3b3b3;">
                                            <tr height="10px">
                                                <th width="10px"; style="font-size: 12px">No antrian</th>
                                                <th width="10px"; style="font-size: 12px">No RM / Nama Lengkap</th>
                                                <th width="10px"; style="font-size: 12px">Status</th>
                                                <th width="10px"; style="font-size: 12px"class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            if (!empty($antrianGIGI)) {
                                                foreach ($antrianGIGI as $data) {
                                                    ?>
                                                    <tr height="10px">
                                                        <td  width="10px"; style="font-size: 12px" class="text-center"><?php echo $data->no_antrian; ?></td>
                                                        <td  width="10px"; style="font-size: 12px"><?php echo $data->no_rm . ' / ' . $data->nama; ?></td>
                                                        <td  width="10px"; style="font-size: 12px" align="center">
                                                            <?php
                                                            if ($data->status == 'Diperiksa') {
                                                                ?>
                                                                <span class="badge bg-warning"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } elseif ($data->status == 'Selesai diperiksa') {
                                                                ?>
                                                                <span class="badge bg-success"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } elseif ($data->status == 'Dalam Antrian') {
                                                                ?>
                                                                <span class="badge bg-info"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <span class="badge bg-danger"><?php echo $data->status; ?></span>
                                                                <?php } ?>
                                                            </td>
                                                            <td  width="10px"; style="font-size: 12px"class="text-center">
                                                                <a href="" class="" data-toggle="modal" data-target="#modal_detail<?php echo $data->id_kunjungan; ?>">
                                                                    <i class="nav-icon fas btn btn-sm fa-eye"></i>
                                                                </a>
                                                                <!-- <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_kunjungan; ?>">
                                                                    <i class="nav-icon fas btn fa-edit"></i>
                                                                </a> -->
                                                                <a href="<?php echo base_url('kunjungan/hapusKunjungan/' . $data->no_rm) ?>" onclick="return confirm('Hapus <?php echo $data->no_rm ?>/<?php echo $data->nama ?>?')" class="">
                                                                    <i class="nav-icon fas btn btn-sm fa-trash-alt"> </i>
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

                                <div class="col-md-4">
                                    <div class="text-center" style=" padding: 10px; border: 2px solid; border-color: darkgrey; height: 130px" >
                                        <form method="post" action="<?php echo site_url('antrian/next') ?>">
                                            POLI KIA <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrikiam)) {
                                                        foreach ($noantrikiam as $data) {
                                                        $noantrian = $data->no_antrian; ?>
                                                        menunggu
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>"" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                     menunggu
                                                     <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php  }?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrikias)) {
                                                        foreach ($noantrikias as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        sekarang
                                                        <input name="idkunjunganumums" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text"  name="noantri" id="NOK" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 80px";>
                                                        <?php }
                                                    }else{?>
                                                    sekarang
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php 
                                                    if (is_array($noantrikiad)) {
                                                        foreach ($noantrikiad as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        diperiksa
                                                        <input name="idkunjunganumumd" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                    diperiksa
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <input type="submit" class=" btn btn-sm btn-default" name="btnBack" value="back"/>
                                            <button class=" btn btn-sm btn-default" onclick="playkia()" type="button">Panggil</button>
                                            <?php if (empty($noantrikiad)) {?>
                                                <input type="submit" class=" btn btn-sm btn-default" name="btnNext" value="next"/>
                                            <?php }else{ ?>
                                            <input type="submit" class=" btn btn-sm btn-default" disabled="disabled" name="btnNext" value="next"/>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    <table class="table table-bordered table-hover " >
                                        <thead style="background-color: #b3b3b3;">
                                            <tr height="10px">
                                                <th width="10px"; style="font-size: 12px">No antrian</th>
                                                <th width="10px"; style="font-size: 12px">No RM / Nama Lengkap</th>
                                                <th width="10px"; style="font-size: 12px">Status</th>
                                                <th width="10px"; style="font-size: 12px"class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            if (!empty($antrianKIA)) {
                                                foreach ($antrianKIA as $data) {
                                                    ?>
                                                    <tr height="10px">
                                                        <td  width="10px"; style="font-size: 12px" class="text-center"><?php echo $data->no_antrian; ?></td>
                                                        <td  width="10px"; style="font-size: 12px"><?php echo $data->no_rm . ' / ' . $data->nama; ?></td>
                                                        <td  width="10px"; style="font-size: 12px" align="center">
                                                            <?php
                                                            if ($data->status == 'Diperiksa') {
                                                                ?>
                                                                <span class="badge bg-warning"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } elseif ($data->status == 'Selesai diperiksa') {
                                                                ?>
                                                                <span class="badge bg-success"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } elseif ($data->status == 'Dalam Antrian') {
                                                                ?>
                                                                <span class="badge bg-info"><?php echo $data->status; ?></span>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <span class="badge bg-danger"><?php echo $data->status; ?></span>
                                                                <?php } ?>
                                                            </td>
                                                            <td  width="10px"; style="font-size: 12px"class="text-center">
                                                                <a href="" class="" data-toggle="modal" data-target="#modal_detail<?php echo $data->id_kunjungan; ?>">
                                                                    <i class="nav-icon fas btn btn-sm fa-eye"></i>
                                                                </a>
                                                                <!-- <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_kunjungan; ?>">
                                                                    <i class="nav-icon fas btn fa-edit"></i>
                                                                </a> -->
                                                                <a href="<?php echo base_url('kunjungan/hapusKunjungan/' . $data->no_rm) ?>" onclick="return confirm('Hapus <?php echo $data->no_rm ?>/<?php echo $data->nama ?>?')" class="">
                                                                    <i class="nav-icon fas btn btn-sm fa-trash-alt"> </i>
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

                            </div>       
                        </div>
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
    <!-- START ADD -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_Add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('antrian/tambahAntrianUmum') ?>">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">No. RM</label>
                            <div class="col-sm-8">

                                <select name="ktb" class="form-control select2">
                                    <option value="">--PILIH--</option>
                                    <?php
                                    if (!empty($pasien)) {
                                        foreach ($pasien as $data) {
                                            ?>
                                            <option value="<?php echo $data->no_rm; ?>">
                                                <?php echo $data->no_rm . ' - ' . $data->nama; ?>
                                            </option>
                                            <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Poli</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" name="poli">
                                        <option>--PILIH--</option>
                                        <?php
                                        if (!empty($poliklinik)) {
                                            foreach ($poliklinik as $data) {
                                                ?>
                                                <option value="<?php echo $data->poli_kode; ?>"><?php echo $data->poli; ?></option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Keluhan</label>
                                    <div class="col-sm-8">
                                        <textarea name="keluhan" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Tambah Data">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- <?php
            foreach ($antrian as $data) {
                $id_antrian = $data->id_antrian;
                $no_antrian = $data->no_antrian;
                $status = $data->status;
                $id_kunjungan = $data->id_kunjungan;
                $poli_kode = $data->poli_kode;
                $poli = $data->poli;
                $no_rm = $data->no_rm;
                $no_bpjs = $data->no_bpjs;
                $nama = $data->nama;
                $tanggal_lahir = $data->tanggal_lahir;
                $jenis_kelamin = $data->jenis_kelamin;
                $alamat = $data->alamat;
                $tempat = $data->tempat;
                $nip_ktp_nrp = $data->nip_ktp_nrp;
                $keterangan = $data->keterangan;

                ?>
                <!-- ============ MODAL DETAIL PASIEN =============== -->
                <div class="modal fade" tabindex="-1" role="dialog" id="modal_detail<?php echo $id_kunjungan; ?>" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel">Detail Kunjungan No.RM(<?php echo $no_rm; ?>)</h3>
                            </div>
                            <form class="form-horizontal" method="" role="form" action="">
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" > Waktu Berkunjung</label>
                                                <div class="col-xs-8">
                                                    <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $waktuberkunjung; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >No RM</label>
                                                <div class="col-xs-8">
                                                    <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $no_rm; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Poli</label>
                                                <div class="col-xs-8">
                                                    <select name="jk" class="form-control" disabled value="">
                                                        <option value="" ><?php echo $poli; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Nama Pasien</label>
                                                <div class="col-xs-8">
                                                    <input name="namapasien" class="form-control" type="text" placeholder="Cth. Fedya Kharisma Putra" disabled value="<?php echo $nama_lengkap; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >No BPJS</label>
                                                <div class="col-xs-8">
                                                    <input name="nobpjs" class="form-control" type="text" placeholder="Cth. 000xxxxxxxxxx" disabled value="<?php echo $nobpjs; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Tempat, Tanggal Lahir</label>
                                                <div class="col-xs-8">
                                                    <input name="tempat" class="form-control" type="text" placeholder="Cth.Probolinggo" disabled value="<?php echo $tempat; ?>, <?php echo $tgl_lahir; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                                <div class="col-xs-8">
                                                    <select name="jk" class="form-control" disabled value="">
                                                        <option value="" ><?php echo $jeniskelamin; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >NIK/KTP/NRP</label>
                                                <div class="col-xs-8">
                                                    <input name="nipktpnrp" class="form-control" type="text" placeholder="Masukkan NIK/KTP/NRP..." disabled value="<?php echo $nip_ktp_nrp; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Keterangan</label>
                                                <div class="col-xs-8">
                                                    <input name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value="<?php echo $keterangan; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Alamat</label>
                                                <div class="col-xs-8">
                                                    <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." disabled value=""><?php echo $alamat; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Keluhan</label>
                                                <div class="col-xs-8">
                                                    <textarea name="keterangan" class="form-control" type="text" placeholder="Keterangan..." disabled value=""><?php echo $keluhan; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!--<div class="form-group">
                                    <label class="control-label col-xs-3" >Satuan</label>
                                    <div class="col-xs-8">
                                         <select name="satuan" class="form-control" required>
                                            <option value="">-PILIH-</option>
                                            <option value="Unit">Unit</option>
                                            <option value="Kotak">Kotak</option>
                                            <option value="Botol">Botol</option>
                                            <option value="Sachet">Sachet</option>
                                            <option value="Pcs">Pcs</option>
                                            <option value="Dus">Dus</option>
                                         </select>
                                    </div>
                                </div>
             
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga" class="form-control" type="text" placeholder="Harga..." required>
                                    </div>
                                </div>
                            -->   
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Tutup</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL DETAIL PASIEN-->

        <!-- START EDIT -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_edit<?php echo $id_kunjungan; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit data <?php echo $no_rm; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="" enctype="" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor RM</label>
                                <div class="col-xs-8">
                                    <input name="poli_kode" class="form-control" type="text" value="<?php echo $no_rm; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Nama Lengkap</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $nama_lengkap; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">NIP/NRP/Pangkat</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $nik_pangkat_nrp; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Alamat</label>
                                <div class="col-xs-8">
                                    <textarea name="" class="form-control" id="" cols="3" rows=""><?php echo $alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Tempat, tanggal lahir</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $tempat . '-' . $tgl_lahir; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-xs-3">Jenis Poli</label>
                                <div class="col-xs-8">
                                    <input type="text" name="poli_nama" class="form-control" value="<?php echo $poli; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Selesai</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php } ?>
       
        