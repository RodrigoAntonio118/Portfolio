<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json'); // Indica que la respuesta será JSON

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
        $mail->Password = 'jvdzevpyjgqfcdyk'; // Contraseña de aplicación
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

        // Respuesta JSON para el script
        echo json_encode(['success' => true]);
        exit;
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => "Error al enviar el mensaje: {$mail->ErrorInfo}"
        ]);
        exit;
    }
}
?>
