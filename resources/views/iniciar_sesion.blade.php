@extends('layouts.plantilla')

@section('title', 'Iniciar sesión')

@section('content')
<style>
    body {
        background-color: #f8f8f2; /* Color de fondo similar al de la imagen */
        color: #333;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        min-height: 100vh;
    }
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .form-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
    }
    .form-label {
        font-weight: bold;
        margin-top: 10px;
    }
    .form-control {
        margin-bottom: 10px;
    }
    .submit-btn {
        background-color: #00cc00;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }
    .submit-btn:hover {
        background-color: #009900;
    }
    .links {
        margin-top: 10px;
        font-size: 14px;
    }
    .links a {
        color: #007bff;
        text-decoration: none;
    }
    .links a:hover {
        text-decoration: underline;
    }
</style>

<div class="form-container">
    <h2 class="form-title">Inicia sesión para continuar</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <button type="submit" class="submit-btn">Empezar</button>
    </form>

    <div class="links">
        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a><br>
        <a href="{{ route('registro') }}">¿Aún no tienes cuenta? Regístrate</a>
    </div>
</div>
@endsection
