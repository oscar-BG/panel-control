<?php
    session_start();
    require_once "controlador/rutasC.php";
    require_once "controlador/userC.php";
    require_once "modelos/userM.php";
    
    $rutas = new RutasControlador();
    $rutas -> Login();
?>