

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
            var disponibles = respuesta["dispinibles"];

            $(".nuevoProducto").append(
                '<div class="card-body p-0 nuevoProducto">'+
                    '<div class="table-responsive">'+
                        '<table class="table m-0">'+
                        
                            '<tbody >'+
                                '<tr>'+
                                    '<td><a class="text-dark">Portatil</a></td>'+
                                    '<td><button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>'+
                                       '<strong>1</strong>'+
                                        '<button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>'+
                                    '</td>'+
                                    '<td>'+
                                       '<button class="badge badge-danger btn btn-sm btn-danger"><i class="fas fa-times"></i>'+
                                        '</button>'+
                                    '</td>'+
                                '</tr>'+





                            '</tbody>'+
                        '</table>'+
                    '</div>'+
                '</div>'
                    )
            
        }
    })
})
