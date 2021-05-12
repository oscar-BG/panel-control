<?php
    class UserC{
        public function IngresoC(){
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $_SESSION["user"] = $user;
            $repuesta = UserM::IngresoM($user);

            if($repuesta["Nombre"] == $user && $repuesta["clave"] == $pass){
                header("location:../../../vistas/panel.php");
            }
        }
    }
?>