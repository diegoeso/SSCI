<!-- <script type="text/javascript" src= "jquery-1.7.1.min..js"></script> -->
<style type="text/css">
	.errores{
		/*-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.3);
		-moz-box-shadow: 0 0 10px rgba(0,0,0,0.3);
		-o-box-shadow: 0 0 10px rgba(0,0,0,0.3);*/
		background: red;
		box-shadow: 0 0 10px rgba(0,0,0,0.3);
		color: #fff;
		display: none;
		font-size: 10px;
		margin-top: -10px;
		margin-left: 150px;
		padding: 5px;
		width: 145px;
		height: 30px;
		position: absolute;
	}
</style>
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
          <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal" id="btnAgregarU" name="btnAgregarU"> Agregar <span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <br>
  </div>
</div> 
<!--FINDE TABLA DE VISUALIZACION DE DATOS-->
<div class="container">
  <div class="row container" >
    <table class="table table-bordered" id="tablaDatosU">
      <thead>

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
					<!-- <form name ="usuario" id="datos_usuario" method="POST" action="<?php// echo base_url()?>cusuario"> 					 -->
					<form name ="usuario" id="datos_usuario" method="POST" > 					
						<div class="row">
							<div class="col-xs-6"x>
								<div class="form-group" align="left">
									<label>Nombre:</label> 											
									<input type="text" class="form-control" id="txtnombre" name="txtnombre">					
									<label>Apellido paterno:</label> 
									<input type="text" class="form-control" id="txtap" name="txtap">	
									<label>Apellido materno:</label> 
									<input type="text" class="form-control" id="txtam" name="txtam">								
									<label>Sexo:</label>
									Hombre <input type="radio" name="sexo" value="H" id="sexo_hombre" >
									Mujer <input type="radio" name="sexo" value="M" id="sexo_mujer"><br>
									<div class="errores" id="esexo">Seleeciona sexo de usuario</div>
									<label>Matricula:</label> 
									<input type="text" class="form-control" id="txtmatricula" name="txtmatricula">
									<label>Correo electrónico:</label> 
									<input type="text" class="form-control" id="txtcorreo" name="txtcorreo">
									<label>Institución de procedencia:</label>
									<input type="text" name="txtinstitucion" class="form-control" id="txtinstitucion">
									<label>Semestre:</label> 
									<input maxlength="2" minlength="1" class="form-control" id="txtsemestre" name="txtsemestre">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group" align="left">
									<label>Teléfono:</label> 
									<input class="form-control" id="txttelefono" name="txttelefono" type="text">
									<label>Fecha de alta:</label>
									<input type="date"  class="form-control" id="txtalta" name="txtalta">
									<div class="errores" id="ealta">Ingrese fecha de alta</div>
									<label>Fecha de inicio:</label>
									<input type="date"  class="form-control" id="txtinicio" name="txtinicio">
									<label>fecha de término:</label>
									<input type="date" class="form-control"  id="txtfin" name="txtfin">
									<label>Tipo de usuario:</label><br>
									<select name="ctipousuario" id="cbotipousuario">										
										<option value="1">Servicio social</option>
										<option value="0">Administrador</option>
									</select><br>
									<label>Nombre de usuario:</label>
									<input type="text" class="form-control" name="txtuser" id="txtuser">
									<label>Contraseña:</label><br>
									<input type="password" name="txtpassword" id="txtpassword"><br>
									<label>Area:</label><br>
									<select id="cboArea" name="cboArea">									
									</select>									
								</div>
							</div>
						</div>
						<?php if (validation_errors()): ?><div><label class="label-warning "><?php echo validation_errors(); ?></label></div><?php endif; ?> 
						<div class="modal-footer">	        	
	        				<input type="submit" value="Guardar" name="btnGuardarU" id="btnGuardarU">
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
       				<input type="submit" value="Guardar" name="btnEditarU" id="btnEditarU">
				</div>
				</form>
			</div>	
		 </div>
	</div>
</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>