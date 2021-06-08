<div class="contenedor_email">
    <h1>Enviar correos electronicos</h1>
    <?php
        if(isset($_GET["correo"])){
            $correo = $_GET["correo"];
            echo '<form action="" method="POST">
                <input class="element" type="text" name="destino_email" value="'.$correo.'" placeholder="Ejemplo  email@example.com">
                <input class="element" type="text" name="asunto" placeholder="Asunto">
                <textarea class="element"  name="mensaje" rows="3" cols="30"></textarea>
                <input class="element" type="submit" name="enviar" Value="Enviar">
            </form>';
        }else{
            echo '<form action="" method="POST">
                <input class="element" type="text" name="destino_email" placeholder="Ejemplo  email@example.com">
                <input class="element" type="text" name="asunto" placeholder="Asunto">
                <textarea class="element" name="mensaje" rows="3" cols="30"></textarea>
                <input class="element" type="submit" name="enviar" Value="Enviar">
            </form>';
        }
        if(isset($_POST["enviar"])){
            $correo = new Correo();
            $correo -> enviar_correoC();
        }  
        ?>
</div>