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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>

<!-- toast-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.js"></script>
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
<!-- <script src="<?php echo base_url('assets/') ?>dist/js/pages/dashboard2.js"></script> -->
<!-- DataTables -->
<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
</body>

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    });

    $("#example1").DataTable({
      "language": {
        "url": "../assets/json/Datatable_indonesian.json",
        "sEmptyTable": "Data Poli kosong",
      }
    });
  });
</script>

</html>