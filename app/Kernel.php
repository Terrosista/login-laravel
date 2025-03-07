<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Los grupos de middleware de la aplicación.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
           
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':5,1', // Límite de 5 intentos por minuto
        ],

        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':10,1', // Máximo 10 intentos por minuto
        ],
    ];
}
