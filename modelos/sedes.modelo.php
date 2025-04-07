<?php
require_once "conexion.php";
class ModeloSedes{
    /*=============================================
    MOSTRAR SEDES
    =============================================*/
    static public function mdlMostrarSedes($tabla, $item, $valor)
    {
        if ($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->closeCursor();
        $stmt = null;
    }

    /*=============================================
    CREAR SEDES
    =============================================*/

    static public function mdlCrearSede($tabla,$datos)
    {
        try{
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,direccion,descripcion) VALUES (:nombre, :direccion, :descripcion)");

            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

            if($stmt->execute()){
                return "ok";
            }else{
                $errorInfo = $stmt->errorInfo();
                return "error:".$errorInfo[2];
            }
        } catch (PDOException $e) {
            return "error:".$e->getMessage();
        }finally{
            $stmt->closeCursor();
            $stmt=null;
        }
    }
}