<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // Crear el objeto email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '34473877794fce';
        $mail->Password = 'a79c7b1d1540f9';

        $mail->setFrom('cuentas@rca.com');
        $mail->addAddress('cuentas@rca.com', 'RCA.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en RCA, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'> Confirmar Cuenta</p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        // Enviar el email
        $mail->send();
    }

    public function enviarInstrucciones(){
         // Crear el objeto email

         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'sandbox.smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = '34473877794fce';
         $mail->Password = 'a79c7b1d1540f9';
 
         $mail->setFrom('cuentas@rca.com');
         $mail->addAddress('cuentas@rca.com', 'RCA.com');
         $mail->Subject = 'Reestablece tu password';
 
         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';
 
         $contenido = "<html>";
         $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, da click en el siguiente enlace para hacerlo.</p>";
         $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'> Reestablecer Password</p>";
         $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
         $contenido .= "</html>";
         $mail->Body = $contenido;
 
         // Enviar el email
         $mail->send();
    }
}
