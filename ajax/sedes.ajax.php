<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxUsuarios {
    
    public $idUsuario;
    
    public function ajaxVerUsuario() {
        $item = "id";
        $valor = $this->idUsuario;
        
        $respuesta = ControladorUsuarios::ctrMostrarUsuario($item, $valor);
        
        echo json_encode($respuesta);
    }
}

// Verificar si se está solicitando ver un usuario
if(isset($_POST["idUsuario"]) && isset($_POST["accion"]) && $_POST["accion"] == "verUsuario") {
    $verUsuario = new AjaxUsuarios();
    $verUsuario->idUsuario = $_POST["idUsuario"];
    $verUsuario->ajaxVerUsuario();
}