<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function EnviarCorreoInfo(string $nombre,string $correo,string $mensaje)
{
    $mail = new PHPMailer();
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true;                
    $mail->SMTPSecure = "TLS";              
    $mail->Host = "smtp.titan.email";       
    $mail->Port = 587;                     
    $mail->Username = "notificaciones@setranse.com";  
    $mail->Password = 'Nrmn5;MnEL.$KK';    
    $mail->CharSet = 'UTF-8';;
    $mail->SetFrom('notificaciones@setranse.com', "DATE'S LAB");
    $mail->AddAddress('soporte@spestechnical.com');
    $mail->IsHTML(true);     
    $mail->Subject = "Sugerencias Date's Lab";
    $mail->Body = "<h3>Mensaje de usuario</h3>
                    <p><strong>El Señor(a): </strong>" . $nombre . ", ha plasmado el siguiente mensaje:</p>
                    <p>".$mensaje."</p>
                    <p><strong>Contacto: </strong>" . $correo . "</p>";
    $mail->Send();

    return true;
}


//Envia Correo Sugerencia
if(isset($_POST["accion"])){
    if($_POST["accion"]=='enviaSugerencia'){
        $nombre = $_POST["nombreC"];
        $correo = $_POST["correoC"];
        $mensaje = $_POST["mensajeC"];

        EnviarCorreoInfo($nombre, $correo,$mensaje);
    }
}
