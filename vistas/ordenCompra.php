<div class="container">
	  <SCRIPT language="javascript" src="js/adelantoDinero.js"> </SCRIPT>

		<div class="col-xs-6">
		<form>

			<legend>Seleccione:</legend>
			<div id="panel-Seleccion">
				<select class="form-control tabla-estilo" >
					<option>Resultado1</option>
					<option>Resultado2</option>
					<option>Resultado3</option>
				</select>
				<select class="form-control tabla-estilo" >
					<option>Acividad 1.1</option>
					<option>Actividad 1.2</option>
					<option>Actividad 1.3</option>
				</select>
			</div>
		
			<div >
		  		<label>ACTIVIDAD</label>
		  		<input class="form-control" name="username"  placeholder="CONSTRUCCION DE UN AULA" type="text" readOnly>
			</div><br>
			<div >
		  		<label>FECHA</label>
		  		<input class="form-control" id ="fecha" name="username"   type="text" readOnly>
		  		<script>
				var f = new Date();
				var dia = f.getDate();
				var mes = f.getMonth()+1;
				var anio = f.getFullYear();
				var fecha = ""+dia+"/"+mes+"/"+anio;
				
				$( "#fecha" ).attr( "value", fecha );

				
				</script>
				</div><br>

				<div >
		  		<label>RESPONSABLE</label>
		  		<input class="form-control" name="username"  value=<?php echo $_SESSION['usuario']?> type="text" readOnly>
				</div><br>
				<div >
		  		<label>DNI RESPONSABLE</label>
		  		<input class="form-control" name="username"  value=<?php echo $_SESSION['id']?> type="text" readOnly>
				</div><br>
				<div >
		  		<label>NÚMERO DE SOLICITUD</label>
		  		<input class="form-control" name="username"  value="" type="text" readOnly>
				</div><br>

			<table class="table table-hover" id="dataTable" CELLSPACING="1px" WIDTH="350px" >
				<caption>
					<label>PRESUPUESTO</label>
					
	    		</caption>
				<thead>
					<tr>
					
					  <th>Detalle</th>
					  <th>Unidad de Medida</th>
					  <th>Cantidad</th>
					  <th>Precio Unitario</th>
					  <th>Sub Total</th>
					  <th>Cantidad Solicitada</th>
					  <th>Dinero Restante</th>

					</tr>
			
				</thead>
				<tbody>
					<tr>
						
						<td><input  type="text" class="form-control tabla-estilo" value="CEMENTO" readOnly/ ></td>
						<td><input  type="text" class="form-control tabla-estilo" value="BOLSA" readOnly/> </td>
						<td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();"  value=22 readOnly/></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=22.50 readOnly/></td>
						<td><input type="number" class="form-control tabla-estilo" min="0" readonly id="resultado1" value=495></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell61" value=0 onChange="diferencia1(this.value);" /></td>
						<td><input  type="number" class="form-control tabla-estilo" readOnly id="cell71" value=495 /></td>


					</tr>
					<tr>
						
						<td><input  type="text" class="form-control tabla-estilo" value="FIERRO DE CONSTRUCCION" readOnly/ ></td>
						<td><input  type="text" class="form-control tabla-estilo" value="BARRA" readOnly/> </td>
						<td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell42" onChange="multiplicar();"  value=100 readOnly/></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell52" onChange="multiplicar();" value=20 readOnly/></td>
						<td><input type="number" class="form-control tabla-estilo" min="0" readonly id="resultado2" value=2000></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell62" value=0 onChange="diferencia2(this.value);" /></td>
						<td><input  type="number" class="form-control tabla-estilo" readOnly id="cell72" value=2000 /></td>

					</tr>
					<tr>
						
						<td><input  type="text" class="form-control tabla-estilo" value="LADRILLO" readOnly/ ></td>
						<td><input  type="text" class="form-control tabla-estilo" value="MILLAR" readOnly/> </td>
						<td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();"  value=2 readOnly/></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=250 readOnly/></td>
						<td><input type="number" class="form-control tabla-estilo" min="0" readonly id="resultado3" value=500></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell63" value=0 onChange="diferencia3(this.value);" /></td>
						<td><input  type="number" class="form-control tabla-estilo" readOnly id="cell73" value=500 /></td>

					</tr>
					<tr>
						
						<td><input  type="text" class="form-control tabla-estilo" value="ARENA" readOnly/ ></td>
						<td><input  type="text" class="form-control tabla-estilo" value="VOLQUETADA" readOnly/> </td>
						<td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();"  value=2 readOnly/></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=150 readOnly/></td>
						<td><input type="number" class="form-control tabla-estilo" min="0" readonly id="resultado4" value=300></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell64" value=0 onChange="diferencia4(this.value);" /></td>
						<td><input  type="number" class="form-control tabla-estilo" readOnly id="cell74" value=300 /></td>

					</tr>
					<tr>
						
						<td><input  type="text" class="form-control tabla-estilo" value="PIEDRAS" readOnly/ ></td>
						<td><input  type="text" class="form-control tabla-estilo" value="VOLQUETADA" readOnly/> </td>
						<td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();"  value=1 readOnly/></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=135 readOnly/></td>
						<td><input 	type="number" class="form-control tabla-estilo" min="0" readonly id="resultado5" value=135 /></td>
						<td><input  type="number" class="form-control tabla-estilo" min="0" id="cell65" value=0 onChange="diferencia5(this.value);" /></td>
						<td><input  type="number" class="form-control tabla-estilo" readOnly id="cell75" value=135 /></td>

					</tr>

				</tbody>
		</table>

		<div  id="total">
			<table class="table table-hover" id="totalFinal">
			<td><label>TOTAL </label></td>
			<td><input type="text" class= "form-control resultadoFinal" id="total1" type="number" min="0" readonly  value=3430 readOnly></td>
			<td><input type="text" class= "form-control resultadoFinal" id="total2" type="number" min="0" readonly  value=0 readOnly></td>
			<td><input type="text" class= "form-control resultadoFinal" id="total3" type="number" min="0" readonly  value=3430 readOnly></td>
			</table>
		</div>
		<input  class="btn btn-primary active" id="solicitar"data-toggle="modal" data-target="#myModal" value="Solicitar">

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
                    <p>Solicitud de Adelanto de Dinero enviada</p>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="alert('El POA se registro correctamente.')">Aceptar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
      
            </div>
          </div>

</div>