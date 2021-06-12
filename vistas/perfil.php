<div class="divContenedor">
    <div class="divperfil">
        <?php
            $mostrarFoto = new ActivoC();
            $mostrarFoto -> mostrarPerfilC(); 
        ?>
    </div>
    <!-- div Mostramos los datos del usuario -->
    <div class="divform">
        <form action="" method="POST">
            <?php
                $mostra = new ActivoC();
                $mostra -> MostrarC();
            ?>
        </form>
    </div>
    <!-- Div para actualizar el nombre de la empresa-->
    <div class="divEm">
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nombre de la empresa</label>
            <input type="text" name="empresa" placeholder="Nuevo nombre" require>
            <label>Logo</label>
            <input type="file" name="myLogo">
            <input type="submit" name="actualizar" value="Actualizar">
        </form>
    </div>
</div>
<?php
    if(isset($_POST["actualizar"])){
        #instancia para actualizar nombre de la empresa
        $name = $_POST["empresa"];
        $actualizar = new ActivoC();
        $actualizar->EmpresaC($name);

    }elseif (isset($_POST["actualizarU"])){
        #Instancia para actualizar lo datos del usuario
        $actualizarU = new ActivoC();
        $actualizarU -> ActualizarC();
    }elseif(isset($_POST["actualizarF"])){
        #Instacia para cambiar la foto de perfil
        $actualizarFoto = new ActivoC();
        $actualizarFoto -> perfilC();
    }
?>

