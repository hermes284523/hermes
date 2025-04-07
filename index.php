<?php


require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/sedes.controlador.php";

require_once "modelos/sedes.modelo.php";
require_once "modelos/usuario.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();