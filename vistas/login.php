<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fontdiner+Swanky&display=swap" rel="stylesheet">
    <title>Login</title>

    <style>
        /*Guardar diseños en un archivo .css*/
        body{
            /*background-color: #495057;*/
            background-color: #6c757d;
        }
        input[type=text], select {
          width: 50%;
          padding: 12px 20px;
          margin: 8px 0;
          display: block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-left: auto;
          margin-right: auto;
        }
        input[type=password], select {
          width: 50%;
          padding: 12px 20px;
          margin: 8px 0;
          display: block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-left: auto;
          margin-right: auto;
        }
        
        input[type=submit] {
          width: 30%;
          background-color: #598392;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        
        
        input[type=submit]:hover {
          background-color: #124559;
        }
        
        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
          width: 50%;
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        p{
            text-align: center;
            font-size: 30px;
            font-family: 'Bree Serif', serif;
        }
        h1{
            text-align: center;
            font-family: 'Bree Serif', serif;
        }
        span{
            font-family: 'Fontdiner Swanky', cursive;
            color: red;
            font-size: 40px;
        }
        </style>
</head>
<body>
    <?php
      $logo = new ActivoC();
      $logo -> get_logoC();
    ?>
    

    <!--Formulario Login-->
    <div>
        <form action= "" method="POST">
            <p>Inicio de sesion</p>
            <input type="text" name="user" required="required" placeholder="Ingrese su Usuario">
            <input type="password" name="pass" required="required" placeholder="Ingrese su contraseña">
            <input type="submit" name="send" value="Ingresar">
        </form>
    </div>
</body>
</html>

<?php
  #llamamos a la instacion ingreso cuando demos click al input user
  if(isset($_POST["user"])){
    $ingreso = new UserC();
    $ingreso -> IngresoC();
  }
?>