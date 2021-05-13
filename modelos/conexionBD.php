<?php
    class ConexionBD{
        static public function cBD(){
            try{
                $bd = new PDO("mysql:host=localhost;dbname=panel_control","root","");
                return $bd;
            }catch(PDOException $e){
                echo "ERROR AL CONECTAR ". $e -> getMessage();
            }
        }
    }
?>