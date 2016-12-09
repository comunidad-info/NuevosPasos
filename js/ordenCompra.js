/*function multiplicar(){

	  	m1=parseFloat(document.getElementById("cell41").value);
	  	m2=parseFloat(document.getElementById("cell51").value);
	  	r=m1*m2;
	  	document.getElementById("resultado1").value=r;
      document.getElementById("total1").value=r;
	}



      function addRow(tableID) {

               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               var row = table.insertRow(rowCount);
               //console.log("num  filas:"+rowCount);

               var cell1 = row.insertCell(0);
               var element1 = document.createElement("input");
               element1.type = "checkbox";
               element1.readOnly = true;
               cell1.appendChild(element1);


               var cell2 = row.insertCell(1);
               var element2 = document.createElement("input");
               element2.type = "text";
               element2.readOnly = true;
               element2.className = "form-control tabla-estilo";
               cell2.appendChild(element2);


               var cell3 = row.insertCell(2);
               var element3 = document.createElement("input");
               element3.type = "text";
               element3.readOnly = true;
               element3.className = "form-control tabla-estilo";
               cell3.appendChild(element3);

               var cell4 = row.insertCell(3);
               var element4= document.createElement("input");
               element4.className = "form-control tabla-estilo";
               element4.type = "number";
               element4.readOnly = true;
       		   element4.min="0";
       		   element4.id="cell4"+rowCount;
       		   element4.onchange = function (){
       		   	var x = document.getElementById("cell4"+rowCount).value;
       		   	var y = document.getElementById("cell5"+rowCount).value;
       		   	var z = x*y;
       		   	document.getElementById("resultado"+rowCount).value = z;
       		   	//console.log(z);
       		 
               		var suma=0;
       		   		for (var i =1; i <=rowCount; i++) {

       		   			suma=suma+parseFloat(document.getElementById("resultado"+i).value);
       		   		};

       		   		document.getElementById("total1").value=suma;
               		//console.log("suma :" +suma);

       		   };
               cell4.appendChild(element4);
               

               var cell5 = row.insertCell(4);
               var element5 = document.createElement("input");
               element5.className = "form-control tabla-estilo";
               element5.type = "number";
               element5.min="0";
               element5.id="cell5"+rowCount;
               element5.readOnly = true;
               element5.onchange = function (){
       		   	var x = document.getElementById("cell4"+rowCount).value;
       		   	var y = document.getElementById("cell5"+rowCount).value;
       		   	var z = x*y;
       		   	document.getElementById("resultado"+rowCount).value = z;
       		   	//console.log(z);
       		   	var suma=0;
       		   		for (var i =1; i <=rowCount; i++) {

       		   			suma=suma+parseFloat(document.getElementById("resultado"+i).value);
       		   		};

               		document.getElementById("total1").value=suma;
               		//console.log("suma :" +suma);
       		   };
               cell5.appendChild(element5);

               var cell6 = row.insertCell(5);
               var element6 = document.createElement("input");
               element6.className = "form-control tabla-estilo";
               element6.type = "number";
               element6.min="0";
               element6.value = 0;
               element6.id="resultado"+rowCount;
               element6.readOnly = true;
               cell6.appendChild(element6);

               var cell7 = row.insertCell(6);
               var element7 = document.createElement("input");
               element7.type = "number";
               element7.readOnly = true;
               element7.className = "form-control tabla-estilo";
               cell7.appendChild(element7);

               var cell8 = row.insertCell(7);
               var element8 = document.createElement("input");
               element8.type = "number";
               element8.readOnly = true;
               element8.className = "form-control tabla-estilo";
               cell8.appendChild(element8);

           
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
               var suma=0;       	
              for (var i =1; i <=rowCount+1; i++){
                if (document.getElementById("resultado"+i)==null) {
                  console.log("valor nulo");
                }else{
                  suma = suma + parseFloat(document.getElementById("resultado"+i).value);
                }
              }
                document.getElementById("total1").value=suma;
              }
               catch(e) {

                    alert(e);
               }
          }*/

          function diferencia1(valor){
  var disponible = parseFloat(document.getElementById("resultado1").value);
  var diferencia = disponible - valor;
  document.getElementById("cell71").value = diferencia;
  subtotal();
  cantidadSolicitada();
  cantidadRestante();
}
function diferencia2(valor){
  var disponible = parseFloat(document.getElementById("resultado2").value);
  var diferencia = disponible - valor;
  document.getElementById("cell72").value = diferencia;
  subtotal();
  cantidadSolicitada();
  cantidadRestante();
}
function diferencia3(valor){
  var disponible = parseFloat(document.getElementById("resultado3").value);
  var diferencia = disponible - valor;
  document.getElementById("cell73").value = diferencia;
  subtotal();
  cantidadSolicitada();
  cantidadRestante();
}
function diferencia4(valor){
  var disponible = parseFloat(document.getElementById("resultado4").value);
  var diferencia = disponible - valor;
  document.getElementById("cell74").value = diferencia;
  subtotal();
  cantidadSolicitada();
  cantidadRestante();
}
function diferencia5(valor){
  var disponible = parseFloat(document.getElementById("resultado5").value);
  var diferencia = disponible - valor;
  document.getElementById("cell75").value = diferencia;
  subtotal();
  cantidadSolicitada();
  cantidadRestante();
}

function subtotal(){
 var suma = parseFloat(document.getElementById("resultado1").value) + 
            parseFloat(document.getElementById("resultado2").value) +
            parseFloat(document.getElementById("resultado3").value) +
            parseFloat(document.getElementById("resultado4").value) +
            parseFloat(document.getElementById("resultado5").value);
document.getElementById("total1").value = suma;
}

function cantidadSolicitada(){

var suma =  parseFloat(document.getElementById("cell61").value) + 
            parseFloat(document.getElementById("cell62").value) +
            parseFloat(document.getElementById("cell63").value) +
            parseFloat(document.getElementById("cell64").value) +
            parseFloat(document.getElementById("cell65").value) ;
document.getElementById("total2").value = suma;

}
function cantidadRestante(){
var suma =  parseFloat(document.getElementById("cell71").value) + 
            parseFloat(document.getElementById("cell72").value) +
            parseFloat(document.getElementById("cell73").value) +
            parseFloat(document.getElementById("cell74").value) +
            parseFloat(document.getElementById("cell75").value) ;
document.getElementById("total3").value = suma;


}


