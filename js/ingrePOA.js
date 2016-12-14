
function crearCampos(cantidad){/*,campos dinamicos*/

  var div = document.getElementById("campos_dinamicos");
  while(div.firstChild)div.removeChild(div.firstChild); // remover elementos;
  for(var i = 1; i <= cantidad; i++){
    var salto = document.createElement("P");
    var input = document.createElement("input");
    var text = document.createTextNode("R" + i + ": ");
    input.setAttribute("name", "campo" + i);
    input.setAttribute("type","text");/* ("type","date")*/
    input.setAttribute("size", "12");
    input.className = "form-control tabla-estilo";
    input.id="numero"+i;
    salto.append(text);
    salto.append(input);

    var input2=document.createElement("input");
    input2.setAttribute("type","number");
    input2.setAttribute("onchange","mifunction('sele"+i+"',this.value,"+i+")");

    input2.min="0";
    input2.className = "form-control actividad";
    input2.id="numero1"+i;
    input2.placeholder="# Actividades";
    salto.append(input2);

    var select=document.createElement("select");

    select.setAttribute("id","sele" + i);

    select.className = "form-control combo";
    select.setAttribute("onchange","asignarIndiceActividad(this.value)"); 
    salto.append(select);
    div.append(salto);
  }
  console.log("hola");
}
         
      
function mifunction(idselect,valor,indice){
//console.log(idselect);
//console.log(valor);
  var cad="";
  var primerElemento="<option value=''>Selecciona</option>";

  for(var i = 1;  i <= valor; i++){
  cad=cad+"<option value='"+indice+"."+i+"'>Actividad "+indice+"."+i+"</option>";
  }

  cad=primerElemento+cad;
  document.getElementById(idselect).innerHTML=cad;
}

function asignarIndiceActividad(indice){
  $('#indiceActividad').text("ACTIVIDAD "+indice);
  $('#contenidoProyecto').hide();
  $('#contenidoActividad').show();
}

$('#botonAtras').click(function(){
    $('#contenidoActividad').hide();
    $('#contenidoProyecto').show();
});


