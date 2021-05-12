<?php
    class salir{
        public function cerrarSession(){
            session_destroy();
            header("location:../../../index.php");
        }
    }
?>