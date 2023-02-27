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
    $mail->Username = "dateslab@spestechnical.com";  
    $mail->Password = 'dateslab2023.@';    
    $mail->CharSet = 'UTF-8';;
    $mail->SetFrom('dateslab@spestechnical.com', "DATE'S LAB");
    $mail->AddAddress('contacto@spestechnical.com');
    $mail->IsHTML(true);     
    $mail->Subject = "Sugerencias Date's Lab";
    $mail->Body = "<h3>Mensaje de usuario</h3>
                    <p><strong>El Señor(a): </strong>" . $nombre . ", ha plasmado el siguiente mensaje:</p>
                    <p>".$mensaje."</p>
                    <p><strong>Contacto: </strong>" . $correo . "</p>";
    $mail->Send();

    return true;
}


function EnviarCorreoUsuario(string $nombreC,string $correoC)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "TLS";
    $mail->Host = "smtp.titan.email";       
    $mail->Port = 587;                     
    $mail->Username = "dateslab@spestechnical.com";  
    $mail->Password = 'dateslab2023.@';    
    $mail->CharSet = 'UTF-8';
    $mail->SetFrom('dateslab@spestechnical.com', "Notificaciones");
    $mail->AddAddress($correoC);
    $mail->IsHTML(true);
    $mail->Subject = "Date's Lab Informa";
    $mail->Body = "<h2>Gracias por la sugerencia!</h2>
               <img src='https://spestechnical.com/assets/img/NotifiD.jpg' width='100%'/>
               <hp><strong>Agradecemos tu valioso aporte: </strong>" . $nombreC . "</p>
               <h4>Desde la administración de Date's Lab tomamos muy enserio los aportes de los usuarios para poder destacar
               como la mejor app para citas del mundo.</h4>
               <p><strong>Agradecemos no responder este correo.</strong></p>";
    $mail->Send();
}


//Envia Correo Sugerencia
if(isset($_POST["accion"])){
    if($_POST["accion"]=='enviaSugerencia'){
        $nombre = $_POST["nombreC"];
        $correo = $_POST["correoC"];
        $mensaje = $_POST["mensajeC"];

        EnviarCorreoInfo($nombre, $correo,$mensaje);
        EnviarCorreoUsuario($nombre,$correo);
    }
}
