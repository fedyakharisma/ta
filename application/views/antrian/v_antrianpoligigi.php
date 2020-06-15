<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Form Pasien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-default">
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="row" >

                                <div class="col-md-12">
                                    <div class="text-center" style="padding: 10px; border: 2px solid; border-color: darkgrey; height: 130px" >
                                        <form method="post" action="<?php echo site_url('antrianpoligigi/next') ?>">
                                            POLI GIGI <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrigigim)) {
                                                        foreach ($noantrigigim as $data) {
                                                        $noantrian = $data->no_antrian; ?>
                                                        
                                                        <input type="hidden" class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>"" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                     
                                                     <input class="text-center" type="hidden" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php  }?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php
                                                    if (is_array($noantrigigis)) {
                                                        foreach ($noantrigigis as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        
                                                        <input name="idkunjunganumums" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input class="text-center" type="text" id="NOG" name="noantri" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 80px";>
                                                        <?php }
                                                    }else{?>
                                                    
                                                    <input class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <?php 
                                                    if (is_array($noantrigigid)) {
                                                        foreach ($noantrigigid as $data) {
                                                        $idkunjungan = $data->id_kunjungan;
                                                        $noantrian = $data->no_antrian; ?>
                                                        
                                                        <input name="idkunjunganumumd" class="form-control" type="hidden"  value="<?php echo $idkunjungan ?>">
                                                        <input type="hidden" class="text-center" type="text"  name="" value="<?php echo $noantrian; ?>" style="margin-bottom: 3px; width: 60px";>
                                                        <?php }
                                                    }else{?>
                                                    
                                                    <input type="hidden" class="text-center" type="text"  name="" value="0" style="margin-bottom: 3px; width: 60px";>
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

                            </div> 
                            </div>    
                                <!-- /.card-body -->
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