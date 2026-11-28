<?php

use App\Http\Controllers\EmailController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Http\Controllers\ProfileController;



SimpleRouter::get('/', [ProfileController::class, 'index']);
SimpleRouter::get('/projects', [ProfileController::class, 'profileIndex']);
SimpleRouter::get('/contact', [ProfileController::class, 'contactIndex']);
SimpleRouter::get('/services', [ProfileController::class, 'serviceIndex']);
SimpleRouter::get('/about', [ProfileController::class, 'aboutIndex']);
// SimpleRouter::get('/products', [ProfileController::class, 'productIndex']);
SimpleRouter::get('/test', [ProfileController::class, 'test']);

SimpleRouter::get('/offers', [ProfileController::class, 'offers']);
SimpleRouter::get('/offers/company-website', [ProfileController::class, 'offerWebDevelopment']);
SimpleRouter::get('/offers/online-store', [ProfileController::class, 'offerOnlineStore']);
SimpleRouter::post('/send-contact-form', [EmailController::class, 'sendContactForm'])->name('offers.inquiry');

SimpleRouter::post('/change-language', function () {
    $lang = htmlspecialchars($_POST['language']);

    $availableLanguages = ['en', 'bg'];

    if (!in_array($lang, $availableLanguages)) {
        $_SESSION['language'] = 'bg';
    }

    $_SESSION['language'] = $lang;
    return back();
});

