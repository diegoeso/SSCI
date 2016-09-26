<div class="row">
	<div class="container text-center">
		<div class="row">
  			<div class="col-xs-6 col-md-4">
  				<h3 align="left">Actividades</h3>
  			</div>
  			<div class="col-xs-12 col-md-8" align="right">
  				<br>
	  			<label>Nombre: </label>
	  			<input type="text" name="txtbuscar">
	  			 <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscarAc"><span class="glyphicon glyphicon-search"></span></a>
	  			<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>
  			</div>
		</div>
		<br>
		<div class="container">
				<div class="row container" >
					<table class="table table-bordered" id="tablaDatos">
						<tr>
							<td class="text-center">Nombre</td>
							<td class="text-center">Descripción</td>
							<td class="text-center">Fecha Registro</td>
							<td class="text-center">Fecha Inicio</td>
							<td id="tel" class="text-center">Fecha Termino</td>
							<td class="text-center">Área</td>
							<td class="text-center">Opcion</td>
						</tr>			
					</table>					
				</div>
			</div>
			<select name="cboAreas" id="cboAreas">
				
			</select>
	</div>
</div>
<br>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div>
			<div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Area</h4>
		        </div>
			    <div class="modal-body">
			        <!--Formulario de registro-->
			  
			      	<form method="post" action="<?php echo base_url()?>cactividades/guardar">
				    	<div class="col-xs-7">
				      		<div class="from-gruop" align="left">
				      			<label>Nombre</label>
				      			<input name="txtnombre" class="form-control"> 
				      		</div>
	      				</div>
				      	<div class="col-xs-4 form-group" align="left">
				      		<label>Área</label>
				      		<select class="form-control" name="cmbactividades" id="cboArea">
				      			
				      		</select>
				      	</div>
				      	<div class="col-xs-4 form-group" align="left">
				      		<label>Fecha de Registro</label>
				      		<input type="date" name="txtdateReg" class="form-control">
				      	</div>
				      	<div class="col-xs-4 form-group" align="left">
				      		<label>Fecha de Inicio</label>
				      		<input type="date" name="txtdateIni" class="form-control">
				      	</div>
				      	<div class="col-xs-4 form-group" align="left">
				      		<label>Fecha de Termino</label>
				      		<input type="date" name="txtdateTer" class="form-control">
				      	</div>
				      	<div class="col-xs-12 form-group" align="left">
				      		<label>Descripción</label>
				      		<input type="text" name="txtdesc" class="form-control" >
				      	</div>
				      	<div align="right">
				      		<input type="submit" value="Guardar" name="">
	      					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				      	</div>
			    	</form>
			    </div>
  			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
		var baseurl = "<?php echo base_url();?>";
</script>
