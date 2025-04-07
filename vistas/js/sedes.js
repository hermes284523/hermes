$(document).on("click", ".btnEditarSede",function(){
    var idSede = $(this).attr("idSede");
    console.log("idSede : ",idSede);

    var datos = new FormData();
    datos.append("idSede", idSede); 
    $.ajax({
        url: "ajax/sedes.ajax.php",
        method : "POST",
        data : datos,
        cache : false,
        contentType : false,
        processData : false,
        dataType : "json",
        success : function(respuesta){
            console.log("respuesta :", respuesta)
            $(".#nombreEditSede").val(respuesta["nombre"]);
            $(".#direccionEditSede").val(respuesta["direccion"]);
            $(".#descripcionEditSede").val(respuesta["descripcion"]);
            $(".#idEditSede").val(respuesta["id"]);
        }
    })
})