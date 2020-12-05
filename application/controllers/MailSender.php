<?php defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


class MailSender extends CI_Controller {


    /**
     * Send email service
     * @param null $senderName
     * @param $recipient
     * @param $subject
     * @param $bodyText
     * @param $bodyHtml
     */
	public static function sendEmailSMTP($senderName = null, $recipient, $subject, $bodyText, $bodyHtml)
	{
        $sender = 'info@brandzlab.co.uk';
        $senderName = 'BrandzLab';

        // Replace smtp_username with your Amazon SES SMTP user name.
        $usernameSmtp = 'AKIA6HKBB35SOTHMIOPN';

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = 'BAUs67Txi5jBPGmtYCIb/wFbQQqGCLEMEYn92w1tZpKc';

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.eu-west-2.amazonaws.com';
        $port = 587;
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username = $usernameSmtp;
            $mail->Password = $passwordSmtp;
            $mail->Host = $host;
            $mail->Port = $port;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $bodyHtml;
            $mail->AltBody = $bodyText;
            $mail->Send();
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}"; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}"; //Catch errors from Amazon SES.
        }
	}
}
