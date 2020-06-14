<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jquery utk ajax-->
  <script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.js"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- toastr-->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>
</head>
<body style="background-color: #008080">

<div class="row" style="border: 2px solid;box-shadow: 5px 10px; border-radius: 25px;margin: 50px;padding: 10px;background-color: #D8BFD8" >
	<div class="col-md-4" style="background-color: #FAF0E6;text-align: center; margin-top: 150px;margin-bottom: 150px; padding-bottom: 100px;  border: 2px solid; border-color: black ">
		<h1>POLI UMUM</h1>
		
		<?php
         if (is_array($noantriumums)) {
            foreach ($noantriumums as $data) {
            $idkunjungan = $data->id_kunjungan;
            $noantrian = $data->no_antrian; ?>

			                                                        
            
            <h1 style="font-size:70px"><?php echo $noantrian; ?></h1>
            
            <?php }
            }else{?>
                                                    
            <h1 style="font-size:70px">0</h1>
            <?php } ?>
		
	</div>
	<div class="col-md-4" style="background-color: #FAF0E6;text-align: center; margin-top: 150px;margin-bottom: 150px; padding-bottom: 100px; border: 2px solid; border-color: black ">
		<h1>POLI GIGI</h1>
		<?php
         if (is_array($noantrigigis)) {
            foreach ($noantrigigis as $data) {
            $idkunjungan = $data->id_kunjungan;
            $noantrian = $data->no_antrian; ?>

			                                                        
            
            <h1 style="font-size:70px"><?php echo $noantrian; ?></h1>
            
            <?php }
            }else{?>
                                                    
            <h1 style="font-size:70px">0</h1>
            <?php } ?>
	</div>
	<div class="col-md-4" style="background-color: #FAF0E6;text-align: center; margin-top: 150px;margin-bottom: 150px; padding-bottom: 100px; border: 2px solid; border-color: black ">
		<h1>POLI KIA</h1>
		<?php
         if (is_array($noantrikias)) {
            foreach ($noantrikias as $data) {
            $idkunjungan = $data->id_kunjungan;
            $noantrian = $data->no_antrian; ?>

			                                                        
            
            <h1 style="font-size:70px"><?php echo $noantrian; ?></h1>
            
            <?php }
            }else{?>
                                                    
            <h1 style="font-size:70px">0</h1>
            <?php } ?>
	</div>
</div>
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
    </script>
</body>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
</html>
