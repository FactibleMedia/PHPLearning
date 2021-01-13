<?php
    
    $correo = $_POST["correo"];
    $Asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $body = "Mensaje enviado por: " . $correo . "<br>
    Asunto: " . $Asunto . "<br>
    Mensaje: <br>" . $mensaje;
    $file = $_FILES["archivo"];
    
    
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    include("mailer/src/PHPMailer.php");
    include("mailer/src/SMTP.php");
    include("mailer/src/Exception.php");

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->setLanguage('es', 'mailer/language/');

    try {
        
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'plataforma@cpsc.edu.co';                     // SMTP username
        $mail->Password   = 'PlatEduc';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('plataforma@cpsc.edu.co', 'Plataforma CPSC');
        $mail->addAddress($correo, 'FM');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment($file["tmp_name"], $file["name"]);         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $Asunto;
        $mail->Body    = $body;
        $mail->Charset = 'UTF-8';
        
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
        echo 'El mensaje ha sido enviado';
        
    } catch (Exception $e) {
        
        echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }
?>

