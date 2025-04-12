<?php

    require_once "../controladores/reservas.controlador.php";
    require_once "../modelos/reservas.modelo.php";

    class AjaxReservas{
        public $idReserva;
        public $idHerramienta;

        public function ajaxReserva(){
            $item = "id";
            $valor = $this -> idReserva;

            $respuesta = ControladorReservas::ctrMostrarReservas($item, $valor);

            echo json_encode($respuesta);
        }

        public function ajaxHerramienta(){
            $item = "id_herramienta";
            $valor = $this -> idHerramienta;

            $respuesta1 = ControladorReservas::ctrMostrarReservasH($item, $valor);

            echo json_encode($respuesta1);
        }
    }

    if(isset($_POST["idReserva"])){
        $editar = new AjaxReservas();
        $editar -> idReserva = $_POST["idReserva"];
        $editar -> ajaxReserva();
    }
    if(isset($_POST["idHerramienta"])){
        $editar = new AjaxReservas();
        $editar -> idHerramienta = $_POST["idHerramienta"];
        $editar -> ajaxHerramienta();
        
    }

?>