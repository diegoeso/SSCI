<div class="container">
<form action="<?php echo base_url();?>centradasalida/Rentrada" method="post">
	<label>ID</label>
	<input type="text" value="<?php echo $this->session->userdata('s_idUsuario');?>">
	<label>Fecha</label>
	<?php 
		 $fecha = date('Y-m-d');
		 $hora = date('H:i:s');
	 ?>
	<input type="text" name="txtfecha" value="<?php echo $fecha?>">
	<label>Hora</label>
	<input type="text" name="txthora" value="<?php echo $hora?>">
	<input type="submit">

</form>
	
	<label for="">Areas</label>
	<select name="" id="cboArea">
		<option value="">Arela</option>

	</select>
<h1>prestador</h1>

</div>

<script type="text/javascript">
		var baseurl1 = "<?php echo base_url();?>";
</script>
<script src=" <?php echo base_url();?>js/jarea.js"></script>
