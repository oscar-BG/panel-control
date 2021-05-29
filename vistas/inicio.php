<?php
    #Consultamos el nombre de la empresa
    if(isset($_GET["menu"])){
        $nombreE = new ActivoC();
        $nombreE -> NombreC();
    }
?>
<!--Pestaña inicio -->
<div class="divContenedor">
    <div class="divem">
        <img src="imagenes/logo.png" alt="Logo de la empresa" title="Logo de la empresa" width="100%">
    </div>
    
    <div class="divem">
        <p><?php echo $_SESSION["empresa"] ?></p>
    </div>
</div>
