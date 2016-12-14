<div class="container">

<script type="text/javascript" src="js/ingrePOA.js"></script>



<h1 id="titulo-POA">POA - Area Promesa</h1>
          <div class="col-xs-6">
          <form action="proceso.php" method="post" >
          <div class="form-group">
          <label for="usr" class="Ingresar-POA">Proyecto</label>
          <input type="text" class="form-control" placeholder="Nombre del Proyecto" />
          </div>
          
          <div class="form-group">
          <label for="usr" class="Ingresar-POA">Objetivo General</label>
          <input type="text" class="form-control" >
          </div>

          <div class="form-group">
          <label for="usr" class="Ingresar-POA">Objetivo Especifico</label>
          <input type="text" class="form-control" >
          </div>

          
          <div class="form-group">
          <label for="usr" class="Ingresar-POA">Resultados</label><br>
          <label for="usr" id="OE" class="Ingresar-POA">Cantidad:</label>
          <input type="number"  class="form-control" id="cantidad" min="0" value="" onChange="crearCampos(this.value);"  /><br><br><!--.form.cantidad.value,'1'    onChange="crearCampos(this.value);"-->
          <div id="campos_dinamicos" ></div>
          </div><br>
 
       
            <input  class="btn btn-primary active" data-toggle="modal" data-target="#myModal" value="Guardar Proyecto">
          
            
          </form>

          </div>

    



          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Mensaje del Administrador</h4>
                </div>
                <div class="modal-body">
                    <p>Sus datos se almacenarán en la Base de Datos</p>
                    <p>¿Esta seguro de los datos ingresados?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="alert('El POA se registro correctamente.')">Aceptar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
      
            </div>
          </div>
</div>
  
