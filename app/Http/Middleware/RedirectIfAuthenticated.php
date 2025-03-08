<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Maneja la solicitud entrante.
     *
     * Si el usuario ya está autenticado, lo redirige a una ruta específica (por ejemplo, '/dashboard').
     * De lo contrario, permite continuar con la solicitud.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
{
    foreach ($guards as $guard) {
        if (Auth::guard($guard)->check()) {
            return redirect($this->redirectTo($request));
        }
    }

    return $next($request);
}

protected function redirectTo(Request $request)
{
    return route('dashboard'); // O la ruta que prefieras para usuarios autenticados.
}

}
