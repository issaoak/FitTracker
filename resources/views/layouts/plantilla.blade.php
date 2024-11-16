<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
        }
        .navbar {
            background-color: black;
            border-bottom: 1px solid #444;
        }
        .navbar-brand img {
            height: 40px;
            width: auto;
        }
        .nav-link {
            color: white;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #00FF00;
        }
        .nav-item .icon {
            font-size: 18px;
            margin-right: 5px;
        }
        .debug-badge {
            background-color: #a52a2a;
            color: white;
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 12px;
        }
        .content {
            margin-top: 70px; /* Ajusta este valor según la altura de la barra de navegación */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('images/login_image.jpeg') }}" alt="Logo">
        </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="icon bi-house-door-fill"></i>Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="icon bi-person-fill"></i>Usuario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #00FF00;">
                            <i class="icon bi-bell-fill"></i>Notificaciones
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
