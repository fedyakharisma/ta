<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.0-rc.1
  </div>
</footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/') ?>dist/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url('assets/') ?>dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>
</body>

<script>
  $(function() {
<<<<<<< HEAD
=======

    <?php if ($this->session->flashdata('loginBerhasil')) { ?>
      toastr.success('Login berhasil, Selamat datang!');
    <?php
    } elseif ($this->session->flashdata('tambahData')) { ?>
      toastr.success('Data tersimpan');
    <?php
    } elseif ($this->session->flashdata('hapusData')) { ?>
      toastr.error('Data terhapus');
    <?php
    } elseif ($this->session->flashdata('ubahData')) { ?>
      toastr.success('Data diubah');
    <?php } ?>

>>>>>>> 1e0a6ec831046be2c046241bd3c33d30561df3a9
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable({
      "language": {
        "url": "../assets/json/Datatable_indonesian.json",
        "sEmptyTable": "Data Poli kosong"
      }
    });
  });
  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });

  $(".toggle-password").click(function() {

    // show hide pass
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>

</html>