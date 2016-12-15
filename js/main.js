
$('#irAPOA').click(function(e){
    e.preventDefault();
    var area =  $(this).data('area');
    $.get(
            'vistas/ingresarPoa.php', function(contenido){
                $('.derecha').html(contenido);
            }
    );
    cargarCombo(area);
});

function cargarCombo(codArea){
    $.get(
            'prueba.php?area='+codArea,
            function(datos){
                //console.log(datos);
                respuesta = $.parseJSON(datos);
                //console.log(respuesta.length);
                $('#selectListaProyectos').append('<option>Seleccione Proyecto</option>');
                //console.log(respuesta);
                for (i = 0; i <respuesta.length; i++) {
                    //console.log("-"+i);
                    //console.log("-"+respuesta[i].nombreProyecto);
                    $('#selectListaProyectos').append('<option value='+respuesta[i].codProyecto+'>'+respuesta[i].nombreProyecto+'</option>');
                }

            }
    );
}

$('#selectListaProyectos').on('change',function() {
        var indice = devolverIndiceArreglo($(this).val());        
        $('#inputObjGeneral').val(respuesta[indice].objGralProyecto);
        $('#inputObjEspecifico').val(respuesta[indice].objEspcProyecto);

});

$('#botonGuardarActividad').on('click',function() {
    $("#dataTable tbody tr").each(function (){
            var campo1, campo2, campo3,campo4;
            $(this).children("td").find(':input').each(function (index2){
                switch (index2) 
                {
                    case 1: campo1 = $(this).val();
                        break;
                    case 2: campo2 = $(this).val();
                        break;
                    case 3: campo3 = $(this).val();
                        break;
                    case 4: campo4 = $(this).val();
                        break;
                }
            });
//            console.log(campo1 + ' - ' + campo2 + ' - ' + campo3 + ' - '+ campo4);
            var parametros = {
                "campo1" : campo1,
                "campo2" : campo2,
                "campo3" : campo3,
                "campo4" : campo4
            };
            $.ajax({
                    data:  parametros,
                    url:   'controlador/ControladorGeneral.php',
                    type:  'post',
                    beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) {
                            $("#resultado").html(response);
                    }
            });
        });
});

function devolverIndiceArreglo(valor){
    var indice = 0;
    for (var i = 0; i < respuesta.length; i++) {
        if(respuesta[i].codProyecto === valor){
            indice = i;
        }
    }
    return indice;
}

