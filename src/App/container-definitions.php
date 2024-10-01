<?php

declare(strict_types=1);

use App\Config\Paths;
use App\Services\ValidatorService;
use Framework\TemplateEngine;


return [
    TemplateEngine::class => fn(): TemplateEngine => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn(): ValidatorService => new ValidatorService()
];
