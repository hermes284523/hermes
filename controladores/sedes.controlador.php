<?php
class ControladorSedes {

    /*=============================================
    MOSTRAR SEDES
    =============================================*/
    static public function ctrMostrarSedes($item, $valor)
    {
        $tabla = "sedes";
        $respuesta = ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);
        return $respuesta;
    }

    /*=============================================
    CREAR SEDES
    =============================================*/


    static public function ctrCrearSede()
    {
        if (isset($_POST["nombreSede"]) && isset($_POST["direccionSede"] ) && isset($_POST["descripcionSede"])) {
           if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/' , $_POST["nombreSede"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["direccionSede"])) {
                $tabla = "sedes";
                $datos = array(
                    "nombre" => $_POST["nombreSede"],
                    "direccion" => $_POST["direccionSede"],
                    "descripcion" => $_POST["descripcionSede"]
                );
                $respuesta = ModeloSedes::mdlCrearSede($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "¡La sede ha sido creada correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                } else {
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡Error al crear la sede!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                    window.location = "sedes";
                                }
                            });
                        </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then((result) => {
                            if (result.value) {
                                window.location = "sedes";
                            }
                        });
                    </script>';
                
                }

                
            
            }
        }
}