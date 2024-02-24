<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middlewware\TemplateDataMiddleware;

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
}