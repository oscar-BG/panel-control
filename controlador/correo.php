<?php
    class Correo{
        public function enviar_correoC(){
            $para = $_POST["destino_email"];
            $asunto = $_POST["asunto"];
            $msg = $_POST["mensaje"];

            require("..\lib\PHPMailer-master\src\PHPMailer.php");
            require("..\lib\PHPMailer-master\src\SMTP.php");

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP(); // enable SMTP

            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);

            //Configuración básica
            $mail->Username = "example@gmail.com"; //correo
            $mail->Password = "contraseña-de-tu-correo-electronico"; //La contraseña
            $mail->SetFrom("example@gmail.com"); //mismo correo x2
            $mail->Subject = $asunto; //El asunto obtenido del formulario
            $mail->Body = $msg; //El mensaje obtenido del formulario
            $mail->AddAddress($para); //El destinatario obtenido del formulario

            if(!$mail->Send()) { //Si no se pudo enviar
                echo "Mailer Error: " . $mail->ErrorInfo; //Entonces muestra un mensaje de error
            } else {
                echo "<h1> Correo enviado con exito </h1>"; //Si se pudo enviar entonces muestra correo enviado
            }
        }
    }
?>