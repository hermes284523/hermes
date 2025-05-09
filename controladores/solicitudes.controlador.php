<?php



class ControladorSolicitudes
{

    static public function ctrMostrarEquiposDisponible($fechaInicio, $fechaFin)
    {
        $respuesta = ModeloSolicitudes::mdlMostrarEquiposDisponible($fechaInicio, $fechaFin);
        return $respuesta;
    }

    static public function ctrMostrarHistorial($item, $valor)
    {
        $tabla = "prestamos";
        $item = "usuario_id";
        $valor = $_SESSION["id_usuario"];
        $respuesta = ModeloSolicitudes::mdlMostrarHistorial($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrMostrarDetalleHistorial($item, $valor)
    {
        $tabla = "prestamos";
        $respuesta = ModeloSolicitudes::mdlMostrarDetalleHistorial($tabla, $item, $valor);

        return $respuesta;
    }



    static public function ctrGuardarSolicitud($datos)
    {

        //si la fecha inicio es igual a la fecha fin el tipo_prestamo es "imediata"
        if ($datos["fechaInicio"] == $datos["fechaFin"]) {
            $tipo_prestamo = "Inmediato";
        } else {
            $tipo_prestamo = "Reservado";
        }

        $datos = array(

            "idSolicitante" => $datos["idSolicitante"],
            "tipo_prestamo" => $tipo_prestamo,
            "fechaInicio" => $datos["fechaInicio"],
            "fechaFin" => $datos["fechaFin"],
            "estado_prestamo" => "pendiente",
            "observaciones" => $datos["observaciones"],
            "equipos" => $datos["equipos"] ?? []  // importante para el foreach

        );



        $tabla = "prestamos";
        $respuesta = ModeloSolicitudes::mdlGuardarSolicitud($tabla, $datos);
        return $respuesta;

    }


}