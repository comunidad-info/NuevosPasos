function multiplicar(){

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
               cell1.appendChild(element1);


               var cell2 = row.insertCell(1);
               var element2 = document.createElement("input");
               element2.type = "text";
               element2.className = "form-control tabla-estilo";
               cell2.appendChild(element2);


               var cell3 = row.insertCell(2);
               var element3 = document.createElement("input");
               element3.type = "text";
               element3.className = "form-control tabla-estilo";
               cell3.appendChild(element3);

               var cell4 = row.insertCell(3);
               var element4= document.createElement("input");
               element4.className = "form-control tabla-estilo";
               element4.type = "number";
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
          }

function prueba(){
      var meta = parseFloat(document.getElementById("meta").value);
      var m1 = parseFloat(document.getElementById("enero").value);
      var m2 = parseFloat(document.getElementById("febrero").value);
      var m3 = parseFloat(document.getElementById("marzo").value);
      var m4 = parseFloat(document.getElementById("abril").value);
      var m5 = parseFloat(document.getElementById("mayo").value);
      var m6 = parseFloat(document.getElementById("junio").value);
      var m7 = parseFloat(document.getElementById("julio").value);
      var m8 = parseFloat(document.getElementById("agosto").value);
      var m9 = parseFloat(document.getElementById("septiembre").value);
      var m10 = parseFloat(document.getElementById("octubre").value);
      var m11 = parseFloat(document.getElementById("noviembre").value);
      var m12 = parseFloat(document.getElementById("diciembre").value);
      var general = m1 + m2 + m3 + m4 + m5 + m6 + m7 + m8 + m9 + m10 + m11 + m12;
      console.log(general);
      if (general == meta) {
        alert("Meta Alcanzada");
      }
    }