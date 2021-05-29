<?php
    class salir{
        public function cerrarSession(){
            session_destroy();
            header("location:../../../index.php");
            #redireccionar con javascritp funcion para destruir la variable session y ir al login
        }
    }
?>