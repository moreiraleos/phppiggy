<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{
    public function __construct(private TemplateEngine $view, private ValidatorService $validatorService) {}


    public function registerView()
    {
        echo $this->view->render('register', [
            'title' => 'Register'
        ]);
    }

    public function register()
    {
        // dd($_POST);
        $this->validatorService->validateRegister($_POST);
    }
}
