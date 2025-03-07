<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class Handler extends ExceptionHandler
{
    /**
     * Registra los tipos de excepciones que no se informan.
     */
    protected $dontReport = [];

    /**
     * Registra las excepciones que no deberían ser validadas.
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Maneja la excepción y devuelve una respuesta personalizada.
     */
    public function render($request, Throwable $exception)
    {
        // Manejar el error 429 (Too Many Requests)
        if ($exception instanceof TooManyRequestsHttpException) {
            return response()->view('errors.429', [], 429);
        }

        return parent::render($request, $exception);
    }
}
