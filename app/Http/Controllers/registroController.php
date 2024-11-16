<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;


class registroController extends Controller
{
    public function store(validadorCliente $request)
    {
        $validatedData = $request->validated();
        
        dd("El formulario se ha enviado correctamente."); // Para verificar si se llega hasta aquí
    
        return redirect('/inicio')->with('mensaje', 'Registro exitoso. ¡Bienvenido!');
    }
    public function inicio()
    {
        // Lógica para mostrar la vista de inicio
        return view('inicio');
    }
  
}
