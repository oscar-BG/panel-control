<?php
    class ConexionBD{
        static public function cBD(){
            try{
                $bd = new PDO("mysql:host=nombre-de-host;dbname=nombre-base-de-datos","usuario","contraseña");
                return $bd;
            }catch(PDOException $e){
                echo "ERROR AL CONECTAR ". $e -> getMessage();
            }
        }
    }
?>