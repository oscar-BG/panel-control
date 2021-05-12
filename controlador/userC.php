<?php
    class UserC{
        public function IngresoC(){
            $user = $_POST["user"];
            $_SESSION["user"] = $user;
            $repuesta = UserM::IngresoM($user);

            if($repuesta["Nombre"] == $user){
                header("location:../../../vistas/panel.php");
            }
        }
    }
?>