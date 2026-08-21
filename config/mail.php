<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendContactEmail($name, $email, $phone, $company, $subject, $message)
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = getenv('MAIL_USERNAME');
        $mail->Password = getenv('MAIL_PASSWORD');

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // IMPORTANT:
        // Sender must be the same Gmail account used for SMTP authentication.
        $mail->setFrom(
            getenv('MAIL_USERNAME'),
            'Laboratory Website'
        );

        $mail->addAddress(
            getenv('MAIL_TO'),
            'Admin'
        );

        $mail->addReplyTo(
            $email,
            $name
        );

        $mail->isHTML(true);

        $mail->Subject = 'New Laboratory Website Enquiry';

        $mail->Body = '
        <div style="font-family:Arial,sans-serif;background:#f5f7fa;padding:30px">

            <div style="
                max-width:650px;
                margin:auto;
                background:#ffffff;
                border-radius:12px;
                overflow:hidden;
            ">

                <div style="
                    background:#123b5d;
                    color:#fff;
                    padding:25px;
                ">
                    <h2 style="margin:0">
                        New Laboratory Enquiry
                    </h2>
                </div>

                <div style="padding:30px">

                    <p>
                        You have received a new enquiry from your website.
                    </p>

                    <p>
                        <strong>Name:</strong>
                        ' . htmlspecialchars($name) . '
                    </p>

                    <p>
                        <strong>Email:</strong>
                        ' . htmlspecialchars($email) . '
                    </p>

                    <p>
                        <strong>Phone:</strong>
                        ' . htmlspecialchars($phone) . '
                    </p>

                    <p>
                        <strong>Company:</strong>
                        ' . htmlspecialchars($company) . '
                    </p>

                    <p>
                        <strong>Subject:</strong>
                        ' . htmlspecialchars($subject) . '
                    </p>

                    <p>
                        <strong>Message:</strong><br>
                        ' . nl2br(htmlspecialchars($message)) . '
                    </p>

                </div>

            </div>

        </div>
        ';

        $mail->AltBody =
            "New Laboratory Enquiry\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Company: $company\n" .
            "Subject: $subject\n\n" .
            "Message:\n$message";

        $mail->send();

        return true;

    } catch (Exception $e) {

        error_log('PHPMailer Error: ' . $mail->ErrorInfo);

        return false;
    }
}