<div class="container">
	  <SCRIPT language="javascript">
          function addRow(tableID) {

               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               var row = table.insertRow(rowCount);

               var cell1 = row.insertCell(0);
               var element1 = document.createElement("input");
               element1.type = "checkbox";
               cell1.appendChild(element1);

               var cell2 = row.insertCell(1);
               var element2 = document.createElement("input");
               element2.type = "text";
               cell2.appendChild(element2);

               var cell3 = row.insertCell(2);
               var element3= document.createElement("input");
               element3.type = "text";
               cell3.appendChild(element3);

               var cell4 = row.insertCell(3);
               var element4 = document.createElement("input");
               element4.type = "text";
               cell4.appendChild(element4);

               var cell5 = row.insertCell(4);
               var element5 = document.createElement("input");
               element5.type = "text";
               cell5.appendChild(element5);


              	var cell6 = row.insertCell(5);
	            var element6 = document.createElement("select");
	            var opcion1 = document.createElement("option");
	            opcion1.innerHTML = "Selecciona";
	            var opcion2 = document.createElement("option");
	            opcion2.innerHTML = "Solicitud de Pedido";
	            var opcion3 = document.createElement("option");
	            opcion3.innerHTML = "Orden de Compra";
	            element6.appendChild(opcion1);
	            element6.appendChild(opcion2);
	            element6.appendChild(opcion3);
	            cell6.appendChild(element6);


	          

           
          }

          function deleteRow(tableID) {

               try {
               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               for(var i=0; i<rowCount; i++) {

                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];

                    if(null != chkbox && true == chkbox.checked) {
                         table.deleteRow(i);
                         rowCount--;
                         i--;
             	 }

               }

               }catch(e) {

                    alert(e);
               }
          }


			
     </SCRIPT>

     <h1>POA-Promesa-Proyecto</h1>
	<div>
	
		<label>Actividad: </label><br>
		<input class="texto" type="text" name="username" size="25" placeholder="nombre de la actividad">
		<br><br>
		<ul>
			<li>
				<label>Periodo:</label><br>

				<select multiple class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				


			</li>
			<br>	
			<li>
				<label>	Indicadores:</label><br>
				<input class="texto"  type="text" name="username" size="10" placeholder="">
			</li>
			<br>
			<li>
				<label>	Poblacion:</label><br>
				<input class="texto" type="text" name="username" size="10" placeholder="">
			</li>
			<br>
			<li>
				<label>	Observaciones:</label><br>
				<textarea type="text" name="username" size="10" placeholder=""></textarea>
			</li>	
		</ul>
		
		
		<INPUT class="boton "type="submit" value="Guardar">
		<INPUT class="boton" type="reset" value="Cancelar">

			<br><br>

		


		<table class="list-group" id="dataTable" border="1" CELLSPACING="1px" WIDTH="350px" >
			<caption>Presupuesto
			<i class="fa fa-plus-circle" aria-hidden="true" onclick="addRow('dataTable');"></i>
    		<i class="fa fa-minus-circle" aria-hidden="true" onclick="deleteRow('dataTable');"></i></caption>
			<thead>
			<tr>
			<th></th>
			  <th>Insumo</th>
			  <th>Cantidad</th>
			  <th>Unidad</th>
			  <th>Precio Unitario</th>
			  <th>Tipo</th>
			</tr>
			</thead>
			<tbody>
			 
			<tr>
			<TD><INPUT id="check" type="checkbox" NAME="chk"/></TD>
			  <td><input class"texto" type="text" /></td>

			  <td><input class"texto" type="text" /></td>
			  <td><input class"texto" type="text" /></td>
			  <td><input class"texto" type="text" /></td>
			  <td><select name="selCombo" SIZE="1" > 
			  	  	<option id="opcion1" value="Seleccion">Selecciona</option>
					<OPTION id="opcion2" value="SPedido">Solicitud de Pedido</OPTION>
					<OPTION id"opcion3" value="OCompra">Orden de Compra</OPTION>
 
				</select>
				</td>
			</tr>

			</tbody>
			
			
		</table>
		<br><br><br>
		<INPUT class="btn-grande"typ
</div>