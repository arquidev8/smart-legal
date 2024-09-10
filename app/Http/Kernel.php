<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middleware global
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\LocaleMiddleware::class,
        ],

        'api' => [
            // Middleware para el grupo API
        ],
    ];

    protected $routeMiddleware = [
        'locale' => \App\Http\Middleware\LocaleMiddleware::class,
        // Otros middlewares
    ];
}