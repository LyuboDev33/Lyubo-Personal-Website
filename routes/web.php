<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Http\Controllers\ProfileController;



SimpleRouter::get('/', [ProfileController::class, 'index']);
SimpleRouter::get('/projects', [ProfileController::class, 'profileIndex']);
SimpleRouter::get('/contact', [ProfileController::class, 'contactIndex']);
SimpleRouter::get('/services', [ProfileController::class, 'serviceIndex']);
SimpleRouter::get('/about', [ProfileController::class, 'aboutIndex']);
// SimpleRouter::get('/products', [ProfileController::class, 'productIndex']);


SimpleRouter::post('/change-language', function () {
    $lang = htmlspecialchars($_POST['language']);

    $availableLanguages = ['en', 'bg'];

    if (!in_array($lang, $availableLanguages)) {
        $_SESSION['language'] = 'bg';
    }

    $_SESSION['language'] = $lang;
    return back();
});

