<div class="container">
	  <SCRIPT language="javascript" src="js/rendicion.js"> </SCRIPT>

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

				<select class="form-control tabla-estilo" >
					<option>Solicitud 1</option>
					<option>Solicitud 2</option>
					<option>Solicitud 3</option>
				</select><br>
			</div><br>
		
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

				<table  class="table table-condensed" id="dataTable" CELLSPACING="1px" WIDTH="350px" >
				<caption>
					<label>PRESUPUESTO</label>
					<i class="fa fa-plus-circle" aria-hidden="true" onclick="addRow('dataTable');"></i>
		    		<i class="fa fa-minus-circle" aria-hidden="true" onclick="deleteRow('dataTable');"></i>
	    		</caption>
				<thead>
					<tr>
					<td></td>
					<td>Nro</td>
					  <td >Fecha</td>
					  <td colspan="2">Comprobante</td>
					  <td>Descripcion</td>
					  <td>Importe</td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Tipo</td>
						<td colspan="2">Nro</td>
						<td></td>
						<td></td>
					</tr>
			
				</thead>
				<tbody>
				 
					<tr>
						<TD><INPUT id="check" type="checkbox" NAME="chk"/></TD>
						<td><input  type="text" class="form-control numero" id="numero1" value="1" readOnly/></td>
					
						<td><input  type="date" class="form-control tabla-estilo"/></td>
						<td><select class="form-control tabla-estilo" >
							<option>FACTURA</option>
							<option>BOLETA</option>
							<option>RECIBO-EGRESO</option>
							<option>DJ</option>
						</select></td>
						<td><input  type="text" 	class="form-control tabla-estilo" /></td>
						<td><input  type="text" 	class="form-control descripcion" /></td>
						<td><input  type="text" 	class="form-control tabla-estilo" /></td>
						<!--<td><input  type="number"  	class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();" value=0 /></td>
						<td><input  type="number" 	class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=0 /></td>
						<td><input 	type="number" 	class="form-control tabla-estilo" min="0" readonly id="resultado1" value=0></td>
-->
					</tr>

				</tbody>
				
		</table>


		<div id="saldo-total">
		<div>
			
			<label> MONTO TOTAL DE GASTOS S/.</label>
			<input type="text" class= "form-control tabla-estilo " id="total1" type="number" min="0" readonly   readOnly>
		</div><br>
		<div id="total-otorgado">
			<label> TOTAL OTORGADO S/.</label>
			<input type="text" class= "form-control tabla-estilo" id="total2" type="number" min="0" readonly  readOnly>
		</div><br>

		<div id="saldo">
			<label> SALDO S/.</label>
			<input type="text" class= "form-control tabla-estilo" id="total3" type="number" min="0" readonly  readOnly>
			</table>
		</div><br>
		<input  class="btn btn-primary active" id="solicitar"data-toggle="modal" data-target="#myModal" value="Rendir">
	</div>
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
                    <p>Rendicion de Adelanto de Dinero enviada</p>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="alert('El POA se registro correctamente.')">Aceptar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
      
            </div>
          </div>




</div>