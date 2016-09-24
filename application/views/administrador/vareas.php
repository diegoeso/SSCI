<div class="container" style="margin-bottom:30px">
    <div class="row">
      <div class="cols-xs-12 col-sm-6">
          <h1 class="text-center" style="margin:20 solid:#009966 ">Areas</h1>
        </div>
        <div class="cols-xs-12 col-sm-4">
          <div class="col-xs-13" align="right">
                <label>Nombre:</label>
                <input type="text" name="nombre">                                         
                <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscarA"><span class="glyphicon glyphicon-search"></span></a>
                <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>                 
            </div>
        </div>
    </div>
  </div>       
    <div class="container">
            <div class="row" >
              <table class="table table-bordered" id="tablaDatos">
                <thead>
                  <tr>
                    <td class="text-center">Nombre Area</td>
                    <td class="text-center">Descripcion</td>
                    <td class="text-center">Responsable</td>
                    <td class="text-center">Opción</td>
                  </tr>
                </thead>              
              </table>          
            </div>
          </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Area</h4>
        </div>
      <div class="modal-body">
        <!--Formulario de registro-->
  
      <form action="<?php echo base_url()?>careas/guardar" method="post">
        <div class="row">
          <div class="col-xs-7">
            <div class="form-group">
              <label>
                Nombre del area:
              </label> 
              <input name="nombreArea" class="form-control">
            </div>
            <label id="error_nombre" class="errores_formulario">Error, escriba un nombre valido</label>
          </div>
          </div>
           <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label>
                Descripción:
              </label> 
              <textarea name="descripcion" class="form-control" rows="5"></textarea>
              </div>
          <label id="error_descripcion" class="errores_formulario">Error, solo se aceptan numeros y letras</label>
            </div>
          </div>
          <div class="row">
          <div class="col-xs-7">
            <div class="form-group">
              <label>
                Responsable:
              </label> 
              <input name="responsable" class="form-control">
            </div>
            <label id="error_nombre" class="errores_formulario">Error, escriba un nombre valido</label>
          </div>
          </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Guardar</button>-->
            <!--<input type="submint" value="Guardar">-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
    </div>
  </div>