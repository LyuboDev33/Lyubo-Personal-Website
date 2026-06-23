<?php

session_start(); 

require_once '../vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\Pecce\Controllers');

require_once '../routes/web.php';

SimpleRouter::start();
