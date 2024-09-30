<?php

declare(strict_types=1);
require "../vendor/autoload.php";

use App\Config\Paths;
use App\Controllers\AboutController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use Framework\App;

use function App\Config\registerMiddleware;
use function App\Config\registerRoutes;

$app = new App(Paths::SOURCE . "app/container-definitions.php");
// $app->get('/', [HomeController::class, 'home']);
// $app->get('/about', [AboutController::class, 'about']);
// $app->get('/register', [AuthController::class, 'registerView']);
registerRoutes($app);

registerMiddleware($app);

// dd($app);
return $app;
