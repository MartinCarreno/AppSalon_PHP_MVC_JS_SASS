<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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

        try {
            //crear objeto de email
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '***ELIMINADO***';
            $mail->Password = '***ELIMINADO***';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            $mail->setFrom('cuentas@appsalon.com');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Confirma tu cuenta';

            //set HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = "<html>";
            $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmala presionando el siguiente enlace:</p>";
            $contenido .= "<a href='http://localhost:8000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
            $contenido .= "<p>Si tu no solicitaste esta cuenta puedes ignorar el mensaje</p>";
            $contenido .= "</html>";

            $mail->Body = $contenido;

            //enviar email
            $mail->send();
            //mensaje de testeo
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function enviarInstrucciones() {
        try {
            //crear objeto de email
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '***ELIMINADO***';
            $mail->Password = '***ELIMINADO***';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            $mail->setFrom('cuentas@appsalon.com');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Reestablece tu password';

            //set HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = "<html>";
            $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has Solicitado Reestablecer tu password, sigue el siguiente enlace para hacerlo:</p>";
            $contenido .= "<a href='http://localhost:8000/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";
            $contenido .= "<p>Si tu no solicitaste este cambio puedes ignorar el mensaje</p>";
            $contenido .= "</html>";

            $mail->Body = $contenido;

            //enviar email
            $mail->send();
            //mensaje de testeo
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
