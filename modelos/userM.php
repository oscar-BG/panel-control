<?php
    require_once 'conexionBD.php';
    class UserM extends ConexionBD{
        static public function IngresoM($user){

            $pdo = ConexionBD::cBD()->prepare("SELECT Nombre, clave FROM usuarios WHERE Nombre=:nombre");
            $pdo -> bindParam(":nombre", $user, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }
    }
?>