@extends('layouts.plantilla')

@section('title', 'Perfil de Usuario')

@section('content')
<style>
    body {
        background-color: black;
        color: white;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 40px;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .profile-container {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }
    .profile-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px;
    }
    .profile-header img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }
    .user-info {
        text-align: left;
        flex: 1;
        margin-left: 20px;
    }
    .goal-card {
        background-color: #1c1c1c;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .goal-card h3 {
        margin: 0;
        font-size: 20px;
    }
    .icons-container {
        display: flex;
        justify-content: space-around;
        margin-bottom: 40px;
    }
    .icon {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 16px;
        width: 120px;
    }
    .icon img {
        width: 60px;
        height: 60px;
        margin-bottom: 10px;
    }
    .results-table {
        text-align: center;
        margin-bottom: 40px;
    }
    .days {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }
    .day {
        text-align: center;
        font-size: 14px;
    }
    .day span {
        display: block;
        font-size: 22px;
    }
    .stats {
        display: flex;
        justify-content: space-around;
    }
    .stat {
        background-color: #1c1c1c;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        flex: 1;
        margin: 0 15px;
    }
    .stat img {
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }
    .stat-value {
        font-size: 28px;
        font-weight: bold;
    }
</style>

<div class="profile-container">
    <div class="profile-header">
        <div class="user-info">
            <h3>Isidro Martinez</h3>
            <p>Isidro12@gmail.com</p>
        </div>
        <img src="{{ asset('images/user-profile.jpg') }}" alt="User Profile">
    </div>

    <div class="goal-card">
        <div>
            <h3>Mejorar la resistencia</h3>
            <p>Objetivo</p>
        </div>
        <div>
            <button class="btn btn-outline-light">Gana Premios</button>
            <button class="btn btn-outline-light">Compartir</button>
        </div>
    </div>

    <div class="icons-container">
        <div class="icon">
            <img src="{{ asset('images/icon-trophy.png') }}" alt="Logros">
            <p>Logros</p>
        </div>
        <div class="icon">
            <img src="{{ asset('images/icon-graph.png') }}" alt="Nivel 1">
            <p>Nivel 1</p>
        </div>
        <div class="icon">
            <img src="{{ asset('images/icon-workout.png') }}" alt="Rutina">
            <p>Rutina</p>
        </div>
        <div class="icon">
            <img src="{{ asset('images/icon-more.png') }}" alt="Más">
            <p>Más</p>
        </div>
    </div>

    <div class="results-table">
        <h4>Tabla de resultados</h4>
        <div class="days">
            <div class="day"><span>✔</span>DOM</div>
            <div class="day"><span>✔</span>LUN</div>
            <div class="day"><span>✔</span>MAR</div>
            <div class="day"><span>✔</span>MIER</div>
            <div class="day"><span>✔</span>JUE</div>
            <div class="day"><span>✔</span>VIE</div>
            <div class="day"><span>✔</span>SAB</div>
        </div>
    </div>

    <div class="stats">
        <div class="stat">
            <img src="{{ asset('images/icon-time.png') }}" alt="Tiempo">
            <div class="stat-value">120</div>
            <p>MIN</p>
        </div>
        <div class="stat">
            <img src="{{ asset('images/icon-calories.png') }}" alt="Calorías">
            <div class="stat-value">1068</div>
            <p>KCAL</p>
        </div>
    </div>
</div>
@endsection
