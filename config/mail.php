<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendContactEmail($name, $email, $phone, $company, $subject, $message)
{
    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();

        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // YOUR EMAIL
        $mail->Username   = 'rohityada5577@gmail.com';

        // GMAIL APP PASSWORD
        $mail->Password   = 'mulchand@123';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom(
            'rohit5577#gmail.com',
            'Laboratory Website'
        );

        // Receiver
        $mail->addAddress(
            'rohit5577@gmail.com',
            'Admin'
        );

        // Reply to customer
        $mail->addReplyTo($email, $name);

        // Email content
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
                box-shadow:0 5px 25px rgba(0,0,0,.08);
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

                    <table style="width:100%;border-collapse:collapse">

                        <tr>
                            <td style="padding:12px;border-bottom:1px solid #eee">
                                <strong>Name</strong>
                            </td>

                            <td style="padding:12px;border-bottom:1px solid #eee">
                                ' . htmlspecialchars($name) . '
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;border-bottom:1px solid #eee">
                                <strong>Email</strong>
                            </td>

                            <td style="padding:12px;border-bottom:1px solid #eee">
                                ' . htmlspecialchars($email) . '
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;border-bottom:1px solid #eee">
                                <strong>Phone</strong>
                            </td>

                            <td style="padding:12px;border-bottom:1px solid #eee">
                                ' . htmlspecialchars($phone) . '
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;border-bottom:1px solid #eee">
                                <strong>Company</strong>
                            </td>

                            <td style="padding:12px;border-bottom:1px solid #eee">
                                ' . htmlspecialchars($company) . '
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;border-bottom:1px solid #eee">
                                <strong>Subject</strong>
                            </td>

                            <td style="padding:12px;border-bottom:1px solid #eee">
                                ' . htmlspecialchars($subject) . '
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:12px;vertical-align:top">
                                <strong>Message</strong>
                            </td>

                            <td style="padding:12px">
                                ' . nl2br(htmlspecialchars($message)) . '
                            </td>
                        </tr>

                    </table>

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

        return false;
    }
}