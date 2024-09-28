<?php

declare(strict_types=1);
require "../vendor/autoload.php";

use App\Controllers\HomeController;
use Framework\App;


$app = new App();
$app->get('/', [HomeController::class, 'home']);

// dd($app);
return $app;
