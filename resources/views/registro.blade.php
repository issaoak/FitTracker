@extends('layouts.plantilla')

@section('title', 'Registrarse')

@section('content')
<style>
    body {
        background-color: #f8f8f2;
        color: #333;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        min-height: 100vh;
    }
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
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
        margin-top: 5px; /* Espacio entre el mensaje de error y el campo */
        margin-bottom: 15px; /* Espacio adicional debajo de cada campo */
    }
    .text-danger {
        color: red;
        font-size: 12px;
        margin-bottom: 15px; /* Espacio debajo del mensaje de error */
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
</style>

<div class="form-container">
    <h2 class="form-title">Regístrate para continuar</h2>
    <form action="{{ route('registrar') }}" method="POST">
        @csrf

        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="txtnombre" class="form-control" value="{{ old('txtnombre') }}">
        <small class="text-danger">{{ $errors->first('txtnombre') }}</small>

        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="txtapellido" class="form-control" value="{{ old('txtapellido') }}">
        <small class="text-danger">{{ $errors->first('txtapellido') }}</small>

        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" name="txtcorreo" class="form-control" value="{{ old('txtcorreo') }}">
        <small class="text-danger">{{ $errors->first('txtcorreo') }}</small>

        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control">
        <small class="text-danger">{{ $errors->first('password') }}</small>

        <label for="confirmar_password" class="form-label">Confirmar contraseña</label>
        <input type="password" id="confirmar_password" name="confirmar_password" class="form-control">
        <small class="text-danger">{{ $errors->first('confirmar_password') }}</small>

        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
        <small class="text-danger">{{ $errors->first('fecha_nacimiento') }}</small>

        <button type="submit" class="submit-btn">Registrar</button>
    </form>
</div>
@endsection
