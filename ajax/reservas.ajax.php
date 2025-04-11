<?php

    require_once "../controladores/reservas.controlador.php";
    require_once "../modelos/reservas.modelo.php";

    class AjaxReservas{
        public $idReserva;

        public function ajaxReserva(){
            $item = "id";
            $valor = $this -> idReserva;

            $respuesta = ControladorReservas::ctrMostrarReservas($item, $valor);

            echo json_encode($respuesta);
        }
    }

    if(isset($_POST["idReserva"])){
        $editar = new AjaxReservas();
        $editar -> idSede = $_POST["idReserva"];
        $editar -> ajaxReserva();
    }

?>