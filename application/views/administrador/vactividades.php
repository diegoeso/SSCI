<div class="container" style="margin-bottom:30px">
		<div class="row">
			<div class="cols-xs-12 col-sm-6">
	     		<h1 class="text-center" style="margin:20 solid:#009966 ">Actividades</h1>
	    	</div>
	    	<div class="cols-xs-12 col-sm-4">
	     		<form class="form-inline">
	     			<div class="form-group">
	     				<label for="buscar">Buscar</label>
	     				<input type="text" name="buscar" id="buscar" class="form-control">
	     			</div>
	     			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	     		</form>
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

	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Agregar actividad</h4>
	      </div>
	    <div class="modal-body">
	      <!--Formulario de registro-->
	
			<form id="formulario" action="<?php echo base_url() ?>cactividades/guardar" method="post"> 
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label>
								Nombre de la actividad:
							</label> 
							<input name="nombreAct" id="nombreAct" class="form-control">
						</div>
						<label id="error_nombre" class="errores_formulario">Error, escriba un nombre valido</label>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label>
								Area
							</label>
							<select id="combo_area" name="carea">
								<option value="1">Redes</option>
								<option value="2">Redes 2</option>
							</select>
						</div>
					</div>
	    		</div>

	    			<div class="row">
	    				<div class="col-xs-12 col-md-4">
	    					<div class= "form-group">

								<label>
									Fecha de registro:
								</label>
								<input name="fechaReg"  id="fechaReg" type="date" class="form-control">
							</div>
							<label id="error_fechaReg" class="errores_formulario">Error, seleccione una fecha valida</label>
		    			</div>
	    				<div class="col-xs-12 col-md-4">
		    				<div class= "form-group">
								<label>
								 Fecha de inicio:
								</label> 
								<input name="fechaIni" id="fechaIni" type="date" class="form-control">
							</div>
							<!--<label id="error_fechaIni" class="errores_formulario">Error, seleccione una fecha valida</label>-->
	    				</div>
	    				<div class="col-xs-12 col-md-4">
		    				<div class= "form-group">
								<label>
								 Fecha de termino:
								</label> 
								<input name="fechaTer" id="fechaTer" type="date" class="form-control">
							</div>
							<!--<label id="error_fechaTer" class="errores_formulario">Error, seleccione una fecha valida</label>-->
	    				</div>
	    			</div>
			   	<div class="row">
			    	<div class="col-xs-12">
				    	<div class="form-group">
				    		<label>
								Descripción:
							</label> 
							<input type="text" name="descripcion" id="descripcion" class="form-control">
				    	</div>
			    	</div>
			    </div>
				<input type="submit" value="Guardar">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</form>
	  </div>
	</div>

	