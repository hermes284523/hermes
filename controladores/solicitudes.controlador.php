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



    static public function ctrGuardarSolicitud($datos)
    {

        //si la fecha inicio es igual a la fecha fin el tipo_prestamo es "imediata"
        if ($datos["fechaInicio"] == $datos["fechaFin"]) {
            $tipo_prestamo = "imediata";
        } else {
            $tipo_prestamo = "reservada";
        }

        $datos = array(
            "fecha_inicio" => $datos["fechaInicio"],
            "fecha_fin" => $datos["fechaFin"],
            "tipo_prestamo" => $tipo_prestamo,
            "motivo" => $datos["observaciones"],
            "estado_prestamo" => "pendiente",
            "usuario_id" => $datos["idSolicitante"]
        );



        $tabla = "prestamos";
        $respuesta = ModeloSolicitudes::mdlGuardarSolicitud($tabla, $datos);
        return $respuesta;

    }


}