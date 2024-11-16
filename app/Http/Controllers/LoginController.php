<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Aquí puedes agregar la lógica de autenticación
        // Ejemplo: intentar autenticar al usuario
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home'); // Redirige a la página principal
        }

        // Si la autenticación falla, redirigir de nuevo con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }
}
