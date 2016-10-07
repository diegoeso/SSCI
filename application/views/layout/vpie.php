	<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
  	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
 	<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
 	<script src=" <?php echo base_url()?>assets/bootstrap/js/jquery.js"></script>
	<script src=" <?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>
	<!-- <script src=" <?php echo base_url()?>assets/bootstrap/js/jusuarios.js"></script> -->
	<!-- <script src=" <?php echo base_url()?>assets/bootstrap/js/validaciones.js"></script> -->
	<?php if ($this->uri->segment(1)=='careas'): ?>
		<script src=" <?php echo base_url()?>js/jarea.js"></script>
	<?php endif ?>

	<!-- se llaman los script donde ejecutan las consultas para las tablas-->
	<?php if ($this->uri->segment(1)=='cactividades'): ?>
		<script src=" <?php echo base_url()?>js/jactividades.js"></script>
		<script src=" <?php echo base_url()?>js/jareaB.js"></script>
		
	<?php endif ?>

	<?php if ($this->uri->segment(1)=='casignaciones'): ?>
		<script src=" <?php echo base_url()?>js/jasignaciones.js"></script>
	<?php endif ?>
	<?php if ($this->uri->segment(1)=='cusuario'): ?>
		<script src=" <?php echo base_url()?>js/jusuarios.js"></script>
		<script src=" <?php echo base_url()?>js/jareaB.js"></script>
	<?php endif ?>
	<script type="text/javascript">
		var baseurla = "<?php echo base_url();?>";
	</script>
	<!-- <script src=" <?php echo base_url()?>js/validaciones.js"></script> -->
	<!-- <script src=" <?php echo base_url()?>js/jusuarios.js"></script> -->
	<script type="text/javascript">
		var baseurl = "<?php echo base_url();?>";
	</script>

</body>
</html>