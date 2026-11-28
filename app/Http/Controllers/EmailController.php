<?php

namespace App\Http\Controllers;

use Pecee\SimpleRouter\SimpleRouter;

class EmailController
{
    /**
     * Send an email from the contact form.
     *
     */
    public function sendContactForm()
    {
        $request = SimpleRouter::request();

        $name = trim((string) $request->getInputHandler()->value('name', ''));
        $phone = trim((string) $request->getInputHandler()->value('phone', ''));

        $errors = [];

        // Validate the name.
        if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
            $errors['name'][] = 'Моля, въведете валидно име.';
        }

        // Validate the phone number.
        if (
            strlen($phone) > 25 ||
            !preg_match('/^\+?[0-9\s().-]+$/', $phone) ||
            strlen(preg_replace('/\D/', '', $phone)) < 7 ||
            strlen(preg_replace('/\D/', '', $phone)) > 15
        ) {
            $errors['phone'][] = 'Моля, въведете валиден телефонен номер.';
        }

        // Return validation errors.
        if (!empty($errors)) {

            SimpleRouter::response()
                ->httpCode(422)
                ->json([
                    'success' => false,
                    'errors' => $errors,
                ]);

            return;
        }

        // Email configuration.
        $to = 'lyubomir.stoyanov33@gmail.com';
        $from = 'contact@lubodev.com';

        $subject = 'Ново запитване от Lubodev.com';

        // Email content.
        $message = "Получено е ново запитване от страницата с пакетни оферти.\n\n";
        $message .= "Име: {$name}\n";
        $message .= "Телефон: {$phone}\n\n";
        $message .= "Дата: " . date('d.m.Y H:i:s');

        // Email headers.
        $headers = [
            'From' => $from,
            'Reply-To' => $from,
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Content-Transfer-Encoding' => '8bit',
        ];

        // Encode the Bulgarian subject.
        $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

        // Send the email.
        $sent = mail(
            $to,
            $encodedSubject,
            $message,
            $headers
        );

        var_dump($sent);
        var_dump(error_get_last());

        if (!$sent) {

            SimpleRouter::response()
                ->httpCode(500)
                ->json([
                    'success' => false,
                    'message' => 'Възникна грешка при изпращането на запитването.',
                ]);

            return;
        }

        // Return a successful response.
        SimpleRouter::response()
            ->httpCode(200)
            ->json([
                'success' => true,
                'message' => 'Благодаря за вашето запитване! Ще се свържа с вас възможно най-скоро.',
            ]);
    }
}