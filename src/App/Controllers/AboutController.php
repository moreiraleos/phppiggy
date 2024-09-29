<?php

namespace App\Controllers;

use App\Config\Paths;
use Framework\TemplateEngine;

class AboutController
{
    // private TemplateEngine $view;

    public function __construct(private TemplateEngine $view)
    {
        // $this->view  = new TemplateEngine(Paths::VIEW);
    }

    public function about()
    {
        echo $this->view->render('about', [
            'title' => 'About',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
