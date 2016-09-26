<div class="container" style="margin-bottom:30px">
		<div class="row">
			<div class="cols-xs-12 col-sm-6">
	     		<h1 class="text-center" style="margin:20 solid:#009966 ">Actividades</h1>
	    	</div>
	    	<div class="cols-xs-12 col-sm-4">
	     		<!--<form class="form-inline" action="<?php echo base_url()?>cactividades/guardar" method="post">-->
	     			<div class="form-group">
	     				<label for="buscar">Buscar</label>
	     				<input type="text" name="buscar" id="buscar" class="form-control">
	     			</div>
	     			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	     		<!--</form>-->
	    	</div>
	    	<div class="cols-xs-12 col-sm-2">
	     		<a class="btn btn-default form-control" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>
	    	</div>
		</div>
	</div>    	 
		<div class="container text-center" >
			<div class="row" >
					<table class="table table-bordered">
						<tr>
							<th class="text-center">Nombre</th>
							<th class="text-center">Fecha registro</th>
							<th class="text-center">Descripción</th>
							<th class="text-center">Estatus</th>
							<th class="text-center">Porcentaje</th>
							<th class="text-center">Editar </th>
						</tr>
					</table>
			</div>
		</div>


	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	  <div class="modal-dialog" role="document">
	  <form action="<?php echo base_url()?>cactividades/guardar" method="post">

	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Agregar actividad</h4>
	      	<div class="col-xs-7">
	      		<div class="from-gruop" align="left">
	      			<label>Nombre</label>
	      			<input name="txtnombre" class="form-control"> 
	      		</div>
	      	</div>
	      	<div class="col-xs-4 form-group" align="left">
	      			<label>Área</label>
	      			<select class="form-control" name="cmbactividades">
	      				<option value="1">Software</option>
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
	      	
	      		<button type="submit" class="btn btn-default" data-dismiss="modal">Guardar</button> 
	      		<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	      
	      </div>
	  </div>
	  </form>
	</div>
	</div>

	