<?php
    class UserC{
        public function IngresoC(){
            $user = $_POST["user"];
            
            $repuesta = UserM::IngresoM($user);

            if($repuesta["Nombre"] == $user){
                header("location:../../../vistas/panel.html");
            }
            
        }
    }
?>