<?php

class ControladorReservas{
    static public function ctrMostrarReservas($item, $valor){
        $tabla = "equipos_r";
        $respuesta = ModeloReservas::mdlMostrarReservas($tabla, $item, $valor);

        return $respuesta;
    }
    static public function ctrMostrarReservasH($item, $valor){
        $tabla = "herramienta_r";
        $respuesta = ModeloReservas::mdlMostrarReservasH($tabla, $item, $valor);

        return $respuesta;
    }
}