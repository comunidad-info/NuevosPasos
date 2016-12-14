
$('#irAPOA').click(function(e){
    e.preventDefault();
    var area =  $(this).data('area');
    var url = $(this).attr('href');
    $('.derecha').load(url);
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


function devolverIndiceArreglo(valor){
    var indice = 0;
    for (var i = 0; i < respuesta.length; i++) {
        if(respuesta[i].codProyecto === valor){
            indice = i;
        }
    }
    return indice;
}

