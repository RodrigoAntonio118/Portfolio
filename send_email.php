<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kayvazquez65@gmail.com';
        $mail->Password = 'jvdzevpyjgqfcdyk';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remitente y destinatario
        $mail->setFrom('kayvazquez65@gmail.com', 'Kay Vazquez');
        $mail->addAddress('kayvazquez65@gmail.com');
        $mail->addReplyTo($email, $name);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<html><body>"
            . "<h2>Nuevo mensaje de contacto</h2>"
            . "<p><strong>Nombre:</strong> $name</p>"
            . "<p><strong>Email:</strong> $email</p>"
            . "<p><strong>Empresa:</strong> $company</p>"
            . "<p><strong>Mensaje:</strong><br>$message</p>"
            . "</body></html>";

        $mail->send();
        echo "<script>alert('Mensaje enviado exitosamente.'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error: {$mail->ErrorInfo}'); window.location.href='index.php';</script>";
    }
}
?>
