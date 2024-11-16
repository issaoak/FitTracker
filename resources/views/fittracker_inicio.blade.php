@extends('layouts/plantilla')

@section('title', 'FitTracker')

@section('content')
<style>
    body {
        background-color: black;
        color: white;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 0;
        text-align: center;
    }
    .highlight-text {
        color: #00FF00;
        margin-bottom: 20px;
    }
    .button {
        background-color: #00FF00;
        color: black;
        font-weight: bold;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: #00cc00;
    }
    .footer {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 14px;
    }
</style>

<div class="container text-center">
    <h1>LET'S WORK OUT</h1>
    <p class="highlight-text">¡QUEREMOS VERTE TRIUNFAR!</p>
    <a href="{{ route('iniciar_sesion') }}" class="button">VAMOS A COMENZAR</a>
</div>
<div class="footer">
    <p>Teléfono: +1 (123) 456-7890</p>
    <p>Email: WWW.FITTRACKER.COM</p>
</div>
@endsection
