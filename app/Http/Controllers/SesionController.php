<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (!auth()->attempt(request()->only(['email', 'password']))) {
            return back()->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }

        // Regenerar la sesión por seguridad
        request()->session()->regenerate();

        // Redirigir al usuario a su destino previsto
        return redirect()->intended('dashboard');
    }

    public function destroy(Request $request)
    {
        auth()->logout();

        // Invalida la sesión para evitar problemas de seguridad
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // Asegurar que va a la ruta correcta
    }
    
 // Método para mostrar el dashboard y verificar si el usuario está autenticado
    public function dashboard()
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión');
    }

    return view('auth.dashboard');
}

}