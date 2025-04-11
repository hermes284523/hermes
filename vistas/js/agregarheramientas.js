$(document).on("click", ".btnReserva", function(){
    var idReserva = $(this).attr("idReserva");
    //console.log("idSede: ", idSede); //Bloque de código para capturar el atributo id de sedes.php

    var datos = new FormData();
    datos.append("idReserva", idReserva);
    $.ajax({
        url: "ajax/reservas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("Respuesta: ", respuesta);
            
        }
    })
});
