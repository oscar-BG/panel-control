<div>
    <form action="" method="POST">
        <select  name="selectDB">
            <option value="1">Nombre</option>
            <option value="2">Nombre</option>
          </select>
          <br>
          <input type="text" name="nameTable" placeholder="Nombre de la tabla">
          <input type="number" name="numColum" placeholder="Numero de columnas">
          <br>
          <input type="submit" name="createT" value="Crear">
    </form>
    <?php
         if(isset($_POST['createT'])){
            $nameTable = $_POST["nameTable"];
            $numColum = $_POST["numColum"];
            $matrix = array();
            $contar = 1;
            echo '<table border="1px">
                    <tr>
                        <th>Nombre </th>
                        <th>Tipo</th>
                        <th>Tamaño</th>
                        <th>Predeterminado</th>
                    </tr>';
                    for ($i=1; $i <= $numColum ; $i++) { 
                     echo "<tr>";
                     for ($a=1; $a <=4 ; $a++) { 
                         echo '<td><input type="text" name="$contar++"></td>';
                     }
                     echo "</tr>";   
                    }
            echo '</table>';

            echo "<button>Guardar</button>";
         }
    ?>
</div>