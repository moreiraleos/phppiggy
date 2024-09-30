<?php

namespace App\Config;

use App\Controllers\AboutController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get("/about", [AboutController::class, 'about']);
    $app->get("/register", [AuthController::class, 'registerView']);
    $app->post("/register", [AuthController::class, 'register']);
}
