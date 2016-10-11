<<<<<<< HEAD
		<div class="row">
			<!--TABLA DE VISUALIZACOIN DE DATOS-->
			<div class="container text-center" >
		 		<div class="cols-xs-5">
		         	<h1 align="left">Usuarios</h1>        
		         	<div class="col-xs-13" align="right">
		         		<br>
		         		<label>Nombre:</label>
		         		<input type="text" name="txtBuscarU" id="txtBuscarU">          		         			
		    	     	<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>		    	    	 
		    		</div>
		    		<br>
					<div class="cols-xs-13">					
						<div class="row" >
							<table class="table table-bordered" id="tablaDatosU">
								<thead>
									<tr>
										<td class="text-center">Nombre</td>
										<td class="text-center">Correo electrónico</td>
										<td class="text-center">Teléfono</td>
										<td id="tel" class="text-center">Area asignada</td>
										<td class="text-center">Editar</td>
									</tr>
								</thead>							
								<tbody>	
								</tbody>										
							</table>					
						</div>
					</div>				
				</div>
			</div>
=======
<div class="row">
  <div class="container text-center">
    <div class="row">
        <div class="col-xs-6 col-md-4">
          <h3 align="left">Prestador</h3>
        </div>
        <div class="col-xs-12 col-md-8" align="right">
          <br>
          <label>Nombre: </label>
          <input type="text" name="txtBuscarU" id="txtBuscarU">
           <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscarA"><span class="glyphicon glyphicon-search"></span></a>
          <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <br>
  </div>
</div> 
>>>>>>> origin/master
<!--FINDE TABLA DE VISUALIZACION DE DATOS-->
<div class="container">
  <div class="row container" >
    <table class="table table-bordered" id="tablaDatosU">
      <thead>
        <!-- <tr>
          	<td class="text-center">Nombre</td>
			<td class="text-center">Correo electrónico</td>
			<td class="text-center">Teléfono</td>
			<td id="tel" class="text-center">Area asignada</td>
			<td class="text-center">Opción</td>
        </tr> -->
      </thead>              
    </table>          
  </div>
 </div>

	<!--FORMULARIO AGREGAR DATOS-->

	<div class="modal fade" tabindex="1" role="dialog" id="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
	      		<div class="modal-header">
	        		<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">Nuevo usuario de servicio social</h4>
	      		</div>
	    		<div class="modal-body">
	      		<!--Formulario de registro-->	
					<form name ="usuario" id="datos_usuario" method="POST" action="<?php echo base_url()?>cusuario/validar"> 					
						<div class="row">
							<div class="col-xs-6"x>
								<div class="form-group" align="left">
									<label>Nombre:</label> 									 
									<input type="text" class="form-control" id="nombre_usuario" name="txtnombre" >
									<label>Apellido paterno:</label> 
									<input type="text" class="form-control" id="apellido_paterno" name="txtap">
									<label>Apellido materno:</label> 
									<input type="text" class="form-control" id="apellido_materno" name="txtam">
									<label>Sexo:</label>
									Hombre <input type="radio" name="sexo" value="H" id="sexo_hombre" >
									Mujer <input type="radio" name="sexo" value="M" id="sexo_mujer"><br>
									<label>Matricula:</label> 
									<input type="text" class="form-control" id="matricula_usuario" name="txtmatricula">
									<label>Correo electrónico:</label> 
									<input type="text" class="form-control" id="correo_usuario" name="txtcorreo">
									<label>Institución de procedencia:</label>
									<input type="text" name="txtinstitucion" class="form-control" id="institucion_usuario">
									<label>Semestre:</label> 
									<input type="number" class="form-control" id="semestre_usuario" name="txtsemestre">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group" align="left">
									<label>Teléfono:</label> 
									<input type="number" class="form-control" id="telefono_usuario" name="txttelefono">
									<label>Fecha de alta:</label>
									<input type="date"  class="form-control" id="fecha_alta" name="txtalta">
									<label>Fecha de inicio:</label>
									<input type="date"  class="form-control" id="fecha_inicio" name="txtinicio">
									<label>fecha de término:</label>
									<input type="date" class="form-control"  id="fecha_fin" name="txtfin">
									<label>Tipo de usuario:</label><br>
									<select name="ctipousuario">										
										<option value="1">Servicio social</option>
										<option value="0">Administrador</option>
									</select><br>
									<label>Nombre de usuario:</label>
									<input type="text" class="form-control" name="txtuser" id="user_usuario">
									<label>Contraseña:</label><br>
									<input type="password" name="txtpassword" id="pass_usuario"><br>
									<label>Area:</label><br>
									<select id="cboArea" name="cboArea">										
									</select>									
								</div>
							</div>
						</div>
						<?php if (validation_errors()): ?><div><label class="label-warning "><?php echo validation_errors(); ?></label></div><?php endif; ?> 
						<div class="modal-footer">	        	
	        				<input type="submit" value="Guardar" name="">
	      				</div>
					</form>
				</div>
	      		
	    	</div>
	  	</div>
	</div>

	</div>
	 </div>
	<!-- FIN DEl NAV DE CONTENEDOR PRINPAL-->

	<!-- Editar -->
<div class="modal fade" tabindex="1" role="dialog" id="editar">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
	   		<div class="modal-header">
	       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       		<h4 class="modal-title">Editar usuario de servicio social</h4>
	   		</div>
	  		<div class="modal-body">
	   		<!--Formulario de registro-->	
			<form name ="usuarioE" id="datos_usuario" method="POST" action="<?php echo base_url()?>cusuario/editar"> 
				<div class="row">
					<div class="col-xs-6"x>
						<div class="form-group" align="left">
							<input type="text" class="hidden" id="id" name="id">
							<label>Nombre:</label> 
							<input type="text" class="form-control" id="txtnombresele" name="txtnombresele">
							<label>Apellido paterno:</label> 
							<input type="text" class="form-control" id="txtapsele" name="txtapsele">
							<label>Apellido materno:</label> 
							<input type="text" class="form-control" id="txtamsele" name="txtamsele">
							<label>Sexo:</label>
							Hombre <input type="radio" name="sexosele" value="H" id="sexoseleh" >
							Mujer <input type="radio" name="sexosele" value="M" id="sexoselem"><br>
							<label>Matricula:</label> 
							<input type="text" class="form-control" id="txtmatriculasele" name="txtmatriculasele">
							<label>Correo electrónico:</label> 
							<input type="text" class="form-control" id="txtcorreosele" name="txtcorreosele">
							<label>Institución de procedencia:</label>
							<input type="text" name="txtinstitucionsele" class="form-control" id="txtinstitucionsele">
							<label>Semestre:</label> 
							<input type="number" class="form-control" id="txtsemestresele" name="txtsemestresele">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group" align="left">
							<label>Teléfono:</label> 
							<input type="tel" class="form-control" id="txttelefonosele" name="txttelefonosele">
							<label>Fecha de alta:</label>
							<input type="date"  class="form-control" id="txtaltasele" name="txtaltasele">
							<label>Fecha de inicio:</label>
							<input type="date"  class="form-control" id="txtiniciosele" name="txtiniciosele">
							<label>fecha de término:</label>
							<input type="date" class="form-control"  id="txtfinsele" name="txtfinsele">
							<label>Tipo de usuario:</label><br>
							<select name="ctipousuariosele" id="ctipousuariosele">						
								<option value="1">Servicio social</option>
								<option value="0">Administrador</option>
							</select><br>
							<label>Nombre de usuario:</label>
							<input type="text" class="form-control" name="txtusersele" id="txtusersele">
							<label>Contraseña:</label><br>
							<input type="password" name="txtpasswordsele" id="txtpasswordsele"><br>
							<label>Area:</label><br>
							<select id="cboAreasele" name="cboAreasele">	</select>		
						</div>
					</div>
				</div>
				<div class="modal-footer">	        	
       				<input type="submit" value="Guardar" name="">
				</div>
				</form>
			</div>	
		 </div>
	</div>
</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>