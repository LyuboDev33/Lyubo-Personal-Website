<?php

namespace App\Http\Controllers;

use Pecee\SimpleRouter\SimpleRouter;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController
{
    public function sendContactForm(): void
    {
        $request = SimpleRouter::request();

        $name = trim((string) $request->getInputHandler()->value('name', ''));
        $phone = trim((string) $request->getInputHandler()->value('phone', ''));

        $errors = [];

        // Validate name
        if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
            $errors['name'][] = 'Моля, въведете валидно име.';
        }

        // Validate phone number
        if (
            strlen($phone) > 25 ||
            !preg_match('/^\+?[0-9\s().-]+$/', $phone) ||
            strlen(preg_replace('/\D/', '', $phone)) < 7 ||
            strlen(preg_replace('/\D/', '', $phone)) > 15
        ) {
            $errors['phone'][] = 'Моля, въведете валиден телефонен номер.';
        }

        // Return validation errors
        if (!empty($errors)) {
            SimpleRouter::response()
                ->httpCode(422)
                ->json([
                    'success' => false,
                    'errors' => $errors,
                ]);

            return;
        }

        $mail = new PHPMailer(true);

        try {

            // Locate the .env file
            $envPath = dirname(__DIR__, 3) . '/.env';

            if (!is_file($envPath) || !is_readable($envPath)) {
                throw new \RuntimeException('The .env file could not be loaded.');
            }

            // Load SMTP configuration
            $config = parse_ini_file(
                $envPath,
                false,
                INI_SCANNER_RAW
            );

            if ($config === false) {
                throw new \RuntimeException('Invalid .env configuration.');
            }

            // Validate required configuration keys
            $requiredKeys = [
                'SMTP_HOST',
                'SMTP_USERNAME',
                'SMTP_PASSWORD',
                'SMTP_RECIPIENT',
                'SMTP_PORT',
            ];

            foreach ($requiredKeys as $key) {
                if (!isset($config[$key]) || $config[$key] === '') {
                    throw new \RuntimeException(
                        "Missing SMTP configuration: {$key}"
                    );
                }
            }

            // Configure SMTP
            $mail->isSMTP();
            $mail->Host = $config['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $config['SMTP_USERNAME'];
            $mail->Password = $config['SMTP_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = (int) $config['SMTP_PORT'];
            $mail->CharSet = 'UTF-8';
            $mail->Timeout = 15;
            $mail->SMTPDebug = 0;

            // Sender
            $mail->setFrom(
                $config['SMTP_USERNAME'],
                'Lubodev.com'
            );

            // Recipient
            $mail->addAddress($config['SMTP_RECIPIENT']);

            // Email content
            $mail->isHTML(false);

            $mail->Subject = 'Ново запитване от Lubodev.com';

            $mail->Body = "Получено е ново запитване от страницата с пакетни оферти.\n\n"
                . "Име: {$name}\n"
                . "Телефон: {$phone}\n\n"
                . "Дата: " . date('d.m.Y H:i:s');

            // Send email
            $mail->send();
        } catch (\Throwable $e) {

            error_log(
                'EmailController error: ' . $e->getMessage()
            );

            SimpleRouter::response()
                ->httpCode(500)
                ->json([
                    'success' => false,
                    'message' => 'Възникна грешка при изпращането на запитването.',
                ]);

            return;
        }

        // Return successful response
        SimpleRouter::response()
            ->httpCode(200)
            ->json([
                'success' => true,
                'message' => 'Благодаря за вашето запитване! Ще се свържа с вас възможно най-скоро.',
            ]);
    }
}
