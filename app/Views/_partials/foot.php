  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
 
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
<!-- Is Active Script -->
<?php if (isset($is_active)) : ?>
<script src="<?= base_url('assets/js/script-admin-' . $is_active . '.js') ?>"></script>
<?php endif ?>
</body>
</html>