$(document).on('click', '.btnEliminar', function () {
    $(this).closest('tr').remove();

    var idReserva = $(this).attr("idReserva");
    $("button.recuperar[idReserva='"+idReserva+"']").removeClass("btn-default");
    $("button.recuperar[idReserva='"+idReserva+"']").addClass("btn-prymary btnReserva");

    var idHerramienta = $(this).attr("idHerramienta");
    $("button.devolver[idHerramienta='"+idHerramienta+"']").removeClass("btn-default");
    $("button.devolver[idHerramienta='"+idHerramienta+"']").addClass("btn-prymary btnReservaH");
});

$(".table tbody").on("click", "button.btnReserva", function () {
    var idReserva = $(this).attr("idReserva");
    console.log("idReserva", idReserva)

    $(this).removeClass("btn-primary btnReserva");
    $(this).addClass("btn-default")

    var datos = new FormData();
    datos.append("idReserva", idReserva)
    $.ajax({
        url: "ajax/reservas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            var descripcion = respuesta["descripcion"];
            var disponibles = respuesta["disponibles"];


            // Verificar si ya existe un producto con ese ID en la lista
            if ($('.nuevoProducto[data-idReserva="' + idReserva + '"]').length > 0) {
                alert('Este producto ya fue agregado.');
                return;
            }

            // Agregar el nuevo producto
            $(".nuevoProducto").append(
                
                
                
                '<tr>' +
                '<td><a class="text-dark">' + descripcion + '</a></td>' +
                '<td>' +
                '<button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>' +
                '<strong>1</strong>' +
                '<button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>' +
                '</td>' +
                '<td>' +
                '<button class="badge badge-danger btn btn-sm btnEliminar" idReserva = "'+idReserva+'"><i class="fas fa-times"></i></button>' +
                '</td>' +
                '</tr>' 
                 
                
            );


        }
    })
})

$(".table tbody").on("click", "button.btnReservaH", function () {
    var idHerramienta = $(this).attr("idHerramienta");
    console.log("idHerramienta", idHerramienta)

    $(this).removeClass("btn-primary btnReservaH");
    $(this).addClass("btn-default")

    var datos = new FormData();
    datos.append("idHerramienta", idHerramienta)
    $.ajax({
        url: "ajax/reservas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta1) {
            var descripcion = respuesta1["descripcion"];
            var disponibles = respuesta1["disponibles"];


            // Verificar si ya existe un producto con ese ID en la lista
            if ($('.nuevoProducto[data-idHerramienta="' + idHerramienta + '"]').length > 0) {
                alert('Este producto ya fue agregado.');
                return;
            }

            // Agregar el nuevo producto
            $(".nuevoProducto").append(
                
                
                
                '<tr>' +
                '<td><a class="text-dark">' + descripcion + '</a></td>' +
                '<td>' +
                '<button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>' +
                '<strong>1</strong>' +
                '<button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>' +
                '</td>' +
                '<td>' +
                '<button class="badge badge-danger btn btn-sm btnEliminar" idHerramienta = "'+idHerramienta+'"><i class="fas fa-times"></i></button>' +
                '</td>' +
                '</tr>' 
                 
                
            );


        }
    })
})
