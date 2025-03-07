<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registroController extends Controller
{
    //
    public function create(){
        return view('auth.register');
    }

    public function store( Request $request){

      // 🔹 Validar los datos
      $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);


       // 🔹 Crear el usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 🔹 Redirigir con mensaje de éxito
        return redirect()->route('/')->with('success', 'Usuario registrado correctamente.');
       
    }   
}
